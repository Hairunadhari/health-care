<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Destination;
use App\Models\Transaction;
use App\Models\LogMinumObat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function log_history(){
         // Cek apakah user sudah login
        if (!Auth::check()) {
            return redirect('/')->with('error', 'Silakan login terlebih dahulu.');
            }
            
        // Cek role pasien
        if (Auth::user()->role === 'pasien') {
            return redirect('/')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
        }
        $datas = LogMinumObat::paginate(10);
        return view('admin-page.log-history.log', compact('datas'));
    }
}
