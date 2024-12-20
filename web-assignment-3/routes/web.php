<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\PricingPlanController;
use App\Http\Controllers\SpecialtyController;
use App\Http\Controllers\FacilityController;

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
Route::put('/pricing/{id}', [PricingPlanController::class, 'update'])->name('pricing.update');
Route::delete('/pricing/{id}', [PricingPlanController::class, 'destroy'])->name('pricing.delete');
Route::get('/pricing/{id}', [PricingPlanController::class, 'show'])->name('pricing.show');
Route::get('/services', [PricingPlanController::class, 'index'])->name('services');
});
Route::get('/home', [SpecialtyController::class, 'index'])->name('home'); 
Route::get('/about', [FacilityController::class, 'index'])->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact'); 
