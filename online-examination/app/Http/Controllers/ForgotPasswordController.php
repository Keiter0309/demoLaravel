<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    public function forgetPassword()
    {
        return view('forgot-password');
    }

    public function forgetPasswordPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);
        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);

        Mail::send('email.forget-password', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password Notification');
        });

        return redirect()->to(route('forget.password'))->with('message', 'We have e-mailed your password reset link!');
    }


    public function resetPassword($token)
    {
        return view('new-password', compact('token'));
    }

    public function resetPasswordPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ], [
            'email.required' => 'Please enter email',
            'password.required' => 'Please enter password',
            'password.min' => 'Password must be at least 6 characters',
            'password_confirmation.confirmed'=> 'Password confirmation does not match',
            'password_confirmation.required' => 'Please enter confirm password',
        ]);

        $updatePassword = DB::table('password_resets')
            ->where([
                'email' => $request->email,
                'token' => $request->token
            ])
            ->first();
        if (!$updatePassword) {
            return back()->withInput()->with('error', 'Invalid token!');
        }
        $user = User::where('email', $request->email)->first();
        if (Hash::check($request->password, $user->password)) {
            return back()->withInput()->with('error', 'New password must be different from old password');
        }
        $user->update(['password' => Hash::make($request->password)]);
        DB::table('password_resets')->where(['email' => $request->email])->delete();

        return redirect()->to(route('login'))->with('success', 'Your password has been changed!');
    }
}