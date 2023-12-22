<?php 


function soma(int ...$valores):string{ // tipo de retorno vai ser em string
	return array_sum($valores);
}

echo var_dump(soma(2, 2));
echo "<br>";
echo soma (25, 35);
echo "<br>";
echo soma (1.5, 3.5);
 ?>