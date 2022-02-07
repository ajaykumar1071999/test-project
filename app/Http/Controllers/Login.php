<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    public function index()
    {
        $title = "Login";

        return view('auth.login', compact('title'));
    }

    public function authenticate(Request $request)
    {
       dd($request->all());
    }
}
