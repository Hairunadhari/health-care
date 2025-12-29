 <nav class="flex justify-between items-center px-8 py-6">
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