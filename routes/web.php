<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

 Route::middleware(['auth'])->group(function () {
 Route::resource('bookings', BookingController::class);
});


require __DIR__.'/auth.php';
