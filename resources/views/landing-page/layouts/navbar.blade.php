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