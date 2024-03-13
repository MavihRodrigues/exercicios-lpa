<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('nome', function(Request $request){ 
    $nome = $request->input('nome'); 
    return $nome;
});


Route::get('nome/idade', function(Request $request){ 
    $nome = $request->input('nome'); 
    $idade = $request->input('idade'); 
    return 'Meu nome é '. $nome .', tenho '. $idade .' anos'; 
});


Route::get('nome/anoDeNascimento/cidadeNatal',function(Request$request){ 
    $nome = $request->input('nome'); 
    $anoDeNascimento = $request->input('anoDeNascimento'); 
    $cidadeNatal = $request->input('cidadeNatal'); 
    return 'Meu nome é '. $nome .', nasci em '. $anoDeNascimento .' e a minha cidade natal é '. $cidadeNatal; 
});


Route::get('soma', function (Request $request){ 
    $numero1 = $request->input('numero1'); 
    $numero2 = $request->input('numero2'); 
    $soma = $numero1 + $numero2; 
    return $soma; 
});


Route::get('subtracao', function (Request $request){
    $numero1 = $request->input('numero1'); 
    $numero2 = $request->input('numero2'); 
    $numero3 = $request->input('numero3'); 
    $subtracao = $numero1 - $numero2 - $numero3; 
    return $subtracao; 
}); 


Route::get('divisao', function (Request $request){ 
    $numero1 = $request->input('numero1'); 
    $numero2 = $request->input('numero2'); 
    $divisao = $numero1 / $numero2; 
    return $divisao;
});


Route::get('multiplicar', function (Request $request){ 
    $numero1 = $request->input('numero1'); 
    $numero2 = $request->input('numero2'); 
    $multiplicacao = $numero1 * $numero2; 
    return $multiplicacao;
}); 


Route::get('media', function (Request $request){ 
    $nota1 = $request->input('nota1'); 
    $nota2 = $request->input('nota2'); 
    $nota3 = $request->input('nota3'); 
    $nota4 = $request->input('nota4'); 
    $nota5 = $request->input('nota5'); 
    $media = ($nota1 + $nota2 + $nota3 + $nota4 + $nota5)/5; 
    return $media; 
});


Route::get('divisao', function (Request $request){ 
    $numero1 = $request->input('numero1'); 
    $numero2 = $request->input('numero2'); 
    $divisao = $numero2 / $numero1; 
    return $divisao; 
});


Route::get('multiplicacao', function (Request $request){ 
    $numero1 = $request->input('numero1'); 
    $multiplicacao = $numero1 * 2; 
    return 'O dobro do número informado é igual a: '. $multiplicacao; 
}); 


Route::get('calcular', function (Request $request){ 
    $base = $request->input('base'); 
    $altura = $request->input('altura'); 
    $calcular = $base * $altura; 
    return $calcular; 
});


Route::get('porcentagem', function (Request $request){ 
    $preço = $request->input('preço'); 
    $porcentagem = $request->input('porcentagem'); 
    $resultado = $preço - ($preço * $porcentagem / 100); 
    return $resultado; 
   });


   Route::get('aumentoSalarial', function (Request $request){ 
    $salarioAnterior = $request->input('salarioAnterior'); 
    $porcentualAumento = $request->input('porcentualAumento'); 
    $aumento = ($porcentualAumento / 100) *$salarioAnterior;
    $salarioAtual = $salarioAnterior + $aumento;
    return 'O salário anterior era de '. $salarioAnterior .', o aumento percentual foi de:'. $porcentualAumento .', logo o resultado é:'. $salarioAtual; 
   });


   Route::get('pontosDeRecompensa', function (Request $request){ 
    $valorDaCompra = $request->input('valorDaCompra'); 
    $pontosDeRecompensa = $request->input('pontosDeRecompensa'); 
    $resultado = ($valorDaCompra * 1)/ $pontosDeRecompensa; 
    return $resultado; 
   }); 


   Route::get('Venda', function (Request $request){ 
    $valorTotalDasCompras = $request->input('valorTotalDasCompras'); 
    $resultado = ($valorTotalDasCompras *5)/100; 
    return $resultado; 
});