<?php

use App\Http\Controllers\ProfileController;
use App\Models\Constellation;
use App\Models\Star;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {


    return view('index');
});

Route::get('/stargate', function () {

    $stars = Star::all();

    return view('stargate', [
        'stars' => $stars
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
