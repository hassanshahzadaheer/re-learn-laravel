<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterUser extends Controller
{
    public function create() {
        return view('auth.register');
    }

    public function store(Request $request) {
        dd($request->all());
    }
  
}
