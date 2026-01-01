<?php

namespace App\Http\Controllers;

use App\Models\JadwalObat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function frekuensi(Request $request){
        if ($request->frekuensi == null) {
            return back()->with('error', 'Silahkan pilih frekuensi');
        }
        
        JadwalObat::create([
            'nama' => $request->nama,
            'dosis' => $request->dosis,
            'frekuensi' => $request->frekuensi,
            'user_id' => Auth::user()->id,
        ]);
        
        return back()->with('success', 'Data berhasil disimpan.');
    }
}
