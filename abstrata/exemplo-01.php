<?php 

interface Veiculo {

	public function acelerar($velocidade);
	public function freiar($velocidade);
	public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo {

	public function acelerar($velocidade){
		echo "o veiculo acelerou até ". $velocidade. " km/h";
	}

	public function freiar($velocidade){
		echo "o veiculo freou até ". $velocidade. " km/h";
	}

	public function trocarMarcha($marcha){
		echo "o veiculo engatou a marcha". $marcha;
	}
}

class DelRey extends Automovel{
	public function empurrar(){

	}
}

$carro = new DelRey();
$carro->acelerar(200); 


 ?>