<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home'); // Name the route 'home'

Route::get('/about', function () {
    return view('about');
})->name('about'); // Name the route 'about'

Route::get('/contact', function () {
    return view('contact');
})->name('contact'); // Name the route 'contact'

Route::get('/services', function () {
    return view('services');
})->name('services'); // Name the route 'services'
