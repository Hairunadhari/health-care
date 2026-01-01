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

    <a href="/layanan" 
       class="{{ request()->is('layanan') ? 'border-t-4 border-[#F58200]' : 'hover:text-gray-300 transition' }} pt-1">
       Layanan
    </a>

    <a href="/kontak" 
       class="{{ request()->is('kontak') ? 'border-t-4 border-[#F58200]' : 'hover:text-gray-300 transition' }} pt-1">
       Kontak
    </a>

    @if (!Auth::check())
    <a href="/login"
       class="{{ request()->is('login') ? 'border-t-4 border-[#F58200]' : 'hover:text-gray-300 transition' }} pt-1">
        Login / Register
    </a>
    @else
     <div x-data="{ open: false }" class="relative">
    <button @click="open = !open" class="flex items-center gap-2 pt-1">
        <span>Halo, {{ strtoupper(auth()->user()->name) }}</span>
        <i class="fas fa-chevron-down text-xs"></i>
    </button>

    <div x-show="open" @click.away="open = false" 
         class="absolute right-0 mt-2 w-40 bg-white text-gray-800 rounded shadow-md border py-1 z-50">
        
        <a href="/profil" class="block px-4 py-2 hover:bg-gray-100">Profil</a>
        
        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="w-full text-left px-4 py-2 text-red-600 hover:bg-gray-100">
                Logout
            </button>
        </form>
    </div>
</div>
@endif

</div>
    </nav>