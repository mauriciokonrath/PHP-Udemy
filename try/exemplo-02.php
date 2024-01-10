<?php 

function trataNome($name){

	if(!$name){
		throw new Exception("Nenhum nome informado.", 1);
		
	}
	echo ucfirst($name)."<br>";

}

try {
	trataNome("Mauricio");
	trataNome("");
	
} catch (Exception $e) {
	echo $e->getMessage();
	
} finally {
	echo " Executou o bloco Try!";
}


 ?>