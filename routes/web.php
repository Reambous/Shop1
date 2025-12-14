<?php

use App\Http\Controllers\controller1;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/controller1', [controller1::class, 'index']);
