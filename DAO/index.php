<?php 

require_once("config.php");

//$sql = new Sql();
//$usuarios = sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

// carrega um usuario
	//$root= new Usuario();
	//$root->loadById(3);
	//echo ($root);

// carrega uma lista de usuarios
//$lista = Usuario::getlist();
//echo json_encode($lista);


//carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

// carrega um usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root", "!@#$");
//echo $usuario;

// criando um novo usuario
//$aluno = new Usuario("aluno", "@lun0");
//$aluno->insert();
//echo($aluno);


// alterar um usuario
//$usuario = new Usuario();
//$usuario->loadById(8);
//$usuario->update("professor", "1234321");
//echo $usuario;

//deleta um usuario
$usuario = new Usuario();
$usuario->loadById(4);
$usuario->delete();
echo $usuario;





 ?>