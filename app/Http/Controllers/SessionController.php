<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class SessionController extends Controller
{
    public function create() {
        return view('auth.login');
    }
    public function store() {
        dd(request()->all());
    }
}
