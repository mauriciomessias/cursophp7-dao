<?php

	// Para atualizar no GIT:
	//      git add --all
	//      git commit -m "?????"
	//      git push origin master

	// (1) Chama PHP de configurações
	require_once("config.php");

	// Instancia Usuario
	$root = new Usuario();

	// Mostra usuario
	$root->loadById(3);
	echo $root;

?>