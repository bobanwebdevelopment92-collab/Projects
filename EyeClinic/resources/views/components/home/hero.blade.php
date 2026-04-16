<section 
    x-data="{ loaded: false }" 
    x-init="setTimeout(() => loaded = true, 100)"
    class="relative min-h-screen flex items-center overflow-hidden bg-obsidian"
>
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-r from-obsidian via-obsidian/70 to-transparent z-10"></div>
        
        <video 
            autoplay 
            muted 
            loop 
            playsinline 
            poster="https://images.unsplash.com/photo-1581594658210-c5c85d9d67c7?auto=format&fit=crop&q=80&w=2000"
            class="absolute inset-0 w-full h-full object-cover object-center transition-transform duration-[10s] ease-out"
            :class="loaded ? 'scale-100' : 'scale-110'"
        >
            <source src="https://mixkit.co/free-stock-video/abstract-tunnel-of-golden-figures-patterns-31569/" type="video/mp4">
            
            <img src="https://images.unsplash.com/photo-1581594658210-c5c85d9d67c7?auto=format&fit=crop&q=80&w=2000" alt="Advanced Medical Technology">
        </video>

        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-[0.03] z-20 pointer-events-none"></div>
    </div>

    <div class="container mx-auto px-6 relative z-30 pt-20">
        <div class="max-w-4xl">
            <div class="flex items-center gap-4 mb-8" data-aos="fade-right" data-aos-delay="200">
                <span class="h-[1px] w-12 bg-iris"></span>
                <span class="text-iris uppercase tracking-[0.4em] text-[11px] font-bold">The Gold Standard in Vision</span>
            </div>

            <h1 class="text-6xl md:text-8xl font-display font-bold text-white leading-[0.9] mb-8" data-aos="fade-up" data-aos-delay="400">
                Vision Without <br>
                <span class="relative inline-block mt-2">
                    <span class="relative z-10 text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-iris/50">Compromise.</span>
                    <span class="absolute bottom-4 left-0 w-full h-1 bg-iris/30 -z-10 blur-sm" data-aos="width-grow" data-aos-delay="800"></span>
                </span>
            </h1>

            <p class="text-glance-200 text-lg md:text-xl max-w-xl mb-12 leading-relaxed opacity-80 font-light" data-aos="fade-up" data-aos-delay="600">
                Where surgical precision meets bespoke patient care. We redefine the experience of sight through the world's most advanced ocular technology.
            </p>

            <div class="flex flex-wrap items-center gap-8" data-aos="fade-up" data-aos-delay="800">
                <a href="#" class="group relative px-10 py-5 bg-iris overflow-hidden rounded-sm transition-all duration-500 transform hover:-translate-y-1 shadow-2xl shadow-iris/20">
                    <div class="absolute inset-0 bg-white translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-out"></div>
                    <span class="relative z-10 text-obsidian font-bold uppercase tracking-widest text-xs">Schedule Analysis</span>
                </a>
                
                <button @click="$dispatch('open-video-modal')" class="group flex items-center gap-4 text-white hover:text-iris transition-colors duration-300">
                    <span class="w-14 h-14 rounded-full border border-white/20 flex items-center justify-center group-hover:border-iris transition-all duration-500 group-hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current ml-1" viewBox="0 0 24 24"><path d="M3 22v-20l18 10-18 10z"/></svg>
                    </span>
                    <span class="uppercase tracking-[0.2em] text-[10px] font-bold">Watch Technology</span>
                </button>
            </div>
        </div>
    </div>

    <div 
        class="absolute bottom-16 right-16 hidden xl:block z-30"
        data-aos="fade-left" 
        data-aos-delay="1000"
    >
        <div class="bg-obsidian/30 backdrop-blur-2xl border border-white/10 p-10 space-y-8 rounded-2xl">
            <div class="relative">
                <div class="text-4xl font-display font-bold text-white leading-none tracking-tighter">25k<span class="text-iris">+</span></div>
                <div class="text-[9px] text-glance-200 uppercase tracking-[0.3em] mt-2 font-medium">Successful Procedures</div>
            </div>
            <div class="h-[1px] w-full bg-gradient-to-r from-iris/50 to-transparent"></div>
            <div class="relative">
                <div class="text-4xl font-display font-bold text-white leading-none tracking-tighter">0.01<span class="text-iris">%</span></div>
                <div class="text-[9px] text-glance-200 uppercase tracking-[0.3em] mt-2 font-medium">Laser Deviation</div>
            </div>
        </div>
    </div>

    <div class="absolute bottom-10 left-1/2 -translate-x-1/2 z-30 flex flex-col items-center gap-3 opacity-50 hover:opacity-100 transition-opacity duration-300 cursor-pointer">
        <span class="text-[9px] uppercase tracking-[0.5em] text-white font-bold">Explore</span>
        <div class="w-[1px] h-16 bg-gradient-to-b from-iris via-iris/50 to-transparent"></div>
    </div>
</section>

<style>
    /* Specijalna animacija za širenje linije ispod naslova */
    [data-aos="width-grow"] {
        width: 0;
        transition-property: width;
    }
    [data-aos="width-grow"].aos-animate {
        width: 100%;
    }
    
    /* Smooth scroll behavior za celu stranu */
    html {
        scroll-behavior: smooth;
    }
</style>