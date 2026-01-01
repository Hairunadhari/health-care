<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\JadwalObat;
use App\Models\LogMinumObat;
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
        $userId = Auth::id();
        $today = Carbon::today();

        $data = JadwalObat::where('user_id', $userId)
        ->with(['logs' => function ($q) use ($today) {
            $q->whereDate('tanggal', $today);
        }])
        ->get();

        return view('landing-page.layanan', compact('data'));
    }
     public function kontak(){
        return view('landing-page.kontak');
    }

    public function frekuensi(Request $request){
        if(!Auth::check()){

            return back()->with('error', 'Silahkan login terlebih dahulu.');
        }
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
    
    public function submit_perasaan(){
        return back()->with('success','Data berhasil disimpan.');
    }

    public function minum_obat(Request $request)
    {
        if(!Auth::check()){

            return back()->with('error', 'Silahkan login terlebih dahulu.');
        }
        LogMinumObat::create([
            'jadwal_obat_id' => $request->jadwal_obat_id,
            'user_id'        => Auth::id(),
            'jam'            => $request->jam,
            'tanggal'        => now()->toDateString(),
        ]);

        return back()->with('success', 'Obat berhasil dicatat.');
    }

}
