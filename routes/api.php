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


route::get('nome/idade', function(Request $request){ 
    $nome = $request->input('nome'); 
    $idade = $request->input('idade'); 
    return 'Meu nome é '. $nome .', tenho '. $idade .' anos'; 
});


route::get('nome/anoDeNascimento/cidadeNatal',function(Request$request){ 
    $nome = $request->input('nome'); 
    $anoDeNascimento = $request->input('anoDeNascimento'); 
    $cidadeNatal = $request->input('cidadeNatal'); 
    return 'Meu nome '. $nome .', nasci em '. $anoDeNascimento .' e a minha cidade natal é '. $cidadeNatal; 
});


route::get('soma', function (Request $request){ 
    $numero1 = $request->input('numero1'); 
    $numero2 = $request->input('numero2'); 
    $soma = $numero1 + $numero2; 
    return $soma; 
});


route::get('subtracao', function (Request $request){
    $numero1 = $request->input('numero1'); 
    $numero2 = $request->input('numero2'); 
    $numero3 = $request->input('numero3'); 
    $subtracao = $numero1 - $numero2 - $numero3; 
    return $subtracao; 
}); 


route::get('divisao', function (Request $request){ 
    $numero1 = $request->input('numero1'); 
    $numero2 = $request->input('numero2'); 
    $divisao = $numero1 / $numero2; 
    return $divisao;
});


route::get('multiplicacao', function (Request $request){ 
    $numero1 = $request->input('numero1'); 
    $numero2 = $request->input('numero2'); 
    $multiplicacao = $numero1 * $numero2; 
    return $multiplicacao; 
}); 


route::get('media', function (Request $request){ 
    $nota1 = $request->input('nota1'); 
    $nota2 = $request->input('nota2'); 
    $nota3 = $request->input('nota3'); 
    $nota4 = $request->input('nota4'); 
    $nota5 = $request->input('nota5'); 
    $media = ($nota1 + $nota2 + $nota3 + $nota4 + $nota5)/5; 
    return $media; 
});


route::get('divisao', function (Request $request){ 
    $numero1 = $request->input('numero1'); 
    $numero2 = $request->input('numero2'); 
    $divisao = $numero2 / $numero1; 
    return $divisao; 
});


route::get('multiplicacao', function (Request $request){ 
    $numero1 = $request->input('numero1'); 
    $multiplicacao = $numero1 * 2; 
    return 'O dobro do número informado é igual a: '. $multiplicacao; 
}); 


