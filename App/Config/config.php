<?php

	//Conexão com o servidor local.
	//Verificar usuário e senha para acesso ao servidor.
	//Utilização do Schema: "b2b_db"
	
	$user = "root";
	$password = "";
	$database = "b2b_db";

	$db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
	

?>