<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\c_endereco;

Route::prefix('endereco')->resource('endereco', c_endereco::class, ['parameters' => ['endereco' => 'id']]);