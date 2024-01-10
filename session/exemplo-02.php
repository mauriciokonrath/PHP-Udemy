<?php 

require_once("config.php");

session_unset($_SESSION['nome']); //apaga todas as variasveis de sessao

echo $_SESSION['nome'];

//session_destroy(); //limpa e remove o usuário


 ?>