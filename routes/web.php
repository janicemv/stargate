<?php

use App\Http\Controllers\ConstellationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\StarController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;



Route::get('/', function () {
    return view('index');
});

Route::get('/search', [SearchController::class, 'search']);


Route::get('/stargate', [StarController::class, 'index']);
Route::get('/star/{star:name}', [StarController::class, 'show']);
Route::get('/stars/magic', [StarController::class, 'magic']);

Route::get('stars/create/{formType}', [StarController::class, 'create'])->middleware('auth');


Route::post('stars/store/{formType}', [StarController::class, 'store'])->middleware('auth');


Route::get('/constellations', [ConstellationController::class, 'index']);
Route::get('/constellations/{constellation:name}', [ConstellationController::class, 'show']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/references', function () {
    return view('references');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/email/verify', function () {
//     return view('auth.verify-email');
// })->middleware('auth')->name('verification.notice');

// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill();

//     return redirect('/home');
// })->middleware(['auth', 'signed'])->name('verification.verify');

// Route::post('/email/verification-notification', function (Request $request) {
//     $request->user()->sendEmailVerificationNotification();

//     return back()->with('message', 'Verification link sent!');
// })->middleware(['auth', 'throttle:6,1'])->name('verification.send');

require __DIR__ . '/auth.php';
