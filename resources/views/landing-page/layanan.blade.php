@extends('landing-page.layouts.app')
@section('content')

<div class="relative min-h-screen flex flex-col overflow-hidden bg-white" 
    x-data="{ 
        slide: 1, 
        timer: null,
        totalSlides: 4,
        startSlider() {
            this.timer = setInterval(() => {
                this.next();
            }, 7000);
        },
        next() {
            this.slide = this.slide < this.totalSlides ? this.slide + 1 : 1;
        },
        prev() {
            this.slide = this.slide > 1 ? this.slide - 1 : this.totalSlides;
        },
        resetSlider() {
            clearInterval(this.timer);
            this.startSlider();
        }
    }" 
    x-init="startSlider()">

    <div class="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat"
        style="background-image: linear-gradient(rgba(182, 179, 179, 0.6), rgba(182, 178, 178, 0.6)), url('{{ asset('assets-landingpage/img/bg-layanan.jpeg') }}');">
    </div>

    <div class="relative flex-grow grid grid-cols-1 grid-rows-1">
        
        <div x-show="slide === 1" 
             x-transition:enter="transition transform duration-700 ease-in-out"
             x-transition:enter-start="translate-x-full"
             x-transition:enter-end="translate-x-0"
             x-transition:leave="transition transform duration-700 ease-in-out"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="-translate-x-full"
             class="col-start-1 row-start-1 z-10 w-full py-12 px-6 overflow-y-auto">
            
            <div class="max-w-6xl mx-auto h-full flex flex-col">
                <div class="flex justify-between items-center mb-10 border-b-2 border-purple-500 pb-4">
                    <h1 class="text-5xl font-bold text-slate-800">
                        <span class="bg-orange-400 px-2 py-1 text-white">Pengaturan</span> Obat Maya
                    </h1>
                </div>

                <div class="grid grid-cols-1 gap-8">
                    <div>
                        <label class="block text-2xl font-bold mb-2">Nama Obat</label>
                        <input type="text" value="Maya" class="w-full bg-gray-200 h-16 rounded-full px-8 text-xl shadow-inner outline-none">
                    </div>
                    <div>
                        <label class="block text-2xl font-bold mb-2">Dosis</label>
                        <input type="text" class="w-full bg-gray-200 h-16 rounded-full px-8 text-xl shadow-inner outline-none">
                    </div>
                    <div>
                        <label class="block text-2xl font-bold mb-4">Pilihan Frekuensi/Interval</label>
                        <div class="flex flex-wrap gap-6 items-center">
                            <div class="relative w-64">
                                <select class="w-full bg-gray-300 h-16 rounded-full px-8 appearance-none text-xl font-bold shadow-lg">
                                    <option>2x Sehari</option>
                                    <option>1x Sehari</option>
                                    <option>3x Sehari</option>
                                </select>
                                <i class="fas fa-chevron-down absolute right-6 top-5 text-2xl pointer-events-none"></i>
                            </div>
                            <label class="flex items-center gap-4 bg-gray-200 px-8 py-4 rounded-full text-xl font-bold shadow-md cursor-pointer hover:bg-white">
                                <input type="checkbox" class="w-8 h-8 rounded border-gray-400"> 1x Sehari
                            </label>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-10">
                        <div class="bg-gray-200 rounded-full h-20 flex items-center px-10 justify-between shadow-xl">
                            <div class="flex items-center gap-4"><i class="far fa-clock text-3xl"></i> <span class="text-2xl font-bold">Pagi</span></div>
                            <span class="text-2xl font-bold">08:00</span>
                        </div>
                        <div class="bg-gray-200 rounded-full h-20 flex items-center px-10 justify-between shadow-xl">
                            <div class="flex items-center gap-4"><i class="far fa-clock text-3xl"></i> <span class="text-2xl font-bold">Siang</span></div>
                            <span class="text-2xl font-bold">14:00</span>
                        </div>
                        <div class="bg-gray-200 rounded-full h-20 flex items-center px-10 justify-between shadow-xl">
                            <div class="flex items-center gap-4"><i class="far fa-clock text-3xl"></i> <span class="text-2xl font-bold">Malam</span></div>
                            <span class="text-2xl font-bold">20:00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div x-show="slide === 2" x-cloak
             x-transition:enter="transition transform duration-700 ease-in-out"
             x-transition:enter-start="translate-x-full"
             x-transition:enter-end="translate-x-0"
             x-transition:leave="transition transform duration-700 ease-in-out"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="-translate-x-full"
             class="col-start-1 row-start-1 z-10 w-full py-12 px-6 md:px-20 overflow-y-auto">
            
            <div class="max-w-7xl mx-auto">
                <div class="flex justify-between items-end mb-10">
                    <div>
                        <h1 class="text-5xl font-extrabold text-black tracking-tight">
                            <span class="bg-[#F97316] px-2 text-white">Jadwal Obat</span> Hari Ini
                        </h1>
                        <p class="text-gray-600 font-semibold mt-2 ml-1">Sabtu, 20 Desember 2025</p>
                    </div>
                    {{-- <button class="bg-[#A7F3D0] hover:bg-green-300 transition-colors p-4 rounded-3xl flex flex-col items-center justify-center shadow-lg">
                        <span class="text-xs font-bold text-black mb-1">SIMPAN</span>
                        <i class="far fa-save text-3xl"></i>
                    </button> --}}
                </div>

                <div class="space-y-6">
                    <div class="bg-white/40 backdrop-blur-md border border-white/20 rounded-[50px] p-6 flex flex-wrap items-center justify-between shadow-sm">
                        <div class="w-full md:w-1/4">
                            <h3 class="text-2xl font-bold text-slate-800">Isoniazid 300mg</h3>
                            <p class="text-gray-400 font-bold">300mg</p>
                        </div>
                        <div class="flex items-center gap-4 w-full md:w-1/4 justify-center">
                            <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center border-2 border-green-500">
                                <i class="fas fa-check-double text-green-500 text-2xl"></i>
                            </div>
                            <span class="text-2xl font-bold text-slate-800">08:00 Pagi</span>
                        </div>
                        <div class="flex items-center gap-4 w-full md:w-1/4 justify-center cursor-pointer hover:opacity-70">
                            <i class="fas fa-camera text-4xl text-slate-800"></i>
                            <span class="text-xl font-bold text-slate-800">Sisipkan Gambar</span>
                        </div>
                        <div class="w-full md:w-1/5 flex justify-end">
                            <button class="bg-[#F97316] hover:bg-orange-600 text-black font-extrabold py-4 px-12 rounded-full shadow-lg uppercase tracking-wider transition-all active:translate-y-1">Minum</button>
                        </div>
                    </div>
                    </div>
            </div>
        </div>

        <div x-show="slide === 3" x-cloak
             x-transition:enter="transition transform duration-700 ease-in-out"
             x-transition:enter-start="translate-x-full"
             x-transition:enter-end="translate-x-0"
             x-transition:leave="transition transform duration-700 ease-in-out"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="-translate-x-full"
             class="col-start-1 row-start-1 z-10 w-full py-12 px-6 md:px-20 overflow-y-auto">
            
            <div class="max-w-7xl mx-auto">
                <div class="flex items-start gap-4 mb-10">
                    <i class="fas fa-bell text-5xl text-black mt-1"></i>
                    <div>
                        <h1 class="text-5xl font-extrabold text-black leading-tight">
                            <span class="bg-[#F97316] px-2 text-white">Waktunya</span> Minum Obat!
                        </h1>
                    </div>
                </div>
                <div class="bg-white/40 backdrop-blur-xl border border-white/30 rounded-[60px] p-10 md:p-16 shadow-2xl text-center md:text-left">
                    <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-12">
                        <img src="https://cdn-icons-png.flaticon.com/512/2693/2693510.png" class="w-64 mx-auto drop-shadow-2xl">
                        <div class="space-y-4">
                            <h3 class="text-4xl md:text-5xl font-bold text-slate-900">Ciprofloxacin 500mg</h3>
                            <div class="pt-10 flex flex-wrap justify-center md:justify-start gap-6">
                                <button class="bg-[#FF4D4D] text-white font-black py-4 px-10 rounded-full shadow-lg uppercase transition-all active:translate-y-1">Tunda</button>
                                <button class="bg-[#F97316] text-white font-black py-4 px-10 rounded-full shadow-lg uppercase transition-all active:translate-y-1">Minum</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div x-show="slide === 4" x-cloak
             x-transition:enter="transition transform duration-700 ease-in-out"
             x-transition:enter-start="translate-x-full"
             x-transition:enter-end="translate-x-0"
             x-transition:leave="transition transform duration-700 ease-in-out"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="-translate-x-full"
             class="col-start-1 row-start-1 z-10 w-full py-12 px-6 md:px-20 overflow-y-auto">
            
            <div class="max-w-7xl mx-auto text-center">
                <h1 class="text-5xl font-extrabold text-black mb-10">
                    <span class="bg-[#F97316] px-2 text-white">Perasaan</span> Setelah Meminum Obat
                </h1>
                <div class="bg-white/30 backdrop-blur-md border border-white/40 rounded-[40px] p-12 shadow-xl">
                    <h2 class="text-6xl font-black text-[#581845] mb-12 italic tracking-tight">Bagaimana Perasaanmu?</h2>
                    <div class="grid grid-cols-5 gap-4 md:gap-8 mb-12" x-data="{ selected: null }">
                         <button @click="selected = 1" :class="selected === 1 ? 'bg-purple-200' : 'bg-white/60'" class="aspect-square rounded-3xl text-5xl hover:scale-105 transition shadow-sm border-2">😊</button>
                         <button @click="selected = 2" :class="selected === 2 ? 'bg-purple-200' : 'bg-white/60'" class="aspect-square rounded-3xl text-5xl hover:scale-105 transition shadow-sm border-2">😐</button>
                         <button @click="selected = 3" :class="selected === 3 ? 'bg-purple-200' : 'bg-white/60'" class="aspect-square rounded-3xl text-5xl hover:scale-105 transition shadow-sm border-2">😔</button>
                         <button @click="selected = 4" :class="selected === 4 ? 'bg-purple-200' : 'bg-white/60'" class="aspect-square rounded-3xl text-5xl hover:scale-105 transition shadow-sm border-2">😫</button>
                         <button @click="selected = 5" :class="selected === 5 ? 'bg-purple-200' : 'bg-white/60'" class="aspect-square rounded-3xl text-5xl hover:scale-105 transition shadow-sm border-2">😴</button>
                    </div>
                    <button class="w-full bg-[#60A5FA] text-[#581845] text-4xl font-black py-6 rounded-3xl shadow-lg uppercase tracking-widest">SUBMIT</button>
                </div>
            </div>
        </div>
    </div>

    <div class="fixed bottom-10 right-10 flex gap-4 z-50">
        <button @click="prev(); resetSlider()"
            class="bg-slate-800/80 backdrop-blur-sm text-white w-16 h-16 rounded-full hover:bg-orange-500 transition-all shadow-2xl flex items-center justify-center">
            <i class="fas fa-chevron-left text-2xl"></i>
        </button>
        <button @click="next(); resetSlider()"
            class="bg-slate-800/80 backdrop-blur-sm text-white w-16 h-16 rounded-full hover:bg-orange-500 transition-all shadow-2xl flex items-center justify-center">
            <i class="fas fa-chevron-right text-2xl"></i>
        </button>
    </div>
</div>

<style>
    [x-cloak] { display: none !important; }
    /* Pastikan tidak ada scrollbar horizontal saat animasi geser */
    body { overflow-x: hidden; }
</style>

@endsection