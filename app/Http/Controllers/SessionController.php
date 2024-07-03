<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Auth;
Use Illuminate\Validation\Rules\Password;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    public function store()
    {
     

      $attributes =  request()->validate(
        [
            'email' => ['required','email'],
            'password' => ['required']
        ]
       );
   
       Auth::attempt($attributes);
       
       request()->session()->regenerate();

       return redirect('/jobs');
    }
    public function destory()
    {
        Auth::logout();
        return redirect('/');
    }
}
