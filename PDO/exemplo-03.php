<?php 

$conn = new PDO("myswl:host=localhost;dbname=dbphp7", "MAURICIOKONRATH\mauri", "");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "Luis";
$password = "12345678";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD	", $password);

$stmt->execute();

echo "Inserido OK!";
 ?>