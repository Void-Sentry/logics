<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Abstraction\generic_controller;
use App\Models\rotas;
use Illuminate\Http\Request;

class c_rota extends generic_controller
{
    public function __construct(Request $request, rotas $model)
    {
        parent::__construct($request, $model);
    }
}
