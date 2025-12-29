<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Destination;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $dest = Destination::count();
        $trans = Transaction::count();
        $user = User::count();
        $data = Transaction::paginate(5);
        return view('admin-page.dashboard',compact('dest','trans','user','data'));
    }
}
