<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class Usercontroller extends Controller
{
    public function register(Request $request) {
        $fields = $request->validate([
            'name' => ['required', 'min:3', 'max:25', Rule::unique('users', 'name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:3', 'max:30']
        ],
            [
                'name.required' => 'Please enter your username',
                'email.required' => 'Please enter your email',
                'password.required' => 'Please enter your password'
            ]
        );
        $fields['password'] = bcrypt($fields['password']);
        $user = User::create($fields);
        $request->session()->regenerate();
        $request->session()->put('sessionUsername', $fields['name']);
        auth()->login($user);
        return redirect(url('/'))->with('success', 'User created successfully');
    }

    public function login(Request $request) {
        $fields = $request->validate([
           'loginName'=>['required'],
            'loginPassword'=>['required'],
        ]);
        if (auth()->attempt(['name' => $fields['loginName'], 'password' => $fields['loginPassword']])){
            $request->session()->regenerate();
            $request->session()->put('sessionUsername', $fields['loginName']);
            return redirect('/');
        }

        $request->session()->flash('error', 'Incorrect username or password');
        return redirect('/login');
    }

    public function logout() {
        auth()->logout();
        return redirect('/login');
    }

    public function addUser(Request $request) {
        $validateData = $request->validate([
           'name'=>['required', 'min:3', 'max:25', Rule::unique('users', 'name')],
            'email'=>['required', 'email', Rule::unique('users', 'email')],
            'password'=>['required', 'min:3', 'max:30'],
            'role' => ['required', 'in:admin,user'],
        ],
            [
                'name.required'=>'Please enter your username',
                'email.required'=>'Please enter your email',
                'password.required'=>'Please enter your password',
                'role.required'=>'Please select a role'
            ]
        );
        $validateData['password'] = bcrypt($validateData['password']);
        $user = new User;
        $user->name = $validateData['name'];
        $user->email = $validateData['email'];
        $user->password = $validateData['password'];
        $user->role = $validateData['role'];
        $user->save();
        return redirect('/profile')->with('message', 'User added successfully');
    }
}
