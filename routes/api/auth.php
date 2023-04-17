<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\c_usuario;

Route::controller(c_usuario::class)->group(function () {
    Route::post('/login', 'login');
    Route::post('/register', 'register');
    Route::post('/logout', 'logout')->middleware('auth:sanctum');
});