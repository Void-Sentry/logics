<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Abstraction\generic_controller;
use App\Models\entregas;
use Illuminate\Http\Request;

class c_entregas extends generic_controller
{
    public function __construct(Request $request, entregas $model)
    {
        parent::__construct($request, $model);
    }
}
