<?php
$nome = (int)$_GET['a']; //variaveis super globais
//var_dump($nome);

//pega ip do usuario
//$ip = $_SERVER['REMOTE_ADDR'];
$ip = $_SERVER['SCRIPT_NAME'];
echo $ip;

?>