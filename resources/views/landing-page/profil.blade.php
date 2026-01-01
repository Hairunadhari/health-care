@extends('landing-page.layouts.app')
@section('content')
    <div class="text-white bg-gray-100 absolute inset-0 z-0  bg-cover bg-center bg-no-repeat flex items-center justify-center h-full p-4"
    style="background-image: linear-gradient(rgba(182, 179, 179, 0.6), rgba(182, 178, 178, 0.6)), url('{{ asset('assets-landingpage/img/home.jpeg') }}');">

 <div class="container mx-auto px-4 mt-10 flex flex-col md:flex-row items-center md:items-start justify-center gap-20">
        
        <div class="flex flex-col items-center text-center">
            <div class="w-40 h-52 bg-white rounded-sm border-4 border-gray-200 overflow-hidden shadow-lg mb-4">
                <img src="{{ asset('assets-landingpage/img/profil.jpg') }}" alt="Profile" class="w-full h-full object-cover">
            </div>
            <h2 class="text-2xl font-bold">{{strtoupper(Auth::user()->name)}}</h2>
            <p class="text-lg tracking-widest">0{{Auth::user()->telp ?? '8xxxxxxxxxxx'}}</p>
        </div>

        <div class="w-full max-w-xl space-y-4">
            
            <a href="/profil-saya" class="w-full flex justify-between items-center bg-blue-500/60 hover:bg-blue-600/70 transition-all p-5 rounded-3xl shadow-md border border-white/20">
                <span class="text-lg font-semibold ml-4">Profil Saya</span>
                <i class="fas fa-chevron-right mr-4"></i>
            </a>

            <a href="/ubah-password" class="w-full flex justify-between items-center bg-blue-500/60 hover:bg-blue-600/70 transition-all p-5 rounded-3xl shadow-md border border-white/20">
                <span class="text-lg font-semibold ml-4">Ubah Password</span>
                <i class="fas fa-chevron-right mr-4"></i>
            </a>

            <a class="w-full flex justify-between items-center bg-blue-500/60 hover:bg-blue-600/70 transition-all p-5 rounded-3xl shadow-md border border-white/20">
                <span class="text-lg font-semibold ml-4">Janji dengan dokter</span>
                <i class="fas fa-chevron-right mr-4"></i>
            </a>

            <a class="w-full flex justify-between items-center bg-blue-500/60 hover:bg-blue-600/70 transition-all p-5 rounded-3xl shadow-md border border-white/20">
                <span class="text-lg font-semibold ml-4">Diskusi Saya</span>
                <i class="fas fa-chevron-right mr-4"></i>
            </a>

            <a class="w-full flex justify-between items-center bg-blue-500/60 hover:bg-blue-600/70 transition-all p-5 rounded-3xl shadow-md border border-white/20">
                <span class="text-lg font-semibold ml-4">Lama Meminum Obat</span>
                <i class="fas fa-chevron-right mr-4"></i>
            </a>

        </div>
    </div>

    <div class="fixed bottom-8 right-8">
        <button class="text-4xl hover:text-orange-400 transition-colors">
            <i class="fas fa-sign-out-alt"></i>
        </button>
    </div>


    
</div>
@endsection
