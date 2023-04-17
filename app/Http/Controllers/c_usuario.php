<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Abstraction\generic_controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class c_usuario extends generic_controller
{
    public function __construct(Request $request, User $model)
    {
        parent::__construct($request, $model);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request): JsonResponse
    {
        try
        {
            $user = User::where('email', $request->email)->first();
            Hash::check($request->password, $user->password);

            return response()->json([
                'status'    =>  Response::HTTP_CONTINUE,
                'message'   =>  'Autenticado', 
                'item'      =>  [
                    'user'      =>  $user,
                    'token'     =>  $user->createToken('token')->plainTextToken
                ]
            ]);
        }
        catch(\Exception $e)
        {
            return response()->json([
                'status'    => Response::HTTP_BAD_REQUEST,
                'message'   => 'Usuário ou senha não encontrados.', 
                'error'     => $e->getMessage()
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request): JsonResponse
    {
        try
        {
            $request['password'] = Hash::make($request->password);
            $user = User::create($request->all());

            return response()->json([
                'status'    =>  Response::HTTP_CREATED,
                'message'   =>  'Usuário registrado.',
                'item'      =>  $user
            ]);
        }
        catch(\Exception $e)
        {
            return response()->json([
                'status'    => Response::HTTP_BAD_REQUEST,
                'message'   => 'Usuário ou senha inválidos ou já existem.', 
                'error'     => $e->getMessage()
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(): JsonResponse
    {
        error_log('aaaa');
        try
        {
            return response()->json([
                'status'    =>  Response::HTTP_OK,
                'message'   =>  'Token invalidado.',
                'item'      =>  auth('sanctum')->user()->tokens()->delete()
            ]);
        }
        catch(\Exception $e)
        {
            return response()->json([
                'status'    => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message'   => $e->getMessage()
            ]);
        }
        
    }
}
