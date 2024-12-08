<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::middleware('guest')->group(function () {
// for registeration
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);
// for login
Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/', [AuthenticatedSessionController::class, 'store']);
});
Route::middleware('auth')->group(function () {
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});
Route::get('/home', function () {
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
