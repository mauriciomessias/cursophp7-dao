<?php

	// Chama PHP de configurações
	echo "***** CHAMA CONFIG.PHP *****<BR><BR>";
	require_once("config.php");

	// Instancia SQL
	echo "***** INSTANCIA SQL *****<BR><BR>";
	$sql = new Sql();

	// Seleciona usuários
	echo "***** SELECIONA USUÁRIOS *****<BR><BR>";
	$usuarios = $sql->select("Select * from tb_usuarios");

	echo "----------------------------------------------------------<br><br>";

	echo "***** MOSTRA USUÁRIOS *****<BR><BR>";
	echo json_encode($usuarios);

?>