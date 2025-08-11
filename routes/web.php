<?php
use App\Models\Booking;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $totalBooking = Booking::count();
    $lapanganTersedia = 5; // Ganti sesuai kebutuhan
    $bookingTerbaru = Booking::latest()->take(5)->get();

    return view('dashboard', compact('totalBooking', 'lapanganTersedia', 'bookingTerbaru'));
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
