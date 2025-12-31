<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('landing-page.home');
    }
     public function tentang(){
        return view('landing-page.tentang');
    }
     public function layanan(){
        return view('landing-page.layanan');
    }
     public function kontak(){
        return view('landing-page.kontak');
    }
}
