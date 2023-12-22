<?php 

$conn = new PDO("myswl:host=localhost;dbname=dbphp7", "MAURICIOKONRATH\mauri", "");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "Mauricio";
$password = "1234";
$id = 2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD	", $password);
$stmt->bindParam(":ID	", $id);

$stmt->execute();

echo "Dados alterados!";
 ?>