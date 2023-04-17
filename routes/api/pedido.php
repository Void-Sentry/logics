<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\c_pedido_items;

Route::prefix('pedido')->resource('pedido', c_pedido_items::class, ['parameters' => ['pedido' => 'id']]);