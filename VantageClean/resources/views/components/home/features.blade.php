<section class="py-20 bg-vantage-dark text-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="lg:w-1/2">
                <h2 class="text-3xl font-extrabold sm:text-4xl">Why Property Managers Trust Vantage</h2>
                <div class="mt-8 space-y-6">
                    <template x-for="(feature, index) in ['Real-time Reporting', 'Eco-certified Supplies', 'Trained Professionals']">
                        <div class="flex items-center space-x-4">
                            <span class="flex-shrink-0 w-8 h-8 bg-vantage-accent rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            <span class="text-lg font-medium" x-text="feature"></span>
                        </div>
                    </template>
                </div>
            </div>
            <div class="mt-12 lg:mt-0 lg:w-1/2 relative">
                <div class="bg-vantage-primary/20 p-10 rounded-3xl border border-white/10 backdrop-blur-sm">
                    <p class="text-2xl font-light italic">"Vantage Clean has transformed how our tenants perceive the building. The attention to detail is unmatched."</p>
                    <div class="mt-6 flex items-center space-x-3">
                        <div class="w-10 h-10 bg-gray-500 rounded-full"></div>
                        <div>
                            <p class="font-bold">Mark Sterling</p>
                            <p class="text-vantage-accent text-sm">Estate Manager, Skyview Towers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>