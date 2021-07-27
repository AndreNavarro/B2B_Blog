<?php
  require_once "../../Config/config.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>B2B Blog</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../Public/assets/styles/header.css">
	<link rel="stylesheet" type="text/css" href="../../Public/assets/styles/home.css">
	<link rel="stylesheet" type="text/css" href="../../Public/assets/styles/login.css">
	<link rel="icon" type="image/png" href="../../Public/assets/images/logo.png">
</head>
<body>
	
	<header>
		<img src="../../Public/assets/images/logo.png" style="width: 50px; margin: 25px">
	</header>

	<section>

    <fieldset id="acesso"><h2>Já possui acesso?</h2>
			<form class="acesso" method="post" action="../../Controller/controller.php?login">
        <p>
					<input type="text" name="username" placeholder="Digite seu login para acesso">
				</p>
				<p>
					<input type="password" name="senha" placeholder="Digite sua senha">
				</p>
				<p>
				<input class="button" type="submit" value="Entrar">
				
				<button class="button" type="" href="../../index.php" value="Cancelar">Cancelar</button>
				</p>
			</form>
		</fieldset>

		<fieldset id="cadastro"><h2>Fazer cadastro</h2>
			<form class="cadastro" method="post" action="../../Controller/controller.php?insert">
				<p>
					<input type="text" name="nome" placeholder="Nome completo">
				</p>
        <p>
					<input type="text" name="username" placeholder="Login para acesso">
				</p>
				<p>
					<input type="email" name="email" placeholder="E-mail">
				</p>
				
				<p>
					<input type="password" name="senha" placeholder="Digite uma senha">
				</p>
				<p>
					<input class="button" type="submit" value="Criar">
				
				<button class="button" type="" href="../../index.php" value="Cancelar">Cancelar</button>
				</p>
			</form>
		</fieldset>

	</section>
<body>
</html>