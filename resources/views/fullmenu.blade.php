@extends('layouts.base')
    @section('content')

    <div class="max-w-6xl mx-auto px-4 py-12">

        <header class="text-center mb-16">
            <h1 class="text-7xl font-black uppercase tracking-tighter text-red-700 mb-2">Full Menu</h1>
            <p class="text-orange-600 font-bold tracking-widest uppercase text-sm">Southern Bar B Que by Terry Jones  • Italian by Nonna Givency • Mexican by Carlos Pena</p>
            <div class="h-1.5 w-32 bg-orange-500 mx-auto mt-4"></div>
        </header>

        <section class="mb-20">
            <h2 class="text-3xl font-bold text-center mb-8 italic text-stone-700">Our Professional Kitchens</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <div class="bg-white rounded-2xl shadow-sm border border-stone-200 overflow-hidden">
                    <div class="aspect-video bg-stone-200">
                        <img src="images/prokitchen.png" alt="Kitchen 1" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4 border-t border-stone-100">
                        <span class="text-[10px] font-black text-red-700 uppercase tracking-widest">Station 01</span>
                        <h3 class="text-lg font-bold text-stone-800">Main Kitchen</h3>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-stone-200 overflow-hidden">
                    <div class="aspect-video bg-stone-200">
                        <img src="images/prokitchen1.png" alt="Kitchen 2" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4 border-t border-stone-100">
                        <span class="text-[10px] font-black text-red-700 uppercase tracking-widest">Station 02</span>
                        <h3 class="text-lg font-bold text-stone-800">Prep Station</h3>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-stone-200 overflow-hidden">
                    <div class="aspect-video bg-stone-200">
                        <img src="images/prokitchen2.png" alt="Kitchen 3" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4 border-t border-stone-100">
                        <span class="text-[10px] font-black text-red-700 uppercase tracking-widest">Station 03</span>
                        <h3 class="text-lg font-bold text-stone-800">Meats Kitchen</h3>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-stone-200 overflow-hidden">
                    <div class="aspect-video bg-stone-200">
                        <img src="images/prokitchen5.png" alt="Kitchen 4" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4 border-t border-stone-100">
                        <span class="text-[10px] font-black text-red-700 uppercase tracking-widest">Station 04</span>
                        <h3 class="text-lg font-bold text-stone-800">Nonna's Kitchen</h3>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-stone-200 overflow-hidden">
                    <div class="aspect-video bg-stone-200">
                        <img src="images/prokitchen5.png" alt="Kitchen 5" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4 border-t border-stone-100">
                        <span class="text-[10px] font-black text-red-700 uppercase tracking-widest">Station 05</span>
                        <h3 class="text-lg font-bold text-stone-800">Carlo's Spanish Kitchen</h3>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-stone-200 overflow-hidden">
                    <div class="aspect-video bg-stone-200">
                        <img src="images/terrythechef.jpg" alt="Kitchen 6" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4 border-t border-stone-100">
                        <span class="text-[10px] font-black text-red-700 uppercase tracking-widest">Station 06</span>
                        <h3 class="text-lg font-bold text-stone-800">Smoke Grills</h3>
                    </div>
                </div>

            </div>
        </section>

        <hr class="border-stone-300 mb-16">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            <div class="space-y-6">
                <h3 class="text-3xl font-black text-orange-600 border-b-4 border-orange-600 pb-2">Specials</h3>
                <div class="space-y-2 text-sm text-stone-700">
                    <p class="font-semibold text-red-700">Monday Shrimp Special</p>
                    <p>Adam's Sampler Platter</p>
                    <p>Hogtowne Package</p>
                    <p>Tailgator Pack 1 & 2</p>
                </div>
            </div>

            <div class="space-y-6">
                <h3 class="text-3xl font-black text-orange-600 border-b-4 border-orange-600 pb-2">Meats</h3>
                <div class="space-y-2 text-sm text-stone-700">
                    <p class="font-black">St. Louis Style Pork Ribs</p>
                    <p>Beef Brisket</p>
                    <p>Pulled Pork</p>
                    <p>Smoked Turkey</p>
                </div>
            </div>

            <div class="space-y-6">
                <h3 class="text-3xl font-black text-orange-600 border-b-4 border-orange-600 pb-2">Favorites</h3>
                <div class="space-y-2 text-sm text-stone-700">
                    <p>Mexican Grill</p>
                    <p>Chilaquiles Con Carne</p>
                    <p>Mary's Salmon Plate</p>
                    <p class="text-red-700 font-semibold">Lobster Roll</p>
                </div>
            </div>

            <div class="space-y-6">
                <h3 class="text-3xl font-black text-orange-600 border-b-4 border-orange-600 pb-2">Appetizers</h3>
                <div class="space-y-2 text-sm text-stone-700">
                    <p>Adam's Tumbleweed</p>
                    <p>Hot Crab Dip</p>
                    <p>Hush Puppies</p>
                    <p class="font-bold">Smoked Wings</p>
                </div>
            </div>
        </div>

        <footer class="mt-20 py-8 border-t border-stone-200 text-center text-stone-400 text-xs italic">
            &copy; 2026 Fusion BBQ Kitchen | Built with Laravel Herd
        </footer>
    </div>

@endsection
