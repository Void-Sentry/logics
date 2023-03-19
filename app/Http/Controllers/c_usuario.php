<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Abstraction\generic_controller;
use App\Models\User;
use Illuminate\Http\Request;

class c_usuario extends generic_controller
{
    public function __construct(Request $request, User $model)
    {
        parent::__construct($request, $model);
    }
}
