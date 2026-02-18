<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('findJobs',function(){
    return view('user.joblisting');
});
Route::get('postJob',function(){
    return view('Employers.postJob');
});
require __DIR__.'/auth.php';