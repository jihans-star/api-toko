<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Api\ProductController;

Route::post('/login', function(Request $request){

    $credentials = $request->only('email','password');

    if(Auth::attempt($credentials)){
        return response()->json([
            'message' => 'Login berhasil'
        ]);
    }

    return response()->json([
        'message' => 'Login gagal',
        'data' => $credentials
    ],401);
});

Route::apiResource('products', ProductController::class);