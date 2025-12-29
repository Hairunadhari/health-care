<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    public function index(Request $request){
        if (!empty($request->search)) {
            $data = User::where('name', 'like', '%' . $request->search . '%')->latest()->paginate(5);
        }else{

            $data = User::latest()->paginate(5);
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
            'no_telp'=>$request->no_telp,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);
        return redirect('/admin/users')->with('success', 'Data Berhasil DiBuat.');
    }
    public function update(Request $request, $id){
        $user = User::find($id);
        $user->update([
            'name'=>$request->name,
            'no_telp'=>$request->no_telp,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);
        return redirect('/admin/users')->with('success', 'Data Berhasil DiUpdate.');
    }
    public function delete($id){
        $data = User::find($id);
        $data->delete();
        return redirect('/admin/users')->with('success', 'Data Berhasil DiHapus.');
    }
}
