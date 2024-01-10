<?php 
$frase = "A repeticao é a mae da retencao";
$palavra = "mae";
$q = strpos($frase, $palavra); // retorna a posição onde a palavra se encontra

var_dump($q);

$texto = substr($frase, 0, $q);
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

 ?>