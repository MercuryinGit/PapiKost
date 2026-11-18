<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard/superadmin', function () {
        return view('dashboard.superadmin');
    });

    Route::get('/dashboard/admin', function () {
        return view('dashboard.admin');
    });

    Route::get('/dashboard/peserta', function () {
        return view('dashboard.peserta');
    });

});