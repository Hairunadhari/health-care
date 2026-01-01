@extends('landing-page.layouts.app')
@section('content')
<div class="bg-gray-100 absolute inset-0 z-0  bg-cover bg-center bg-no-repeat flex items-center justify-center h-full p-4"
    style="background-image: linear-gradient(rgba(182, 179, 179, 0.6), rgba(182, 178, 178, 0.6)), url('{{ asset('assets-landingpage/img/home.jpeg') }}');">

    <div
        class="relative w-full rounded-3xl overflow-hidden shadow-2xl max-w-4xl border border-white/40 bg-white/30 backdrop-blur-md">
        <form action="/profil-update" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="relative z-10 p-8 md:p-12 text-[#003366]">

                <div class="flex justify-between items-center mb-8">
                    <h1 class="text-2xl font-bold">Profil Saya</h1>
                    <button class="flex items-center gap-2 font-bold hover:opacity-70 transition">
                        <span>Ubah</span>
                        <i class="fas fa-sync-alt text-xl"></i>
                    </button>
                </div>

                <div class="flex flex-col md:flex-row gap-8">
                    <div class="flex-shrink-0">
                        <div
                            class="w-32 h-32 md:w-40 md:h-40 bg-gray-400 rounded-full border-4 border-white shadow-md flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('assets-landingpage/img/profil.jpg') }}" alt="Profile Picture"
                                class="w-full h-full object-cover">
                        </div>
                    </div>

                    <div class="flex-1 space-y-6">
                        <div>
                            <input type="text" value="{{ strtoupper(Auth::user()->name ?? '-') }}" name="name"
                                class="font-semibold bg-transparent border-none p-0"><br>
                            <input type="number" value="0{{ Auth::user()->telp ?? '089812837' }}" name="telp"
                                class="font-semibold bg-transparent border-none p-0"><br>

                            <input type="email" value="{{ Auth::user()->email ?? '-' }}"
                                class="font-semibold bg-transparent border-none p-0" readonly>
                        </div>

                        <div class="space-y-4">
                            <div class="border-b border-[#003366]/30 pb-1">
                                <p class="text-sm font-bold opacity-80 uppercase tracking-wide">Tanggal Lahir</p>
                                <input type="date" value="{{ Auth::user()->tgl_lahir}}" name="tgl_lahir"
                                    class="text-lg font-bold bg-transparent border-none p-0 w-full">
                            </div>

                            <div class="border-b border-[#003366]/30 pb-1">
                                <p class="text-sm font-bold opacity-80 uppercase tracking-wide">Jenis Kelamin</p>

                                <select name="jenis_kelamin"
                                    class="text-lg font-bold bg-transparent border-none p-0 w-full focus:outline-none">
                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                    <option value="Laki-laki"
                                        {{ Auth::user()->jenis_kelamin === 'Laki-laki' ? 'selected' : '' }}>
                                        Laki-laki
                                    </option>
                                    <option value="Perempuan"
                                        {{ Auth::user()->jenis_kelamin === 'Perempuan' ? 'selected' : '' }}>
                                        Perempuan
                                    </option>
                                </select>
                            </div>


                            <div class="border-b border-[#003366]/30 pb-1">
                                <p class="text-sm font-bold opacity-80 uppercase tracking-wide">Kota / Kabupaten</p>
                                <input type="text" value="{{ Auth::user()->kota }}" name="kota"
                                    class="text-lg font-bold bg-transparent border-none p-0 w-full"
                                    placeholder="masukkan data disini">
                            </div>

                            <div class="border-b border-[#003366]/30 pb-1">
                                <p class="text-sm font-bold opacity-80 uppercase tracking-wide">NIK</p>
                                <input type="text" value="{{ Auth::user()->nik }}" name="nik"
                                    class="text-lg font-bold bg-transparent border-none p-0 w-full"
                                    placeholder="masukkan data disini">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>

    </div>
</div>

@endsection
