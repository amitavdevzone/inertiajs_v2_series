<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', HomeController::class)->name('home');
Route::get('/profile', ProfileController::class)->name('profile');
Route::post('/test', function (Request $request) {
    logger($request->all());
    // return to_route('profile');
    return inertia()->location('https://www.amitavroy.com');
});
