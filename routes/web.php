<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); //merujuk ke file welcome.blade.ph di folder resource view
});

Route::get('/index', function () {
    return view('index'); //merujuk ke file index.blade.ph di folder resource view
});


Route::get('/about', function () {
    return view('Mega Octaviana'); //merujuk ke file about.blade.ph di folder resource view
});

Route::get('/login', function () {
    return view('login'); //merujuk ke file welcome.blade.ph di folder resource view
});