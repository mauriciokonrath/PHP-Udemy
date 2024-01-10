<?php 

session_id('012gcp63jef1s77fd6hs6nne2f'); //id ativa no mesmo servidor
require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);


 ?>