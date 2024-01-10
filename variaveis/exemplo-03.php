<?php
// tipos basicos
$nome = "Hcode";
$site = 'www.hcode.com.br';
$ano = 1990;
$salario = 5500.00;
$bloqueado = false;

// tipos compostos
$frutas = array("abacaxi", "laranja", "manga", "uva");
//echo $frutas[2]; //imprime manga
$nascimento = new DateTime(); //objeto 
//var_dump($nascimento);

//tipos especiais
$arquivo = fopen("exemplo-03.php", "r"); //file open (abre um arquivo)
//var_dump($arquivo);

$nulo = NULL; //ausencia de valor
$vazio = ""; //ja foi iniciado porem ainda nao existe


?>