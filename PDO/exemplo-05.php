<?php 

$conn = new PDO("myswl:host=localhost;dbname=dbphp7", "MAURICIOKONRATH\mauri", "");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 1;


$stmt->bindParam(":ID	", $id);
$stmt->execute();

echo "Delete OK!";
 ?>