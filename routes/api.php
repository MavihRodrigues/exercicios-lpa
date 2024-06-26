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



Route::get('verifica/idade', function(Request $request){
    $idade = $request->input('idade');
    if($idade >= 18){
        return "maior de idade";
    } else {
        return "menor de idade";
    }
});


Route::get('verificar/par', function(Request $request){
    $numero = $request->input('numero');
    if($numero % 2 == 0){
        return 'par';
    } else {
        return 'impar';
    }
});


Route::get('verifica/numero', function (Request $request){
    $numero = $request->input('numero');
    if($numero > 10){
    return "maior que 10";
    } else {
    return "menor que 10";
    }
});


Route::get('temperatura/celsius', function (Request $request){
    $graus = $request->input('graus');
    if($graus > 30){
    return "Está quente!";
    }
});

Route::get('negativo/positivo/zero', function (Request $request){
    $numero = $request->input('numero');
    if($numero > 0){
    return "Este número é positivo";
    } elseif ($numero < 0){
    return "Este número é negativo";
    } else {
    return "Este número é nulo";
    }
});


Route::get('idade', function (Request $request){
    $idade = $request->input('idade');
    if($idade >= 18){
    return "Você é maior de idade";
    }
});


Route::get('par/impar', function (Request $request){
    $numero = $request->input('numero');
    if($numero % 2 == 0){
    return "Este número é par";
    } else {
    return "Este número é ímpar";
    }
});


Route::get('maiorNumero', function (Request $request){
    $numero1 = $request->input('numeroUm');
    $numero2 = $request->input('numeroDois');
    if($numero1 > $numero2){
    return "O maior número é $numero1";
    } elseif ($numero2 > $numero1){
    return "O maior número é $numero2";
    }
});


Route::get('verificar/divisivelPor9', function (Request $request){
    $numero = $request->input('numero');
    if($numero % 9 == 0 ){
    return "$numero é divisível por 9 :)";
    } else {
    return "$numero não é divisível por 9 :(";
    }
});


Route::get('verificar/multiploDe7', function (Request $request){
    $numero = $request->input('numero');
    if($numero % 7 === 0){
    return "$numero é múltiplo de 7 :)";
    } else {
    return "$numero não é múltiplo de 7 :(";
    }
});


Route::get('verificar/idade', function (Request $request){
    $idade = $request->input('idade');
    if($idade < 12){
    return "Você é uma criança";
    }
});


Route::get('maior/menor/igual', function (Request $request){
    $numero = $request->input('numero');
    if($numero > 100){
    return "$numero é maior que 100";
    } elseif ($numero < 100){
    return "$numero é menor que 100";
    } else {
    return "$numero é igual a 100";
    }
});


Route::get('verificar/divisivelPor6', function (Request $request){
    $numero = $request->input('numero');
    if($numero % 6 == 0 ){
    return "$numero é divisível por 6 :)";
    } else {
    return "$numero não é divisível por 6 :(";
    }
});


Route::get('verificar/nome', function (Request $request){
    $nome = $request->input('nome');
    if($nome = "Alice"){
    return "Olá $nome!";
    }
});


Route::get('verificar/dirigir', function (Request $request){
    $idade = $request->input('idade');
    $carteira = $request->input('carteira');
    if($idade >= 18){
    if($carteira == "sim"){
    return "Você pode dirigir!";
    }
 } else { 
    return "Você não pode dirigir";
    }
});


Route::get('verificarMenorNumero', function (Request $request){
    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');
    if($numero1 < $numero2){
    return "O menor número é $numero1";
    } elseif ($numero2 < $numero1){
    return "O menor número é $numero2";
    }
});


Route::get('verificar/idadeMaiorDe18', function (Request $request){
    $nome = $request->input('nome');
    $idade = $request->input('idade');
    if($idade >= 18){
    return "Você é maior de idade, $nome!";
    }
});


Route::get('divisaoDoPrimeiroPeloSegundo', function (Request $request){
    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');
    if($numero1 == 0){
    return "não é possível efetuar a divisão pois o primeiro número é zero";
    } else if ($numero2 == 0){
    return "não é possível efetuar a divisão pois o segundo número é zero";
    } else {
    $resultado = $numero1 / $numero2;
    return "O resultado é $resultado";
    }
});


Route::get('verificar/maiorQue100', function (Request $request){
    $primeiroNumero = $request->input('numero1');
    $segundoNumero = $request->input('numero2');
    $multiplicacao = $primeiroNumero * $segundoNumero;
    if($multiplicacao > 100){
    return "O resultado da multiplicação $multiplicacao é maior que 100";
    }
});


Route::get('verificarSoma', function (Request $request){
    $numeroUm = $request->input('numero1');
    $numeroDois = $request->input('numero2');
    $soma = $numeroUm + $numeroDois;
    if($soma % 2 == 0){
    return $multiplicar = $numeroUm * $numeroDois;
    } else {
    $dividir = $numeroUm / $numeroDois;
    return $dividir;
    }
});


Route::get('positivo/impar', function (Request $request){
    $numero = $request->input('numero');
    if($numero % 2 > 0)
    if($numero > 0){
    return "Este número é ímpar e positivo";
    }
});


Route::get('calcularMedia', function (Request $request){
    $nota1 = $request->input('nota1');
    $nota2 = $request->input('nota2');
    $nota3 = $request->input('nota3');
    $média = $nota1 + $nota2 + $nota3 / 3;
    return "O aluno foi aprovado com $média na média";
});


Route::get('anoBissexto', function (Request $request){
    $ano = $request->input('ano');
    if($ano % 4 == 0){
    return "$ano é um ano bissexto";
    }else {
    return "$ano não é um ano bissexto";
    }
});


Route::get('descontoDe15', function (Request $request){
    $preco = $request->input('preco');
    
});