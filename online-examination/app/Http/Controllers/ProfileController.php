<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            if (auth()->user()->role == 'admin') {
                $users = User::all();
                return view('profile', ['users' => $users]);
            } else {
                $users = User::where('id', auth()->user()->id)->get();
                return view('profile', ['users' => $users]);
            }
        }
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'role' => 'required',
        ]);

        $user = User::create($validatedData);
        auth()->login($user);
        return redirect('/profile')->with('success', 'User created successfully');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('profile_edit', ['user' => $user]);
    }

    public function update(Profile $profile, Request $request, $id)
    {
        $user = Auth::user();

        $request->validate([
            'name' => ['required', 'min:3', 'max:25', Rule::unique('users')->ignore($user->id)],
            'email' => ['required', 'email'],
            'role' => ['required', 'in:admin,user'],
        ]);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role = $request->input('role');
        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/profile')->with('success', 'User deleted successfully');
    }
}
