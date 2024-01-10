<?php 

$pessoas = array();

array_push($pessoas, array('nome' => 'Mauricio',
						   'idade' => '21'
));

array_push($pessoas, array('nome' => 'Luis',
						   'idade' => '28'
));

echo json_encode($pessoas);
 ?> 