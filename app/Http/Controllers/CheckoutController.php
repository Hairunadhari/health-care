<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Transaction;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(Request $request){
        $dest = Destination::find($request->id);
        $data = [
            'data_pemesan'=>$request->all(),
            'dest' => $dest
        ];
        // dd($data);
        return view('landing-page.checkout',compact('data'));
    }
    
    public function submit(Request $request){
        Transaction::create([
            'nama_pemesan'=> $request->name,
            'email_pemesan'=> $request->email,
            'no_telp_pemesan'=> $request->no_telp,
            'jumlah_tiket'=> $request->jumlah_tiket,
            'kota_tujuan' => $request->kota_tujuan,
            'total_harga' => $request->total_harga,
            'metode_bayar' => $request->metode_bayar,
            'tanggal_keberangkatan' => $request->date,
            'status_pembayaran' => 'success',
        ]);
        return redirect('/checkout-success');
    }
    public function sukses(){
        return view('landing-page.checkout_sukses');
    }
}
