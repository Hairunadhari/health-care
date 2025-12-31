@extends('landing-page.layouts.app')

@section('content')
<div class="relative w-full min-h-screen bg-cover bg-center bg-no-repeat" 
     style="background-image: url('{{ asset('assets-landingpage/img/bg-kontak.jpeg') }}');">
    
    <div class="absolute inset-0 bg-white/80"></div>

    <div class="relative max-w-7xl mx-auto py-16 px-6 md:px-20 h-full">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-12">
            
            <div class="space-y-12">
                <h1 class="text-7xl font-extrabold text-black tracking-tight">
                    <span class="bg-[#F97316] px-4 py-1">Kontak</span>
                </h1>

                <div class="space-y-8 ml-4">
                    <div class="flex items-center gap-6 group cursor-pointer">
                        <div class="w-16 h-16 bg-black rounded-full flex items-center justify-center text-white text-3xl transition group-hover:bg-[#F97316]">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <span class="text-2xl font-bold text-slate-800">62xxxxxx</span>
                    </div>

                    <div class="flex items-center gap-6 group cursor-pointer">
                        <div class="w-16 h-16 bg-black rounded-full flex items-center justify-center text-white text-4xl transition group-hover:bg-[#25D366]">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <span class="text-2xl font-bold text-slate-800">08xxxxxx</span>
                    </div>

                    <div class="flex items-center gap-6 group cursor-pointer">
                        <div class="w-16 h-16 bg-black rounded-full flex items-center justify-center text-white text-4xl transition group-hover:bg-gradient-to-tr from-yellow-400 via-red-500 to-purple-500">
                            <i class="fab fa-instagram"></i>
                        </div>
                        <span class="text-2xl font-bold text-slate-800">health_xx</span>
                    </div>

                    <div class="flex items-center gap-6 group cursor-pointer">
                        <div class="w-16 h-16 bg-black rounded-full flex items-center justify-center text-white text-3xl transition group-hover:bg-blue-400">
                            <i class="fab fa-twitter"></i>
                        </div>
                        <span class="text-2xl font-bold text-slate-800">health_xx</span>
                    </div>
                </div>
            </div>

            <div class="relative flex justify-center items-center">
                <div class="absolute w-[500px] h-[500px] bg-orange-100 rounded-full -z-10 opacity-50"></div>
                <img src="{{ asset('assets-landingpage/img/kontak.jpeg') }}"
                     alt="Reminder Illustration" 
                     class=" max-w-[750px] ">
            </div>

        </div>
    </div>
</div>
@endsection