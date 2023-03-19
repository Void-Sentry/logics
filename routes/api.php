<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\c_carga;
use App\Http\Controllers\c_endereco;
use App\Http\Controllers\c_entregas;
use App\Http\Controllers\c_pedido_items;
use App\Http\Controllers\c_rota;
use App\Http\Controllers\c_tipo_usuario;
use App\Http\Controllers\c_usuario;
use App\Http\Controllers\c_veiculo;

Route::prefix('carga')->resource('carga', c_carga::class, ['parameters' => ['carga' => 'id']]);
Route::prefix('endereco')->resource('endereco', c_endereco::class, ['parameters' => ['endereco' => 'id']]);
Route::prefix('entrega')->resource('entrega', c_entregas::class, ['parameters' => ['entrega' => 'id']]);
Route::prefix('pedido')->resource('pedido', c_pedido_items::class, ['parameters' => ['pedido' => 'id']]);
Route::prefix('rota')->resource('rota', c_rota::class, ['parameters' => ['rota' => 'id']]);
Route::prefix('tipo')->resource('tipo', c_tipo_usuario::class, ['parameters' => ['tipo' => 'id']]);
Route::prefix('usuario')->resource('usuario', c_usuario::class, ['parameters' => ['usuario' => 'id']]);
Route::prefix('veiculo')->resource('veiculo', c_veiculo::class, ['parameters' => ['veiculo' => 'id']]);
