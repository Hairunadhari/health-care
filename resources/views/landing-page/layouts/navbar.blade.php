<nav x-data="{ sidebarOpen: false }" class="bg-custom-blue flex justify-between items-center px-8 py-6 text-white shadow-md z-50 sticky top-0">
    
    <div class="flex items-center gap-3">
        <i @click="sidebarOpen = true" class="fas fa-bars text-3xl cursor-pointer hover:text-orange-400 transition"></i>
        <span class="text-xl font-bold tracking-tighter">TB - MedSchedule</span>
    </div>

    <div class="hidden md:flex gap-10 text-sm font-semibold">
        <a href="/" class="{{ request()->is('/') ? 'border-t-4 border-[#F58200]' : 'hover:text-gray-300 transition' }} pt-1">Beranda</a>
        <a href="/tentang" class="{{ request()->is('tentang') ? 'border-t-4 border-[#F58200]' : 'hover:text-gray-300 transition' }} pt-1">Tentang</a>
        <a href="/layanan" class="{{ request()->is('layanan') ? 'border-t-4 border-[#F58200]' : 'hover:text-gray-300 transition' }} pt-1">Layanan</a>
        <a href="/kontak" class="{{ request()->is('kontak') ? 'border-t-4 border-[#F58200]' : 'hover:text-gray-300 transition' }} pt-1">Kontak</a>

        @if (!Auth::check())
            <a href="/login" class="{{ request()->is('login') ? 'border-t-4 border-[#F58200]' : 'hover:text-gray-300 transition' }} pt-1">Login / Register</a>
        @else
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open" class="flex items-center gap-2 pt-1">
                    <span>Halo, {{ strtoupper(auth()->user()->name) }}</span>
                    <i class="fas fa-chevron-down text-xs"></i>
                </button>
                <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-40 bg-white text-gray-800 rounded shadow-md border py-1 z-50">
                    <a href="/profil" class="block px-4 py-2 hover:bg-gray-100">Profil</a>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="w-full text-left px-4 py-2 text-red-600 hover:bg-gray-100">Logout</button>
                    </form>
                </div>
            </div>
        @endif
    </div>

    <div x-show="sidebarOpen" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="sidebarOpen = false"
         class="fixed inset-0 bg-black/50 z-[60]">
    </div>

    <div x-show="sidebarOpen"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="-translate-x-full"
         x-transition:enter-end="translate-x-0"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="translate-x-0"
         x-transition:leave-end="-translate-x-full"
         class="fixed top-0 left-0 h-full w-64 bg-custom-blue shadow-2xl z-[70] p-6">
        
        <div class="flex justify-between items-center mb-10">
            <span class="text-2xl font-bold tracking-tighter text-white">TB-MedSchedule</span>
            <i @click="sidebarOpen = false" class="fas fa-times text-2xl cursor-pointer hover:text-orange-400"></i>
        </div>

        <div class="flex flex-col gap-6 font-semibold">
            <a href="/" class="hover:text-orange-400 transition flex items-center gap-3"><i class="fas fa-home w-5"></i> Beranda</a>
            <a href="/tentang" class="hover:text-orange-400 transition flex items-center gap-3"><i class="fas fa-info-circle w-5"></i> Tentang</a>
            <a href="/layanan" class="hover:text-orange-400 transition flex items-center gap-3"><i class="fas fa-concierge-bell w-5"></i> Layanan</a>
            <a href="/kontak" class="hover:text-orange-400 transition flex items-center gap-3"><i class="fas fa-envelope w-5"></i> Kontak</a>
            
            <hr class="border-gray-500">

            @if (!Auth::check())
                <a href="/login" class="hover:text-orange-400 transition flex items-center gap-3"><i class="fas fa-sign-in-alt w-5"></i> Login / Register</a>
            @else
                <div class="text-xs text-gray-400 uppercase tracking-widest mb-[-10px]">User</div>
                <a href="/profil" class="hover:text-orange-400 transition flex items-center gap-3"><i class="fas fa-user w-5"></i> Profil</a>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="text-red-400 hover:text-red-600 transition flex items-center gap-3">
                        <i class="fas fa-sign-out-alt w-5"></i> Logout
                    </button>
                </form>
            @endif
        </div>
    </div>
</nav>