<header 
    x-data="{ 
        mobileMenuOpen: false, 
        scrolled: false 
    }" 
    @scroll.window="scrolled = (window.pageYOffset > 20)"
    :class="{ 
        'py-8 bg-transparent': !scrolled, 
        'py-4 bg-obsidian/80 backdrop-blur-xl border-b border-white/5 shadow-2xl': scrolled 
    }"
    class="fixed w-full z-50 transition-all duration-500 ease-in-out"
>
    <div class="container mx-auto px-6">
        <div class="flex items-center justify-between">
            
            <div class="flex items-center gap-3 group cursor-pointer">
                <div class="relative w-11 h-11 flex items-center justify-center">
                    <div class="absolute inset-0 bg-iris/20 rounded-full scale-0 group-hover:scale-110 transition-transform duration-500"></div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-iris relative z-10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <span class="text-2xl font-display font-bold text-white tracking-tight uppercase">
                    Eye<span class="text-iris font-light">Clinic</span>
                </span>
            </div>

            <nav class="hidden lg:flex items-center space-x-12">
                <a href="#" class="text-[13px] uppercase tracking-[0.2em] font-medium text-glance-200 hover:text-white transition-all duration-300 relative group">
                    Services
                    <span class="absolute -bottom-2 left-0 w-0 h-[1px] bg-iris transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#" class="text-[13px] uppercase tracking-[0.2em] font-medium text-glance-200 hover:text-white transition-all duration-300 relative group">
                    Technology
                    <span class="absolute -bottom-2 left-0 w-0 h-[1px] bg-iris transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#" class="text-[13px] uppercase tracking-[0.2em] font-medium text-glance-200 hover:text-white transition-all duration-300 relative group">
                    Specialists
                    <span class="absolute -bottom-2 left-0 w-0 h-[1px] bg-iris transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#" class="text-[13px] uppercase tracking-[0.2em] font-medium text-glance-200 hover:text-white transition-all duration-300 relative group">
                    Experience
                    <span class="absolute -bottom-2 left-0 w-0 h-[1px] bg-iris transition-all duration-300 group-hover:w-full"></span>
                </a>
            </nav>

            <div class="hidden lg:flex items-center gap-8">
                <div class="flex flex-col items-end">
                    <span class="text-[10px] text-iris tracking-widest uppercase opacity-70">Emergency 24/7</span>
                    <a href="tel:+38111123456" class="text-white font-display text-sm hover:text-iris transition-colors">+381 11 123 456</a>
                </div>
                <a href="#" class="relative overflow-hidden px-8 py-3 group rounded-full border border-iris/30 transition-all duration-500 hover:border-iris">
                    <span class="relative z-10 text-white group-hover:text-obsidian text-xs font-bold uppercase tracking-widest transition-colors duration-500">Book Visit</span>
                    <div class="absolute inset-0 bg-iris translate-y-[101%] group-hover:translate-y-0 transition-transform duration-500 ease-out"></div>
                </a>
            </div>

            <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden flex flex-col gap-1.5 p-2">
                <span :class="mobileMenuOpen ? 'rotate-45 translate-y-2' : ''" class="w-8 h-[1px] bg-white transition-all duration-300"></span>
                <span :class="mobileMenuOpen ? 'opacity-0' : ''" class="w-8 h-[1px] bg-white transition-all duration-300"></span>
                <span :class="mobileMenuOpen ? '-rotate-45 -translate-y-2' : ''" class="w-8 h-[1px] bg-white transition-all duration-300"></span>
            </button>
        </div>
    </div>

    <div 
        x-show="mobileMenuOpen" 
        x-cloak
        x-transition:enter="transition ease-out duration-500"
        x-transition:enter-start="opacity-0 translate-x-full"
        x-transition:enter-end="opacity-100 translate-x-0"
        x-transition:leave="transition ease-in duration-400"
        x-transition:leave-start="opacity-100 translate-x-0"
        x-transition:leave-end="opacity-0 translate-x-full"
        class="fixed inset-0 h-screen w-full bg-obsidian-soft z-40 flex flex-col justify-center items-center text-center px-6"
    >
        <nav class="flex flex-col space-y-8">
            <a href="#" @click="mobileMenuOpen = false" class="text-4xl font-display font-bold text-white hover:text-iris transition-colors">Services</a>
            <a href="#" @click="mobileMenuOpen = false" class="text-4xl font-display font-bold text-white hover:text-iris transition-colors">Technology</a>
            <a href="#" @click="mobileMenuOpen = false" class="text-4xl font-display font-bold text-white hover:text-iris transition-colors">Specialists</a>
            <a href="#" @click="mobileMenuOpen = false" class="text-4xl font-display font-bold text-white hover:text-iris transition-colors">Contact</a>
        </nav>
        <div class="mt-20">
            <a href="#" class="px-12 py-5 bg-iris text-obsidian font-bold rounded-full uppercase tracking-tighter">Book an Appointment</a>
        </div>
    </div>
</header>