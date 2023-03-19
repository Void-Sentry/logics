<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Abstraction\generic_controller;
use Illuminate\Http\Request;
use App\Models\cargas;

class c_carga extends generic_controller
{
    public function __construct(Request $request, cargas $model)
    {
        parent::__construct($request, $model);
    }
}
