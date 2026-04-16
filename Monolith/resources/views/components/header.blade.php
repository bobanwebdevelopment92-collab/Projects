<header 
    x-data="{ atTop: true, mobileMenu: false }" 
    @scroll.window="atTop = (window.pageYOffset > 50 ? false : true)"
    :class="atTop ? 'bg-transparent py-8' : 'bg-brand-dark/90 backdrop-blur-md py-4 border-b border-brand-primary/20'"
    class="fixed w-full z-50 transition-all duration-500 ease-in-out px-6 lg:px-16"
>
    <div class="max-w-screen-2xl mx-auto flex justify-between items-center">
        
        <div class="flex items-center space-x-2" data-aos="fade-right">
            <div class="w-8 h-8 bg-brand-primary rotate-45 flex-shrink-0"></div>
            <span class="text-3xl font-black tracking-tighter text-brand-canvas uppercase">
                Mono<span class="text-brand-primary">lith</span>
            </span>
        </div>

        <nav class="hidden md:flex space-x-12 items-center" data-aos="fade-down">
            <a href="#" class="text-sm font-bold tracking-widest text-brand-canvas hover:text-brand-primary transition-colors uppercase">The Fleet</a>
            <a href="#" class="text-sm font-bold tracking-widest text-brand-canvas hover:text-brand-primary transition-colors uppercase">Operations</a>
            <a href="#" class="text-sm font-bold tracking-widest text-brand-canvas hover:text-brand-primary transition-colors uppercase">Acquisition</a>
            <a href="#" class="text-sm font-bold tracking-widest text-brand-canvas hover:text-brand-primary transition-colors uppercase">Support</a>
        </nav>

        <div class="flex items-center space-x-6">
            <a href="#" 
               data-aos="fade-left"
               class="hidden md:inline-block border-2 border-brand-primary text-brand-primary hover:bg-brand-primary hover:text-brand-dark font-black px-6 py-2 transition-all duration-300 uppercase tracking-tighter">
                Request Quote
            </a>

            <button @click="mobileMenu = !mobileMenu" class="md:hidden text-brand-canvas focus:outline-none">
                <svg x-show="!mobileMenu" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16" />
                </svg>
                <svg x-show="mobileMenu" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <div 
        x-show="mobileMenu" 
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-full"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-full"
        class="fixed inset-0 z-40 bg-brand-dark flex flex-col items-center justify-center space-y-8 md:hidden"
    >
        <a @click="mobileMenu = false" href="#" class="text-2xl font-black text-brand-canvas uppercase tracking-widest">The Fleet</a>
        <a @click="mobileMenu = false" href="#" class="text-2xl font-black text-brand-canvas uppercase tracking-widest">Operations</a>
        <a @click="mobileMenu = false" href="#" class="text-2xl font-black text-brand-canvas uppercase tracking-widest">Acquisition</a>
        <a @click="mobileMenu = false" href="#" class="text-2xl font-black text-brand-canvas uppercase tracking-widest text-brand-primary">Request Quote</a>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            duration: 1000,
            once: true,
        });
    });
</script>