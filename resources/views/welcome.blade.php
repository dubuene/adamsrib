    @extends('layouts.base')
    @section('content')
    <section class="bg-gray-400 lg:grid lg:h-screen lg:place-content-center">
  <div class="mx-auto w-screen max-w-7xl px-4 py-16 sm:px-6 sm:py-24 md:grid md:grid-cols-2 md:items-center md:gap-4 lg:px-8 lg:py-32">
    <div class="max-w-prose text-left px-8 sm:px-18">
      <h1 class="text-4xl font-bold text-gray-900 sm:text-5xl">
        Adam's Rib
        <strong class="text-brown-400">Bar-B-Que and More</strong>
      </h1>

      <p class="mt-4 text-base text-pretty text-gray-700 sm:text-lg/relaxed">

      </p>

      <div class="mt-4 flex gap-4 sm:mt-6">
        <a class="inline-block rounded border border-indigo-600 bg-indigo-600 px-5 py-3 font-medium text-white shadow-sm transition-colors hover:bg-indigo-700" href="/fullmenu">
         Full Menu
        </a>

        <a class="inline-block rounded border border-indigo-600 bg-indigo-600 px-5 py-3 font-medium text-white shadow-sm transition-colors hover:bg-indigo-700" href="/cateringmenu">
         Catering Menu
        </a>
      </div>
    </div>
    <div>
   <img src="{{ asset('images/herosection.png') }}" alt="Hero Section Image" class="rounded-xl shadow-2xl shadow-emerald-950 mr-4">
</div>
</section>

     @endsection
