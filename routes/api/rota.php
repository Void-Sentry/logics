<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\c_rota;

Route::prefix('rota')->resource('rota', c_rota::class, ['parameters' => ['rota' => 'id']]);