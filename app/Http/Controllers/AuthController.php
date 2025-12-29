<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('landing-page.register');
    }
    public function login(){
        return view('landing-page.login');
    }
}
