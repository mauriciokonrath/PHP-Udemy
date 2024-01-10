
<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Mauricio Konrath");
$cad->setEmail("mauricio@gmail.com");
$cad->setSenha("123456");


$cad->registrarVenda();
 ?>