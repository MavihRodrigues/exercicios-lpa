<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


route::get('nome', function(Request $request){ 
    $nome = $request->input('nome'); 
    return $nome;
}); 