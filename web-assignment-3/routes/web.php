<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\PricingPlanController;

// Routes accessible to guests (unauthenticated users)
Route::middleware('guest')->group(function () {
// for registeration
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);
// for login
Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/', [AuthenticatedSessionController::class, 'store']);
});

// Routes accessible to authenticated users
/********************************************************* 
Middleware: Create and apply middleware to check user authentication and restrict 
access to certain routes
********************************************************* */
Route::middleware('auth')->group(function () {
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::get('/pricing', [PricingPlanController::class, 'index']);
Route::post('/pricing', [PricingPlanController::class, 'store']);
Route::delete('/pricing/{id}', [PricingPlanController::class, 'destroy'])->name('pricing.delete');
Route::get('/services', [PricingPlanController::class, 'index'])->name('services');
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
