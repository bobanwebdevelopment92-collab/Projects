<section class="relative bg-vantage-light pt-24 pb-16 lg:pt-32 lg:pb-24 overflow-hidden">
    <div class="absolute top-0 right-0 -translate-y-1/4 translate-x-1/4 transform opacity-10">
        <svg width="800" height="800" fill="none" viewBox="0 0 800 800">
            <circle cx="400" cy="400" r="400" fill="url(#paint0_radial)" />
            <defs>
                <radialGradient id="paint0_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(400 400) rotate(90) scale(400)">
                    <stop stop-color="#0284c7" />
                    <stop offset="1" stop-color="#0284c7" stop-opacity="0" />
                </radialGradient>
            </defs>
        </svg>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="lg:grid lg:grid-cols-12 lg:gap-8 items-center">
            
            <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
                <div x-data="{ shown: false }" x-init="setTimeout(() => shown = true, 100)">
                    <span 
                        x-show="shown" 
                        x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 -translate-x-4"
                        class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-vantage-primary/10 text-vantage-primary ring-1 ring-inset ring-vantage-primary/20"
                    >
                        New: Eco-Friendly Building Care
                    </span>
                    
                    <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-vantage-dark sm:text-5xl md:text-6xl">
                        <span class="block">Crystal Clear Views for</span>
                        <span class="block text-vantage-primary">Modern Living.</span>
                    </h1>
                    
                    <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                        Vantage Clean provides premium maintenance and hygiene solutions for residential complexes and commercial towers. We don't just clean; we elevate your building's value.
                    </p>

                    <div class="mt-8 sm:flex sm:justify-center lg:justify-start space-y-3 sm:space-y-0 sm:space-x-4">
                        <a href="#contact" class="flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-full text-white bg-vantage-primary hover:bg-vantage-accent shadow-vantage-soft transition-all duration-300 transform hover:-translate-y-1">
                            Book a Survey
                        </a>
                        <a href="#services" class="flex items-center justify-center px-8 py-3 border border-gray-300 text-base font-medium rounded-full text-vantage-dark bg-white hover:bg-gray-50 transition-all duration-300">
                            Our Services
                        </a>
                    </div>

                    <div class="mt-8 flex items-center space-x-4 text-sm text-gray-600">
                        <div class="flex -space-x-2">
                            <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white" src="https://ui-avatars.com/api/?name=JD&background=0284c7&color=fff" alt="">
                            <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white" src="https://ui-avatars.com/api/?name=AS&background=06b6d4&color=fff" alt="">
                            <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white" src="https://ui-avatars.com/api/?name=MK&background=0f172a&color=fff" alt="">
                        </div>
                        <p><span class="font-bold text-vantage-dark">50+</span> Buildings Maintained Weekly</p>
                    </div>
                </div>
            </div>

            <div class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
                <div class="relative mx-auto w-full rounded-2xl shadow-2xl overflow-hidden transform lg:rotate-3 hover:rotate-0 transition-transform duration-500">
                    <img class="w-full object-cover" src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Modern office building">
                    
                    <div class="absolute inset-0 bg-vantage-primary mix-blend-multiply opacity-10"></div>
                </div>
            </div>

        </div>
    </div>
</section>