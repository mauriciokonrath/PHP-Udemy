<?php
/* 
	comentario assim
*/


$anoNascimento = 2001;
$nome1 = "Luis";
$sobrenome = "Kruger";
$nomeCompleto = $nome1 . " " . $sobrenome; //aspas com espaço para concatenare com o espaço
echo $nomeCompleto;
echo "<br/>";

echo $nome1;
echo "<br/>"; //quebra de linha
//unset($nome1); //limpa variavel (tira da memória)

if (isset($nome1)){ //se tiver essa variavel
	echo $nome1;
}


?>