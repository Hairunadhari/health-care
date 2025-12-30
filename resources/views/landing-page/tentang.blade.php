<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-HEALTH CARE - SIKSIK</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            overflow-x: hidden;
        }

        .bg-custom-blue {
            background-color: #6089d3;
        }

        /* Memastikan container slider memiliki tinggi yang cukup */
        .slider-container {
            min-height: calc(100vh - 80px);
            position: relative;
        }

    </style>
</head>

<body class="bg-white min-h-screen flex flex-col" x-data="{ 
        slide: 1, 
        timer: null,
        startSlider() {
            this.timer = setInterval(() => {
                this.slide = this.slide < 4 ? this.slide + 1 : 1;
            }, 3000);
        },
        resetSlider() {
            clearInterval(this.timer);
            this.startSlider();
        }
      }" x-init="startSlider()">

   
        <nav class="bg-custom-blue flex justify-between items-center px-8 py-6 text-white shadow-md z-50 sticky top-0">
        <div class="flex items-center gap-3">
            <i class="fas fa-bars text-3xl cursor-pointer"></i>
            <span class="text-xl font-bold tracking-tighter">SIK<span class="text-[#F58200]">SIK</span></span>
        </div>
        <div class="hidden md:flex gap-10 text-sm font-semibold">
    <a href="/" 
       class="{{ request()->is('/') ? 'border-t-4 border-[#F58200]' : 'hover:text-gray-300 transition' }} pt-1">
       Beranda
    </a>

    <a href="/tentang" 
       class="{{ request()->is('tentang') ? 'border-t-4 border-[#F58200]' : 'hover:text-gray-300 transition' }} pt-1">
       Tentang
    </a>

    <a href="/service" 
       class="{{ request()->is('service') ? 'border-t-4 border-[#F58200]' : 'hover:text-gray-300 transition' }} pt-1">
       Service
    </a>

    <a href="/contact" 
       class="{{ request()->is('contact') ? 'border-t-4 border-[#F58200]' : 'hover:text-gray-300 transition' }} pt-1">
       Contact
    </a>

    <a href="/login" 
       class="{{ request()->is('login') ? 'border-t-4 border-[#F58200]' : 'hover:text-gray-300 transition' }} pt-1">
       Login
    </a>
    <a href="/register" 
       class="{{ request()->is('login') ? 'border-t-4 border-[#F58200]' : 'hover:text-gray-300 transition' }} pt-1">
       register
    </a>
</div>
    </nav>

    <div class="slider-container flex-grow">

        <div x-show="slide === 1" x-transition.opacity.duration.1000ms class="absolute inset-0 w-full bg-white">
            <main class="container mx-auto mt-12 px-4 md:px-16 grid grid-cols-1 md:grid-cols-2 gap-12 items-start">
                <div class="relative">
                    <div class="w-full h-[550px] overflow-hidden rounded-sm shadow-xl">
                        <img src="{{ asset('assets-landingpage/img/trans.jpeg') }}" 
                            alt="Doctor" class="w-full h-full object-cover">
                    </div>
                    <div
                        class="absolute bottom-10 -left-4 md:-left-8 bg-custom-blue p-6 text-white max-w-xs shadow-2xl">
                        <p class="italic text-center text-lg leading-tight font-medium">"Permasalahan kepatuhan pasien
                            membutuhkan pendekatan yang lebih modern."</p>
                    </div>
                </div>
                <div class="pt-8">
                    <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 leading-tight mb-8">
                        <span class="relative">
                            <span class="absolute -top-1 left-0 w-24 h-3 bg-orange-400 -z-10"></span>Transformasi
                        </span> digital untuk mendukung pengobatan TB Paru.
                    </h1>
                    <ol class="space-y-6 text-lg text-gray-800">
                        <li class="flex gap-4"><span class="font-bold">1.</span>
                            <p>E-Health Care adalah platform digital yang membantu pasien TB Paru tetap patuh minum obat.</p>
                        </li>
                        <li class="flex gap-4"><span class="font-bold">2.</span>
                            <p>Menggunakan sistem pengingat otomatis & edukasi kesehatan.</p>
                        </li>
                        <li class="flex gap-4"><span class="font-bold">3.</span>
                            <p>Mendukung tenaga kesehatan melalui dashboard pemantauan real-time.</p>
                        </li>
                    </ol>
                </div>
            </main>
        </div>

        <div x-show="slide === 2" x-transition.opacity.duration.1000ms class="absolute inset-0 w-full bg-white"
            style="display: none;">
            <section class="grid grid-cols-1 md:grid-cols-2 min-h-full">
                <div class="p-8 md:p-20 flex flex-col justify-between">
                    <div>
                        <h1 class="text-5xl font-extrabold text-slate-900 mb-10"><span
                                class="bg-orange-400 px-2 py-1">Problems</span> We Found</h1>
                        <p class="mb-3">Solusi Digital untuk Meningkatkan Kepatuhan Pasien Tuberkulosis Paru</p>
                        <div class="space-y-8">
                            <div>
                                <h3 class="font-bold text-xl">1. Low Medication Adherence</h3>
                                <p class="text-gray-700 ml-6">Pasien sering lupa minum OAT.</p>
                            </div>
                            <div>
                                <h3 class="font-bold text-xl">2. Long Treatment Duration</h3>
                                <p class="text-gray-700 ml-6">Terapi TB membutuhkan minimal 6 bulan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 overflow-hidden">
                        <img  src="{{ asset('assets-landingpage/img/tentang-kanan.jpeg') }}" 
                            class="w-full h-65 object-cover">
                    </div>
                </div>
                <div class="flex flex-col">
                    <img  src="{{ asset('assets-landingpage/img/tentang-kiri.jpeg') }}" 
                        class="h-1/2 w-full object-cover">
                    <div class="bg-custom-blue h-1/2 p-6 md:p-10 text-white flex flex-col justify-center space-y-3">
                        <h3 class="font-bold text-2xl">3. Limited Monitoring</h3>
                        <p> PMO tidak bisa memantau pasien setiap hari.</p>
                        <h3 class="font-bold text-2xl">4. Risk of MDR-TB</h3>
                        <p>Ketidakpatuhan meningkatkan risiko resistensi obat.</p>
                    </div>
                </div>
            </section>
        </div>

        <div x-show="slide === 3" x-transition.opacity.duration.1000ms class="absolute inset-0 w-full bg-white"
            style="display: none;">
            <section class="container mx-auto py-12 px-6 md:px-16 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="flex justify-center">
                    <img src="{{ asset('assets-landingpage/img/ourdig.jpeg') }}" 
                        class="h-full object-contain">
                </div>
                <div class="flex flex-col space-y-8">
                    <h1 class="text-5xl font-extrabold text-black">Our Digital <span
                            class="relative inline-block">Solution<span
                                class="absolute top-1/2 left-0 w-full h-4 bg-orange-400 -z-10 opacity-90"></span></span>
                    </h1>
                    <div class="flex gap-4 items-start">
                        <div class="shrink-0 w-16 h-16 border-2 border-purple-500 flex items-center justify-center"><i
                                class="fas fa-pills text-blue-500 text-3xl"></i></div>
                        <p class="text-lg text-gray-800 font-medium">Website digital pengingat minum OAT dengan fitur
                            notifikasi, edukasi, pencatatan kepatuhan harian, dan dashboard tenaga kesehatan.</p>
                    </div>
                    <div class="space-y-4">
                        <h3 class="font-bold text-xl">Meningkatkan kepatuhan terapi</h3>
                        <p>Aplikasi membantu pasien untuk tidak lupa minum obat melalui pengingat otomatis, pencatatan
                            harian, dan tampilan jadwal yang jelas sehingga pasien lebih konsisten menjalani pengobatan.
                        </p>
                        <h3 class="font-bold text-xl">Mempermudah pemantauan</h3>
                        <p>Tenaga kesehatan dapat melihat status kepatuhan pasien secara cepat dan akurat, sehingga
                            intervensi dapat dilakukan lebih awal ketika ada ketidaksesuaian jadwal minum obat.</p>
                        <h3 class="font-bold text-xl">Mendukung eliminasi TB 2030</h3>
                        <p>Dengan meningkatkan kepatuhan dan memperkuat pemantauan, aplikasi ini membantu mengurangi
                            angka putus obat dan risiko resistensi, sehingga turut berkontribusi pada program nasional
                            eliminasi Tuberkulosis tahun 2030.</p>
                    </div>
                </div>
            </section>
        </div>

        <div x-show="slide === 4" x-transition.opacity.duration.1000ms class="absolute inset-0 w-full bg-white"
            style="display: none;">
            <section class="grid grid-cols-1 md:grid-cols-3 gap-8 min-h-full">

                <div class="p-8 md:p-12 space-y-8">
                    <h1 class="text-5xl font-extrabold text-slate-900 flex items-start">
                        <span class="w-2 h-16 bg-[#0a1d37] mr-4 inline-block"></span>
                        <span>Main <span class="relative">Features<span
                                    class="absolute bottom-2 left-0 w-full h-3 bg-orange-400 -z-10"></span></span></span>
                        <p></p>
                    </h1>
                    <p>Fitur utama yang dirancang untuk mendukung pasien TB Paru dalam menjalani terapi OAT secara lebih
                        mudah dan teratur:
                    </p>
                    <div class="space-y-4">
                        <p class="font-semibold">1. Automatic Reminder</p>
                        <p>Notifikasi otomatis membantu pasien mengingat jadwal minum obat setiap hari.</p>

                        <p class="font-semibold">2. Educational Content</p>
                        <p>Edukasi singkat mengenai OAT, cara penggunaan, dan efek samping yang mungkin muncul.</p>

                        <p class="font-semibold">3. Adherence Log</p>
                        <p>Pencatatan sederhana untuk memonitor dosis yang sudah diminum.</p>
                    </div>

                </div>
                <div class="h-[90vh] max-h-screen overflow-hidden">
    <img 
      src="{{ asset('assets-landingpage/img/mainfea.jpeg') }}"
      class="w-full h-full object-cover"
    >
</div>

                <div class="flex flex-col">
                    <div
                        class="bg-custom-blue p-12 text-white italic text-center flex items-center justify-center min-h-[300px] text-2xl font-bold">
                        “Teknologi diciptakan manusia untuk mempermudah proses penyembuhan.”
                    </div>
                    <div class="p-8 space-y-2 bg-white">
                        <p class="font-bold">4. Healthcare Dashboard</p>
                        <p>Memudahkan tenaga kesehatan memantau kepatuhan pasien secara real-time.</p>
                        <p class="font-bold">5. Secure Data</p>
                        <p>Sistem keamanan yang melindungi data pasien dengan enkripsi dan autentikasi.
                        </p>
                        <p class="font-bold">6. Easy Interface</p>
                        <p>Tampilan yang sederhana dan mudah digunakan oleh semua kelompok usia.</p>
                    </div>
                </div>
            </section>
        </div>

    </div>

    <div class="fixed bottom-10 right-10 flex gap-4 z-50">
        <button @click="slide = slide > 1 ? slide - 1 : 4; resetSlider()"
            class="bg-slate-800 text-white w-14 h-14 rounded-full hover:bg-orange-400 transition-all shadow-2xl flex items-center justify-center">
            <i class="fas fa-chevron-left text-xl"></i>
        </button>
        <button @click="slide = slide < 4 ? slide + 1 : 1; resetSlider()"
            class="bg-slate-800 text-white w-14 h-14 rounded-full hover:bg-orange-400 transition-all shadow-2xl flex items-center justify-center">
            <i class="fas fa-chevron-right text-xl"></i>
        </button>
    </div>

</body>

</html>
