<header 
    x-data="{ mobileMenuOpen: false, scrolled: false }" 
    @scroll.window="scrolled = (window.pageYOffset > 20)"
    :class="{ 'bg-white/90 backdrop-blur-md shadow-sm': scrolled, 'bg-transparent': !scrolled }"
    class="fixed w-full z-50 transition-all duration-300"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4 md:justify-start md:space-x-10">
            
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <a href="/" class="flex items-center space-x-2">
                    <span class="text-2xl font-bold tracking-tight text-vantage-dark">
                        VANTAGE<span class="text-vantage-primary">CLEAN</span>
                    </span>
                </a>
            </div>

            <div class="-mr-2 -my-2 md:hidden">
                <button 
                    @click="mobileMenuOpen = true" 
                    type="button" 
                    class="bg-vantage-surface rounded-md p-2 inline-flex items-center justify-center text-vantage-dark hover:text-vantage-primary focus:outline-none"
                >
                    <span class="sr-only">Open menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>

            <nav class="hidden md:flex space-x-8 items-center">
                <a href="#services" class="text-base font-medium text-gray-600 hover:text-vantage-primary transition">Services</a>
                <a href="#about" class="text-base font-medium text-gray-600 hover:text-vantage-primary transition">About Us</a>
                <a href="#projects" class="text-base font-medium text-gray-600 hover:text-vantage-primary transition">Buildings</a>
                
                <a href="#contact" class="inline-flex items-center justify-center px-5 py-2 border border-transparent rounded-full shadow-sm text-base font-medium text-white bg-vantage-primary hover:bg-vantage-accent transition-all duration-200">
                    Get a Quote
                </a>
            </nav>
        </div>
    </div>

    <div 
        x-show="mobileMenuOpen" 
        x-transition:enter="duration-200 ease-out"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="duration-100 ease-in"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden"
    >
        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
            <div class="pt-5 pb-6 px-5">
                <div class="flex items-center justify-between">
                    <div>
                        <span class="text-xl font-bold text-vantage-dark">VANTAGE CLEAN</span>
                    </div>
                    <div class="-mr-2">
                        <button @click="mobileMenuOpen = false" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="mt-6">
                    <nav class="grid gap-y-8">
                        <a href="#services" @click="mobileMenuOpen = false" class="text-base font-medium text-gray-900 hover:text-vantage-primary">Services</a>
                        <a href="#about" @click="mobileMenuOpen = false" class="text-base font-medium text-gray-900 hover:text-vantage-primary">About Us</a>
                        <a href="#projects" @click="mobileMenuOpen = false" class="text-base font-medium text-gray-900 hover:text-vantage-primary">Buildings</a>
                    </nav>
                </div>
            </div>
            <div class="py-6 px-5 space-y-6">
                <a href="#contact" @click="mobileMenuOpen = false" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-vantage-primary">
                    Get a Quote
                </a>
            </div>
        </div>
    </div>
</header>