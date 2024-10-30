<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('index'); //merujuk ke file welcome.blade.ph di folder resource view
// });

Route::get('/welcome', function () {
    return view('welcome'); //merujuk ke file index.blade.ph di folder resource view
});

// Route::get('/about', function () {
//     return view('about'); //merujuk ke file about.blade.ph di folder resource view
// });

// Route::get('/login', function () {
//     return view('login'); //merujuk ke file welcome.blade.ph di folder resource view
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/login', [HomeController::class, 'login'])->name('login');