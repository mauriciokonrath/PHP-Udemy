<?php 
$json = '[{"nome":"Mauricio","idade":"21"},{"nome":"Luis","idade":"28"}]';

$data = json_decode($json, true); //tru usado para array senão vira objeto
var_dump($data)
 ?>