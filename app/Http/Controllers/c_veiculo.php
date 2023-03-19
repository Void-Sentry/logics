<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Abstraction\generic_controller;
use App\Models\veiculo;
use Illuminate\Http\Request;

class c_veiculo extends generic_controller
{
    public function __construct(Request $request, veiculo $model)
    {
        parent::__construct($request, $model);
    }
}
