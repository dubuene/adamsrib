<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');

Route::view('/specials', 'specials')->name('specials');

Route::view('/menu', 'menu')->name('menu');

Route::view('/menu', 'menu')->name('menu');

Route::view('/meats', 'meats')->name('meats');

Route::view('/cater', 'cater')->name('cater');




Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
