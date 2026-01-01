<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
        return view('landing-page.register');
    }
    public function login(){
        return view('landing-page.login');
    }

    public function register_submit(Request $request){
         $request->validate([
            'name'       => 'required|string|max:255',
            'email'      => 'required|email|unique:users,email',
            'password'   => 'required|min:5|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Redirect atau tampilkan pesan sukses
        return redirect('/login')->with('success', 'Registrasi berhasil! Silakan login.');
    }

     public function login_submit(Request $request)
    {
        // 1. Validasi input
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        // 2. Coba login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/tentang')
                ->with('success', 'Login berhasil, selamat datang!');
        }

        // 3. Jika gagal
        return back()->with(
            'error', 'Email atau password salah',
        )->withInput();
    }

     public function logout(Request $request)
    {
        Auth::logout();

        // invalidate session
        $request->session()->invalidate();

        // regenerate CSRF token
        $request->session()->regenerateToken();

        return redirect('/tentang')
            ->with('success', 'Berhasil logout');
    }
    
    public function profil(){
        return view('landing-page.profil');
    }
    public function profil_saya(){
        return view('landing-page.profil_saya');
    }
    public function profil_update(Request $request){
        $user = User::find(Auth::user()->id);
        $request->validate([
            'name'       => 'required|string|max:255',
            'telp'       => 'required',
            'tgl_lahir'  => 'required|date',
            'kota'       => 'required|string|max:100',
            'nik'        => 'required|string',
            'jenis_kelamin'        => 'required|string',
        ]);

        $user->update([
            'name'      => $request->name,
            'telp'      => $request->telp,
            'tgl_lahir' => $request->tgl_lahir,
            'kota'      => $request->kota,
            'nik'       => $request->nik,
            'jenis_kelamin'       => $request->jenis_kelamin,
        ]);

        return redirect('/profil-saya')->with('success', 'Profil berhasil diperbarui.');
    }
    public function ubah_password_view(){
        return view('landing-page.ubah_password');
    }
    public function update_password(Request $request){
        try {
            //code...
            $auth = Auth::user();
            $user = User::find($auth->id);
            $request->validate([
                'current_password' => 'required',
                'new_password'     => 'required|min:5|confirmed',
            ]);
            
            if (!\Hash::check($request->current_password, $auth->password)) {
                return back()->with('error', 'Password lama tidak sesuai.');
            }
            // Cek apakah password lama sesuai
            
            // Update password baru
            $user->update([
                'password' => bcrypt($request->new_password),
            ]);
            
            return back()->with('success', 'Password berhasil diubah.');
        } catch (\Throwable $th) {
            //throw $th;
            return back()->with('error', $th->getMessage());
        }
    }
}
