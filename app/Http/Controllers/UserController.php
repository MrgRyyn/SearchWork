<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // show register create form
    public function register() {
        return view('register');
    }

    // Create New User
    public function store(Request $request) {
        $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'phone_number' => ['required', Rule::unique('users', 'phone_number')],
            'username' => ['required', Rule::unique('users', 'username')],
            'password' => 'required|confirmed|min:6'
        ]); 

            $user = new User;
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->birthdate = $request->input('birthdate');
            $user->city = $request->input('city');
            $user->address = $request->input('address');
            $user->phone_number = $request->input('phone_number');
            $user->username = $request->input('username');
            $user->password = Hash::make($request->input('password'));
            $user->save();
            
            // user login
            auth()->login($user);

            // Store the user's name in the session
            $request->session()->put('username', $user);



            return redirect('/');
    }

    // user logout
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logout');
    }

    // show login form
    public function loginPage() {
        return view('login');
    }

    // //  authenticate user
    // public function authenticate(Request $request)
    // // {
    // // $credentials = $request->only('email', 'password');
    
    // // if (Auth::attempt($credentials)) {
    // //     // Authentication passed...
    // //     return redirect()->intended('/');
    // // }
    
    // // return redirect()->back()->withErrors(['email' => 'Invalid email or password.']);
    // // }

    // authenticate users
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt(($formFields))) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now login!');
        }

        return back()->withErrors(['email' => 'Invalid email or Password'])->onlyInput('email');
    }

    // seller profile 

}
