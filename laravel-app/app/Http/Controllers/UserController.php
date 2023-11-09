<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;
class UserController extends Controller
{
   public function home() {
       return redirect('/home');
   }

    public function login(Request $request) {
        $incomingFields =  $request->validate([
            'loginName'=> 'required',
            'loginPassword'=> 'required',
        ]);
        if(auth()->attempt(['name'=>$incomingFields['loginName'],'password'=>$incomingFields['loginPassword']])) {
            $request->session()->regenerate();
            $request->session()->put('username', $incomingFields['loginName']);
            return redirect('/');
        }
        $request->session()->flash('error', 'Incorrect username or password');
        return redirect('/login');
    }

    public function logout() {
        auth()->logout();
        return redirect('/login');
    }

    public function register(Request $request)
    {
        $inComingFields = $request->validate([
            'name' => ['required', 'min:3', 'max:10',Rule::unique('users', 'name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:3', 'max:20']
        ]);
        try {
            $inComingFields['password'] = bcrypt($inComingFields['password']);
            $user = User::create($inComingFields);
            $request->session()->regenerate();
            $request->session()->put('username', $inComingFields['name']);
            auth()->login($user);
            return redirect('/');
        }
        catch (\Illuminate\Database\QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if($errorCode===1062) {
                Session::flash('message', 'Email or Username is exist');
            }else {
                Session::flash('message', 'An error occurred, please try again');
            }
        }
        return redirect()->back();
    }
}
