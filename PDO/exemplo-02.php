<?php 
$connection = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS", "MAURICIOKONRATH\mauri", "");

$statement = $connection->prepare("SELECT * FROM users;");

$statement->execute();

$users = $statement->fetchAll(PDO::FETCH_ASSOC);
 ?>