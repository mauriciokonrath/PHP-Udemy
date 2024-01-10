
<?php 

spl_autoload_functio(function($nameClass){

	$dirClass = "class";
	$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";

	if (file_exists($filename)){
		require_once($filename);

	}
});


 ?>