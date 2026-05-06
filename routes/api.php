<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::post('/login', function(Request $request){
    if(Auth::attempt($request->only('email','password'))){
        return response()->json([
            'message' => 'Login berhasil'
        ]);
    }
    return response()->json(['message'=>'Login gagal'],401);
});