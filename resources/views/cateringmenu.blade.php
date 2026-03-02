@extends('layouts.base')
    @section('content')

<section class="mb-16">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- Fire Oven -->
        <div class="relative rounded-xl overflow-hidden shadow-lg border border-stone-300 group">
            <img src="images/prokitchen.png" alt="Fire Oven" class="w-full h-full object-cover">
                 class="w-full aspect-video object-cover group-hover:scale-105 transition duration-500">
            <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                <span class="font-bold text-white text-lg uppercase tracking-wide">
                    Fire Oven
                </span>
            </div>
        </div>

        <!-- Herbs -->
        <div class="relative rounded-xl overflow-hidden shadow-lg border border-stone-300 group">
            <img src="images/herbs.jpg" alt="Herbs" class="w-full h-full object-cover">
                 alt="Herbs"
                 class="w-full aspect-video object-cover group-hover:scale-105 transition duration-500">
            <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                <span class="font-bold text-white text-lg uppercase tracking-wide">
                    Herbs
                </span>
            </div>
        </div>

        <!-- Pasta Station -->
        <div class="relative rounded-xl overflow-hidden shadow-lg border border-stone-300 group">
             <img src="images/pastastation.jpg" alt="Pasta Station" class="w-full h-full object-cover">
                 alt="Pasta Station"
                 class="w-full aspect-video object-cover group-hover:scale-105 transition duration-500">
            <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                <span class="font-bold text-white text-lg uppercase tracking-wide">
                    Pasta Station
                </span>
            </div>
        </div>

        <!-- Pit Master Prep -->
        <div class="relative rounded-xl overflow-hidden shadow-lg border border-stone-300 group">
             <img src="images/pitmasterprep.jpg" alt="Pit Master Prep" class="w-full h-full object-cover">
                 alt="Pit Master Prep"
                 class="w-full aspect-video object-cover group-hover:scale-105 transition duration-500">
            <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                <span class="font-bold text-white text-lg uppercase tracking-wide">
                    Pit Master Prep
                </span>
            </div>
        </div>

        <!-- Plating Fusion -->
        <div class="relative rounded-xl overflow-hidden shadow-lg border border-stone-300 group">
            <img src="images/platingfusion.jpg" alt="Plating Fusion" class="w-full h-full object-cover">
                 alt="Plating Fusion"
                 class="w-full aspect-video object-cover group-hover:scale-105 transition duration-500">
            <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                <span class="font-bold text-white text-lg uppercase tracking-wide">
                    Plating Fusion
                </span>
            </div>
        </div>

        <!-- Tortilla Press -->
        <div class="relative rounded-xl overflow-hidden shadow-lg border border-stone-300 group">
           <img src="images/tortillapress.jpg" alt="Kitchen 1" class="w-full h-full object-cover">
                 alt="Tortilla Press"
                 class="w-full aspect-video object-cover group-hover:scale-105 transition duration-500">
            <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                <span class="font-bold text-white text-lg uppercase tracking-wide">
                    Tortilla Press
                </span>
            </div>
        </div>

    </div>
</section>



        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-24">
            <div class="space-y-6">
                <h3 class="text-3xl font-black text-orange-600 border-b-4 border-orange-600 pb-2">Specials</h3>
                <h4 class="font-bold text-red-800 uppercase text-xs tracking-widest">The Smoked Starters</h4>
                <div class="space-y-2 text-sm">
                    <p>Monday Shrimp Special</p>
                    <p>Adam's Sampler Platter</p>
                    <p>Hogtowne Package</p>
                    <p>Tailgator Pack 1 & 2</p>
                    <p>Adam's Big Deal</p>
                    <p>Burnt Ends Snack Box</p>
                    <p>Lamb Tasking Plate</p>
                </div>
            </div>

            <div class="space-y-6">
                <h3 class="text-3xl font-black text-orange-600 border-b-4 border-orange-600 pb-2">Meats</h3>
                <h4 class="font-bold text-red-800 uppercase text-xs tracking-widest">Wood-Fired Pasta Pit</h4>
                <div class="space-y-2 text-sm">
                    <p>St. Louis Style Pork Ribs</p>
                    <p>Beef Brisket (Chopped/Sliced)</p>
                    <p>Pulled Pork</p>
                    <p>Smoked Turkey Breast</p>
                    <p>Santa Maria Style Tri-Tip</p>
                    <p>Prime Rib (Saturdays)</p>
                </div>
            </div>

            <div class="space-y-6">
                <h3 class="text-3xl font-black text-orange-600 border-b-4 border-orange-600 pb-2">Favorites</h3>
                <h4 class="font-bold text-red-800 uppercase text-xs tracking-widest">Fusion Handhelds</h4>
                <div class="space-y-2 text-sm">
                    <p>Mexican Grill</p>
                    <p>Chilaquiles Con Carne</p>
                    <p>Mary's Salmon Plate</p>
                    <p>Lobster Roll</p>
                    <p>Shrimp Creole</p>
                    <p>Calamari Plate</p>
                </div>
            </div>

            <div class="space-y-6">
                <h3 class="text-3xl font-black text-orange-600 border-b-4 border-orange-600 pb-2">Appetizers</h3>
                <h4 class="font-bold text-red-800 uppercase text-xs tracking-widest">The Grand Finale</h4>
                <div class="space-y-2 text-sm">
                    <p>Adam's Tumbleweed</p>
                    <p>Hot Crab Dip</p>
                    <p>Hush Puppies w/ Cinnamon Butter</p>
                    <p>Corn Nuggets</p>
                    <p>Jalapeño Poppers</p>
                    <p>Smoked Wings</p>
                </div>
            </div>
        </div>

        <section class="bg-stone-900 text-stone-100 rounded-3xl p-8 md:p-12 shadow-2xl">
            <div class="text-center mb-12">
                <h1 class="text-5xl font-black uppercase italic tracking-widest text-orange-500">Catering Menu</h1>
                <p class="text-stone-400 mt-2">Feeding the crowd with smoke and soul.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                <div>
                    <h3 class="text-2xl font-bold text-white border-b border-stone-700 mb-6 pb-2">Signature Roasts</h3>
                    <ul class="space-y-3 text-stone-300 italic">
                        <li>Adam's Famous Pig Roast (Whole)</li>
                        <li>BBQ'd Baby Back Ribs & Chicken Combo</li>
                        <li>Ribs by the Pound</li>
                        <li>Smoked Beef Brisket by the Pound</li>
                        <li>Pork BBQ (Gallon / Quart / Pint)</li>
                        <li class="text-orange-400 font-bold">New: Smoked Italian Porchetta</li>
                        <li class="text-orange-400 font-bold">New: Barbacoa Style Whole Lamb Shoulder</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-2xl font-bold text-white border-b border-stone-700 mb-6 pb-2">Trays & Boxes</h3>
                    <ul class="space-y-3 text-stone-300 italic">
                        <li>Wrap Tray (Turkey, Ham, Roast Beef)</li>
                        <li>Fruit Tray & Vegetable Tray w/ Dip</li>
                        <li>Boxed Meals (Sandwich, Side, Cookie)</li>
                        <li class="text-orange-400 font-bold">New: Slider Station (Pulled Pork & Brisket)</li>
                        <li class="text-orange-400 font-bold">New: Caprese Skewer Platter</li>
                        <li class="text-orange-400 font-bold">New: Mini Taco Bar (30 Count)</li>
                        <li class="text-orange-400 font-bold">New: Focaccia Sandwich Tray</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-2xl font-bold text-white border-b border-stone-700 mb-6 pb-2">Bulk Sides & Extras</h3>
                    <ul class="space-y-3 text-stone-300 italic">
                        <li>Pork & Brisket Sandwiches (Bulk Count)</li>
                        <li>Whole Smoked Chicken (Cut 8-way)</li>
                        <li class="text-orange-400 font-bold">New: Half-Pan Smoked Mac & Cheese</li>
                        <li class="text-orange-400 font-bold">New: Mexican Street Corn (Off the cob)</li>
                        <li class="text-orange-400 font-bold">New: Bourbon Baked Beans (Gallon)</li>
                        <li class="text-orange-400 font-bold">New: Garlic Rosemary Potato Wedges</li>
                        <li class="text-orange-400 font-bold">New: Tray of Homemade Beignets</li>
                    </ul>
                </div>
            </div>

            <div class="mt-12 text-center text-xs text-stone-500 uppercase tracking-widest">
                Custom Packages Available Upon Request
             </div>
        </section>

        <footer class="mt-16 text-center text-stone-400 text-xs">
            &copy; 2026 Fusion BBQ Kitchen | Built for Laravel Dev Environment
        </footer>
    </div>

 @endsection
