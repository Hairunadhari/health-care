<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TransactionController extends Controller
{
    public function index(){
        if (!empty($request->search)) {
            $datas = Transaction::where('nama_pemesan', 'like', '%' . $request->search . '%')->latest()->paginate(5);
        }else{

            $datas = Transaction::latest()->paginate(5);
        }
        return view('admin-page.transactions.transaction',compact('datas'));
    }
    public function detail($id){
        $data = Transaction::find($id);
        return view('admin-page.transactions.detail',compact('data'));
    }

}
