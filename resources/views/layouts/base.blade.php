<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.46.0/dist/apexcharts.min.js"></script>
    <title>The Menu</title>
</head>
<body class="bg-gray-400">
    <header class="bg-gray-800 text-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img src="images/prokitchen.png" alt="Logo" class="w-10 h-10">
                    </div>

                   <nav class="ml-10 flex items-baseline space-x-8">
    <a href="/"
       class="{{ request()->is('/') ? 'text-yellow-500' : 'text-white' }} hover:text-blue-500 active:text-red-500 px-3 py-2 rounded-md text-sm font-medium transition-colors">
       Main
    </a>

    <a href="/specials"
       class="{{ request()->is('specials') ? 'text-yellow-500' : 'text-white' }} hover:text-blue-500 active:text-red-500 px-3 py-2 rounded-md text-sm font-medium transition-colors">
       Specials
    </a>

    <a href="/appetizers"
       class="{{ request()->is('appetizers') ? 'text-yellow-500' : 'text-white' }} hover:text-blue-500 active:text-red-500 px-3 py-2 rounded-md text-sm font-medium transition-colors">
       Appetizers/Salads
    </a>

    <a href="/meats"
       class="{{ request()->is('meats') ? 'text-yellow-500' : 'text-white' }} hover:text-blue-500 active:text-red-500 px-3 py-2 rounded-md text-sm font-medium transition-colors">
       Meats
    </a>

    <a href="/cater"
       class="{{ request()->is('cater') ? 'text-yellow-500' : 'text-white' }} hover:text-blue-500 active:text-red-500 px-3 py-2 rounded-md text-sm font-medium transition-colors">
       Catering
    </a>
</nav>
                </div>
            </div>

        </div>
    </header>

    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        @yield('content')
    </main>
     <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.46.0/dist/apexcharts.min.js"></script>
</body>
</html>
