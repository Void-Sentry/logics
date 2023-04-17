<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\c_carga;

Route::prefix('carga')->resource('carga', c_carga::class, ['parameters' => ['carga' => 'id']]);