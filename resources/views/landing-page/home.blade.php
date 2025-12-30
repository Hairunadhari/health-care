@extends('landing-page.layouts.app')
@section('content')

<main class="flex-grow flex flex-col justify-center px-8 md:px-20 lg:px-32">
    <div class="max-w-4xl">
        <h1 class="text-6xl md:text-8xl font-extrabold tracking-tight flex items-center gap-2">
            <span class="border-l-[12px] border-[#F58200] pl-4">E-HEALTH CARE</span>
        </h1>

        <p class="text-[#F58200] text-xl md:text-2xl font-bold mt-2 tracking-wide">
            A Digital Reminder System for OAT Consumption
        </p>

        <p class="mt-6 text-lg md:text-xl font-medium max-w-2xl leading-relaxed">
            Solusi modern untuk meningkatkan kepatuhan minum Obat <br class="hidden md:block">
            Anti Tuberkulosis (OAT).
        </p>

        <div class="mt-8">
            <a href="/tentang"
   class="group inline-flex items-center border-2 border-white px-6 py-2 gap-3
          hover:bg-white hover:text-blue-900 transition-all duration-300
          font-bold text-xl uppercase">
    <i class="far fa-arrow-alt-circle-right text-2xl"></i>
    NEXT
</a>

        </div>
    </div>
</main>

<footer class="p-8 md:px-20 lg:px-32 text-center ">
    <p class="text-sm md:text-base font-light w-full leading-snug">
        Website kesehatan bekerja sebagai platform digital yang mudah diakses melalui browser, tanpa perlu instalasi
        aplikasi. Semua fitur pengingat, edukasi, dan pemantauan dapat digunakan kapan saja secara online.
    </p>
</footer>



@endsection
