<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Abstraction\generic_controller;
use App\Models\pedido_items;
use Illuminate\Http\Request;

class c_pedido_items extends generic_controller
{
    public function __construct(Request $request, pedido_items $model)
    {
        parent::__construct($request, $model);
    }
}
