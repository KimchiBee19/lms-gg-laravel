<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/book', [BookController::class, 'show'])->name('book.show');

    Route::get('/reserve/{id}', [ReservationController::class, 'show'])->name('reserve.show');
    Route::post('reserve', [ReservationController::class, 'submit'])->name('reserve.submit');
    Route::get('view', [ReservationController::class, 'view'])->name('reserve.view');
    Route::delete('/reserve/{id}', [ReservationController::class, 'destroy'])->name('reserve.destroy');
});

require __DIR__.'/auth.php';