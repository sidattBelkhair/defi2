<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Utilisateur;
use Illuminate\Validation\ValidationException;

class AuthController 
{
    /**
     * Handle user signup.
     */
    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route("utilisateurs.index");
    }

    /**
     * Handle user login and return token.
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            throw new ValidationException([
                "email" => "Invalid Credientals."
            ]);
        }

        return redirect()->route('utilisateurs.index');
       
    }

    public function logout()
    {
        Auth::logout();

        return redirect("/");
    }
}
