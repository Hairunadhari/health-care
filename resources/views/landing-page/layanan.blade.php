@extends('landing-page.layouts.app')
@section('content')

<div class="relative min-h-screen flex flex-col overflow-hidden bg-white" x-data="{ 
        slide: 1, 
        timer: null,
        totalSlides: 4,
        startSlider() {
            this.timer = setInterval(() => {
                this.next();
            }, 700000);
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
    }" x-init="startSlider()">

    <div class="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat"
        style="background-image: linear-gradient(rgba(182, 179, 179, 0.6), rgba(182, 178, 178, 0.6)), url('{{ asset('assets-landingpage/img/bg-layanan.jpeg') }}');">
    </div>

    <div class="relative flex-grow grid grid-cols-1 grid-rows-1">

        <div x-show="slide === 1" x-transition:enter="transition transform duration-700 ease-in-out"
            x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
            x-transition:leave="transition transform duration-700 ease-in-out" x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full"
            class="col-start-1 row-start-1 z-10 w-full py-12 px-6 overflow-y-auto">

            <form action="/frekuensi" method="post" enctype="multipart/form-data">
                @csrf
                <div class="max-w-6xl mx-auto h-full flex flex-col">
                    <div class="flex justify-between items-center mb-5 border-b-2 border-purple-500 pb-4">
                        <h1 class="text-4xl font-bold text-slate-800">
                            <span class="bg-orange-400 px-2 py-1 text-white">Pengaturan</span> Obat Maya
                        </h1>
                        <button type="submit"
                            class="inline-flex items-center gap-3 bg-[#b9e4bc] hover:bg-[#a2d4a6] text-black font-bold py-3 px-8 rounded-full transition-colors">
                            <span class=" tracking-wide">SIMPAN</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M18 2H6a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3V6a3 3 0 0 0-1-2.25L18 2Zm-2 2v4H8V4h8Zm2 15a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7h12v7Z" />
                            </svg>
                        </button>
                    </div>

                    <div class="grid grid-cols-1 gap-8">
                        <div>
                            <label class="block text-2xl font-bold mb-1">Nama Obat</label>
                            <input required type="text" name="nama" placeholder="Nama Obat..."
                                class="w-full bg-gray-200 h-16 rounded-full px-8 text-xl shadow-inner outline-none">
                        </div>
                        <div>
                            <label class="block text-2xl font-bold mb-1">Dosis</label>
                            <input required type="text" name="dosis" placeholder="Dosis..."
                                class="w-full bg-gray-200 h-16 rounded-full px-8 text-xl shadow-inner outline-none">
                        </div>
                        <div>
                            <label class="block text-2xl font-bold mb-2">Pilihan Frekuensi/Interval</label>
                            <div class="flex flex-wrap gap-6 items-center">
                                <!-- SELECT -->
                                <div class="relative w-64">
                                    <select id="frekuensiSelect" name="frekuensi"
                                        class="w-full bg-gray-300 h-16 rounded-full px-8 appearance-none text-xl font-bold shadow-lg">
                                        <option value="">Pilih Frekuensi</option>
                                        <option value="2x">2x Sehari</option>
                                        <option value="3x">3x Sehari</option>
                                    </select>
                                    <i
                                        class="fas fa-chevron-down absolute right-6 top-5 text-2xl pointer-events-none"></i>
                                </div>

                                <!-- RADIO -->
                                <label
                                    class="flex items-center gap-4 bg-gray-200 px-8 py-4 rounded-full text-xl font-bold shadow-md cursor-pointer hover:bg-white">
                                    <input type="radio" name="frekuensi" value="1x"
                                        class="frekuensi-radio w-8 h-8 accent-blue-600">
                                    1x Sehari
                                </label>

                                <label
                                    class="flex items-center gap-4 bg-gray-200 px-8 py-4 rounded-full text-xl font-bold shadow-md cursor-pointer hover:bg-white">
                                    <input type="radio" name="frekuensi" value="8jam"
                                        class="frekuensi-radio w-8 h-8 accent-blue-600">
                                    Setiap 8 Jam Sekali
                                </label>

                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-5">
                            <div
                                class="bg-gray-200 rounded-full h-20 flex items-center px-10 justify-between shadow-xl">
                                <div class="flex items-center gap-4"><i class="far fa-clock text-3xl"></i> <span
                                        class="text-2xl font-bold">Pagi</span></div>
                                <span class="text-2xl font-bold">08:00</span>
                            </div>
                            <div
                                class="bg-gray-200 rounded-full h-20 flex items-center px-10 justify-between shadow-xl">
                                <div class="flex items-center gap-4"><i class="far fa-clock text-3xl"></i> <span
                                        class="text-2xl font-bold">Siang</span></div>
                                <span class="text-2xl font-bold">14:00</span>
                            </div>
                            <div
                                class="bg-gray-200 rounded-full h-20 flex items-center px-10 justify-between shadow-xl">
                                <div class="flex items-center gap-4"><i class="far fa-clock text-3xl"></i> <span
                                        class="text-2xl font-bold">Malam</span></div>
                                <span class="text-2xl font-bold">20:00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>

        <div x-show="slide === 2" x-cloak x-transition:enter="transition transform duration-700 ease-in-out"
            x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
            x-transition:leave="transition transform duration-700 ease-in-out" x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full"
            class="col-start-1 row-start-1 z-10 w-full py-12 px-6 md:px-20 overflow-y-auto">

            <div class="max-w-7xl mx-auto">
                <div class="flex justify-between items-end mb-10">
                    <div>
                        <h1 class="text-5xl font-extrabold text-black tracking-tight">
                            <span class="bg-[#F97316] px-2 text-white">Jadwal Obat</span> Hari Ini
                        </h1>
                        <p class="text-gray-600 font-semibold mt-2 ml-1">
                            {{ \Carbon\Carbon::now()->locale('id')->translatedFormat('l, d F Y') }}</p>
                    </div>
                    {{-- <button
                        class="inline-flex items-center gap-3 bg-[#b9e4bc] hover:bg-[#a2d4a6] text-black font-bold py-3 px-8 rounded-full transition-colors">
                        <span class="text-xl tracking-wide">SIMPAN</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M18 2H6a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3V6a3 3 0 0 0-1-2.25L18 2Zm-2 2v4H8V4h8Zm2 15a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7h12v7Z" />
                        </svg>
                    </button> --}}
                </div>

                <div class="space-y-6">
                    @php
                    $jamMinum = [
                    '08:00:00' => 'Pagi',
                    '14:00:00' => 'Siang',
                    '20:00:00' => 'Malam',
                    ];
                    @endphp

                    @foreach ($data as $item)
                    @foreach ($jamMinum as $jam => $label)

                    @php
                    $sudahMinum = $item->logs->where('jam', $jam)->count() > 0;
                    @endphp

                    <div
                        class="bg-white/40 backdrop-blur-md border border-white/20 rounded-[50px] p-6 flex flex-wrap items-center justify-between shadow-sm">

                        <!-- NAMA OBAT -->
                        <div class="w-full md:w-1/4">
                            <h3 class="text-2xl font-bold text-slate-800">{{ $item->nama }}</h3>
                            <p class="text-gray-400 font-bold">{{ $item->dosis }}</p>
                        </div>

                        <!-- STATUS -->
                        <div class="flex items-center gap-4 w-full md:w-1/4 justify-center">
                            <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center border-2
                    {{ $sudahMinum ? 'border-green-500' : 'border-gray-300' }}">
                                @if ($sudahMinum)
                                <i class="fas fa-check-double text-green-500 text-2xl"></i>
                                @endif
                            </div>
                            <span class="text-2xl font-bold text-slate-800">
                                {{ $jam }} {{ $label }}
                            </span>
                        </div>

                        <!-- FOTO -->
                        <div class="flex items-center gap-4 w-full md:w-1/4 justify-center">
                            <i class="fas fa-camera text-4xl text-slate-800"></i>
                            <span class="text-xl font-bold">Sisipkan Gambar</span>
                        </div>

                        <!-- BUTTON -->
                        <div class="w-full md:w-1/5 flex justify-end">
                            @if (!$sudahMinum)
                            <form action="/minum-obat" method="POST">
                                @csrf
                                <input type="hidden" name="jadwal_obat_id" value="{{ $item->id }}">
                                <input type="hidden" name="jam" value="{{ $jam }}">
                                <button
                                    class="bg-[#F97316] hover:bg-orange-600 text-black font-extrabold py-4 px-12 rounded-full">
                                    Minum
                                </button>
                            </form>
                            @endif
                        </div>
                    </div>

                    @endforeach
                    @endforeach


                </div>
            </div>
        </div>

        <div x-show="slide === 3" x-cloak x-transition:enter="transition transform duration-700 ease-in-out"
            x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
            x-transition:leave="transition transform duration-700 ease-in-out" x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full"
            class="col-start-1 row-start-1 z-10 w-full py-12 px-6 md:px-20 overflow-y-auto">

            <div class="flex justify-between items-start mb-4">
                <div>
                    <div class="flex items-center gap-2">
                        <span class="text-3xl">🔔</span>
                        <h1 class="text-3xl font-bold">
                            <span class="bg-orange-400 px-1 rounded">Waktunya</span> Minum Obat!
                        </h1>
                    </div>
                    <p class="text-gray-500 text-sm mt-1 ml-10"> {{ \Carbon\Carbon::now()->locale('id')->translatedFormat('l, d F Y') }}</p></p>
                </div>

                <button
                    class="bg-green-100 border border-green-200 px-4 py-2 rounded-full flex items-center gap-2 shadow-sm hover:bg-green-200 transition">
                    <span class="text-xs font-bold">SIMPAN</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
                    </svg>
                </button>
            </div>

            <div
                class="bg-white rounded-[40px] p-12 relative overflow-hidden flex items-center justify-between min-h-[400px]">

                <div class="w-1/3 flex justify-center">
                    <div class="relative">
                        <div class="text-[150px]"><img
                                src="{{ asset('assets-landingpage/img/clock.jpeg') }}" class="w-full h-65 object-cover">
                        </div>
                    </div>
                </div>

                <div class="w-2/3 text-center flex flex-col items-center">
                    <h2 class="text-7xl font-black tracking-tighter mb-2 italic">
                        <span class="text-gray-800 opacity-20">Minum</span>
                        <span class="text-black">Obat</span>
                    </h2>


                    <div class=" mt-10">
                        <h3 class="text-4xl font-bold text-black mb-1">Ciprofloxacin 500mg</h3>
                        <p class="text-4xl font-bold text-gray-300">500mg</p>
                    </div>

                    <div class="flex gap-4 mt-20">
                        <button
                            class="bg-gray-300 hover:bg-gray-400 text-black px-6 py-3 rounded-full flex items-center gap-2 font-semibold transition">
                            <span class="text-xl">🎥</span> Sisipkan Video
                        </button>
                        <button
                            class="bg-red-500 hover:bg-red-600 text-white px-10 py-3 rounded-full font-bold shadow-lg transition">
                            TUNDA
                        </button>
                        <button
                            class="bg-orange-500 hover:bg-orange-600 text-white px-10 py-3 rounded-full font-bold shadow-lg transition">
                            MINUM
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div x-show="slide === 4" x-cloak x-transition:enter="transition transform duration-700 ease-in-out"
            x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
            x-transition:leave="transition transform duration-700 ease-in-out" x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full"
            class="col-start-1 row-start-1 z-10 w-full py-12 px-6 md:px-20 overflow-y-auto">

            <div class="max-w-7xl mx-auto text-center">
                <div class="mb-8">
                    <h1 class="text-5xl font-extrabold text-black">
                        <span class="bg-[#F97316] px-2 text-white">Perasaan</span> Setelah Meminum Obat

                    </h1>
                    <p class="text-gray-600 font-semibold mt-2 ml-1">
                        {{ \Carbon\Carbon::now()->locale('id')->translatedFormat('l, d F Y') }}</p>
                </div>
                <div class="bg-white/30 backdrop-blur-md border border-white/40 rounded-[40px] p-12 shadow-xl">
                    <form action="/submit-perasaan" method="POST">
                        @csrf
                        <h2 class="text-6xl font-black text-[#581845] mb-12 italic tracking-tight">Bagaimana Perasaanmu?
                        </h2>
                        <div class="grid grid-cols-5 gap-4 md:gap-8 mb-12" x-data="{ selected: null }">
                            <div @click="selected = 1" :class="selected === 1 ? 'bg-purple-200' : 'bg-white/60'" class="aspect-square rounded-3xl text-5xl hover:scale-105 transition shadow-sm border-2
           flex items-center justify-center">
                                😊
                            </div>

                            <div @click="selected = 2" :class="selected === 2 ? 'bg-purple-200' : 'bg-white/60'" class="aspect-square rounded-3xl text-5xl hover:scale-105 transition shadow-sm border-2
           flex items-center justify-center">
                                😐
                            </div>

                            <div @click="selected = 3" :class="selected === 3 ? 'bg-purple-200' : 'bg-white/60'" class="aspect-square rounded-3xl text-5xl hover:scale-105 transition shadow-sm border-2
           flex items-center justify-center">
                                😔
                            </div>

                            <div @click="selected = 4" :class="selected === 4 ? 'bg-purple-200' : 'bg-white/60'" class="aspect-square rounded-3xl text-5xl hover:scale-105 transition shadow-sm border-2
           flex items-center justify-center">
                                😫
                            </div>

                            <div @click="selected = 5" :class="selected === 5 ? 'bg-purple-200' : 'bg-white/60'" class="aspect-square rounded-3xl text-5xl hover:scale-105 transition shadow-sm border-2
           flex items-center justify-center">
                                😴
                            </div>

                        </div>
                        <button type="submit"
                            class="w-full bg-[#60A5FA] text-[#581845] text-4xl font-black py-6 rounded-3xl shadow-lg uppercase tracking-widest">SUBMIT</button>
                    </form>

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
    [x-cloak] {
        display: none !important;
    }

    /* Pastikan tidak ada scrollbar horizontal saat animasi geser */
    body {
        overflow-x: hidden;
    }

</style>
<script>
    const selectFrekuensi = document.getElementById('frekuensiSelect');
    const radios = document.querySelectorAll('.frekuensi-radio');

    // Jika SELECT dipilih → RADIO di-uncheck
    selectFrekuensi.addEventListener('change', function () {
        if (this.value !== '') {
            radios.forEach(radio => radio.checked = false);
        }
    });

    // Jika RADIO dipilih → SELECT dikosongkan
    radios.forEach(radio => {
        radio.addEventListener('change', function () {
            if (this.checked) {
                selectFrekuensi.value = '';
            }
        });
    });

</script>

@endsection
