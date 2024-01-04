<?php 

spl_autoload_register(funtion($class_name){

	$filename = "class".DIRECTORY_SEPARATOR.$class_name.".php";

	if(file_exists(($filename))){

		require_once($filename);
	}






}
);


 ?>