<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', HomeController::class)->name('home');
Route::get('/profile', ProfileController::class)->name('profile');
Route::inertia('login', 'Login');
Route::post('login', function(Request $request) {
    $postData = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required', 'min:6'],
    ]);

    if ($user = User::where('email', $postData['email'])->first()) {
        Auth::attempt(['email' => $postData['email'], 'password' => $postData['password']]);

        return to_route('home');
    }

    return redirect()->back();
});
Route::post('file-upload', function (Request $request) {
    logger($request->all());

    if ($request->hasFile('pic')) {
        $request->pic->store('images');
    }

    return to_route('profile');
});
