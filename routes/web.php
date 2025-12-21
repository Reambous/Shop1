<?php

use App\Http\Controllers\controller1;
use App\Http\Controllers\bukucontrol;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/controller1', [controller1::class, 'index']);
Route::get('/buku', [bukucontrol::class, 'index'])->name('buku.index');
Route::post('/buku', [bukucontrol::class, 'store'])->name('buku.store');
