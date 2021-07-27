<?php

  require_once "../../Config/config.php";
  include "../../Controller/controler.php";

  session_start();  
 if(isset($_SESSION["username"]))  
 {  
      
      $logado = $_SESSION["username"];
 }
 
?>

<!DOCTYPE html>
<html>
<head>
	<title>B2B Blog</title>
	<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../../Public/assets/styles/header.css">
	<link rel="stylesheet" type="text/css" href="../../Public/assets/styles/home.css">
	<link rel="stylesheet" type="text/css" href="../../Public/assets/styles/login.css">
  <link rel="stylesheet" type="text/css" href="../../Public/assets/styles/profile-admin.css">
	<link rel="icon" type="image/png" href="../../Public/assets/images/logo.png">
</head>
<body>
	
	<header>
		<img src="../../Public/assets/images/logo.png" style="width: 50px; margin: 25px">
	</header>

	<section>

    <fieldset id="toggle-menu"><?php echo '<h2>Olá, '.$_SESSION["username"].'</h2>' ?>
    
      <button class="button" type="" href="" value=""action="../../Controller/controller.php?new_post">Fazer postagem</button>
      <button class="button" type="" href="" value="">Minhas postagens</button>
      <button class="button" type="" href="" value="">Meus dados</button>
      <button class="button" type="" href="" value=""><a href="../../../index.php">Sair</a></button>
  
		</fieldset>

  </section>

<body>
</html>