<?php

	// Faz autoload dos PHPs
	spl_autoload_register(function($clas_name)
	{
		echo "---------- autoload ...... ".$clas_name.".php<br><br>";
		$filename = "class".DIRECTORY_SEPARATOR.$clas_name.".php";
		if (file_exists(($filename)))
		{
			require_once($filename);
		}
	}); 

?>