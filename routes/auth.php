<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication;
Route::get('signup', function () {
    return view('authentication.signup');
})->name('signup.form');
Route::post('signup', [Authentication::class, 'registration'])->name('signup.submit'); 

Route::get('login', function () {
    return view('authentication.login');
})->name('login.form');
Route::get('logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');
