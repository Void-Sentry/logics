<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\c_veiculo;

Route::prefix('veiculo')->resource('veiculo', c_veiculo::class, ['parameters' => ['veiculo' => 'id']]);