<?php

	// Para atualizar no GIT:
	//      git add --all
	//      git commit -m "?????"
	//      git push origin master

	// (1) Chama PHP de configurações
	require_once("config.php");

	/*
	// EXEMPLO 1 - Mostra usuario escolhido no parâmetro
	$root = new Usuario();
	$root->loadById(3);
	echo $root;
	*/

	/*
	// EXEMPLO 2 - Mostra uma lista de usuários
	$lista = Usuario::getList(); 
	echo json_encode($lista);
	*/

	/*
	// EXEMPLO 3 - Procura usuários com parte do nome definido no parâmetro
	$search = Usuario::search("Mess"); 
	echo json_encode($search);
	*/

	/*
	// EXEMPLO 4 - SÓ MOSTRA SE LOGIN E SENHA SÃO VALIDOS
	$usuario = new Usuario(); 
	$usuario->login("Mauricio Messias", "12345");
	echo $usuario;
	*/

	/*
	// EXEMPLO 5 - INSERE REGISTRO
	$usuario = new usuario("aluno", "@lun0");
	$usuario->insert();
	echo $usuario;
	*/

	/*
	// EXEMPLO 6 - UPDATE REGISTRO
	$usuario = new usuario();
	$usuario->loadById(13);
	$usuario->update("professor", "prof001");
	echo $usuario;
	*/

	// EXEMPLO 6 - UPDATE REGISTRO
	$usuario = new usuario();
	$usuario->loadById(12);
	$usuario->delete();
	echo $usuario;

?>