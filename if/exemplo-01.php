<?php
$QualSuaIdade = 30;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeIdoso = 65; 

if ($QualSuaIdade < $idadeCrianca){
	echo "Criança";
}
else if ($QualSuaIdade > $idadeMaior) {
	echo "Adolescente";
}
else if ($QualSuaIdade < $idadeIdoso){
	echo "Adulto";
}
else {
	echo "Idoso";
}
echo "<br>";

echo ($QualSuaIdade < $idadeMaior)?"Menor de idade":"Maior de idade"
// condição simples               então           senão
 ?>