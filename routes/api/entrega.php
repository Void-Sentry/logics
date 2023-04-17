<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\c_entregas;

Route::prefix('entrega')->resource('entrega', c_entregas::class, ['parameters' => ['entrega' => 'id']]);