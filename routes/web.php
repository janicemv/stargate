<?php

use App\Http\Controllers\ConstellationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\StarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/search', [SearchController::class, 'search']);


Route::get('/stargate', [StarController::class, 'index']);
Route::get('/star/{star}', [StarController::class, 'show']);


Route::get('/constellations', [ConstellationController::class, 'index']);
Route::get('/constellations/{constellation}', [ConstellationController::class, 'show']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/references', function () {
    return view('references');
});

Route::get('/searchpage', function () {
    return view('searchpage');
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
