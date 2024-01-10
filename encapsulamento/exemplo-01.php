<?php 

class Pessoa {
	
	public $nome = "Mauricio";
	protected $idade = 21;
	private $senha = "123456";	

	public function verDados(){ //metodo esta publico
		echo $this->nome."<br/>";
		echo $this->idade."<br/>";
		echo $this->senha."<br/>";
	}
}

$objeto = new Pessoa();

//echo $objeto->nome."<br/>";
//echo $objeto->idade."<br/>";
//echo $objeto->senha."<br/>";
$objeto->verDados();

 ?>