<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\JadwalObat;
use App\Models\LogMinumObat;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request){
          // Cek apakah user sudah login
        if (!Auth::check()) {
            return redirect('/')->with('error', 'Silakan login terlebih dahulu.');
            }
            
        // Cek role pasien
        if (Auth::user()->role === 'pasien') {
            return redirect('/')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
        }
        if (!empty($request->search)) {
            $data = User::where('name', 'like', '%' . $request->search . '%')->latest()->paginate(5);
        }else{

            $data = User::latest()->paginate(10);
        }
        return view('admin-page.users.user',compact('data'));
    }
    public function submit(Request $request){
        $cekemail  = User::where('email',$request->email)->first();
        if($cekemail != null){
            
            return back()->with(['error' => 'Email Sudah Digunakan.']);
        }
        User::create([
            'name'=>$request->name,
            'role'=>$request->role,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ]);
        return redirect('/admin/users')->with('success', 'Data Berhasil DiBuat.');
    }
    public function update(Request $request, $id){
        $cekemail  = User::where('email',$request->email)->first();
        if($cekemail != null){
            
            return back()->with(['error' => 'Email Sudah Digunakan.']);
        }
        $user = User::find($id);
        $user->update([
            'name'=>$request->name,
            'role'=>$request->role,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ]);
        return redirect('/admin/users')->with('success', 'Data Berhasil DiUpdate.');
    }
    public function delete($id){
        $data = User::find($id);
        LogMinumObat::where('user_id',$id)->delete();
        JadwalObat::where('user_id',$id)->delete();
        $data->delete();
        return redirect('/admin/users')->with('success', 'Data Berhasil DiHapus.');
    }
}
