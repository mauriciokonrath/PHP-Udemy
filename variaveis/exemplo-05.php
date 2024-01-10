<?php
$nome = "Luis";

function teste() {
	global $nome;
	echo $nome;
} 

function teste2() {
	$nome = "Mauricio"; //essa variavel nao afeta a outra
	echo $nome." no teste2";
}
 
teste();

teste2();


 ?>
