<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\c_usuario;

Route::prefix('usuario')->resource('usuario', c_usuario::class, ['parameters' => ['usuario' => 'id']]);