<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //show register/create form
    public function create()
    {
        return view('users.register');
    }

    //Creater New User
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
            // | = or
        ]);
        // hash the password using the bcrypt()
        $formFields['password'] = bcrypt($formFields['password']);

        //create the user
        $user = User::create($formFields);

        //Login
        // using the auth() helper
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out');
    }

    // bwgon the video at : 3:37:00
}// end of the class 
