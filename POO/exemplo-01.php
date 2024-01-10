<?php 

class Pessoa {
	public $nome; //atributo

	public function falar(){ //metodo
		return "Meu nome é ".$this->nome;

	}
}


$mauricio = new Pessoa();
$mauricio->nome = "Mauricio Konrath";
echo $mauricio->falar();

 ?>