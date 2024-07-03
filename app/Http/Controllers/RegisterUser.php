<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterUser extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {

        
        $attributes =  request()->validate(
            [
                "first-name" => ['required'],
                "last-name" => ['required'],
                "email" => ['required', 'email'],
                "password" => ['required', Password::min(6), 'confirmed'],
            ]
        );

       
        $name = $attributes['first-name'] . ' ' . $attributes['last-name'];

       
        $userData = [
            'name' => $name,
            'email' => $attributes['email'],
            'password' => Hash::make($attributes['password']),
        ];

        
      $user =  User::create($userData);
      Auth::login($user);

        return redirect('/jobs');
    }
}
