<?php 
$diaDaSemana = date("w");

switch ($dia) {
	case 0:
		echo "domingo";
		break;
	
	case 1:
		echo "segunda";
		break;
	case 2:
		echo "terça";
		break;
	case 3:
		echo "quarta";
		break;
	case 4:
		echo "quinta";
		break;
	case 5:
		echo "sexta";
		break;
	case 6:
		echo "sábado";
		break;
	default 
		echo "Data inválida";
		break;

}



 ?>
