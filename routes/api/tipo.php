<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\c_tipo_usuario;

Route::prefix('tipo')->resource('tipo', c_tipo_usuario::class, ['parameters' => ['tipo' => 'id']]);
