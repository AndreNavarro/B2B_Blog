<?php
	require_once "App/Config/config.php";
	
	$_SESSION['login'] == false
?>

<!DOCTYPE html>
<html>
<head>
	<title>B2B Blog</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="App/Public/assets/styles/header.css">
	<link rel="stylesheet" type="text/css" href="App/Public/assets/styles/home.css">
	<link rel="stylesheet" type="text/css" href="App/Public/assets/styles/postagem.css">
	
	<link rel="icon" type="image/png" href="App/Public/assets/images/logo.png">

</head>
<body>
	
	<header>
		<img src="App/Public/assets/images/logo.png" style="width: 50px; margin: 25px">

		<input type="text" name="post" placeholder="Pesquisar Postagem">
		<button type="button"><a href="App/View/Login/login.php">Login</a></button>
		
	</header>

	<section>
		
		<h1 class="titulo-pagina">B2B Blog</h1>

		<?php 

		//Mostrar POSTAGENS realizadas por todos os usuários
		
			
			
			foreach($db->query("SELECT username, titulo, texto FROM usuario INNER JOIN postagem ON usuario.idusuario = postagem.usuario_idusuario") as $row) {
				echo "<ol>";
					echo "<li><p class='autor'>" . $row['username'] . "</p></li>";
					echo "<li><p class='titulo-post'>" . $row['titulo'] . "</p></li>";
					echo "<li><p class='texto'>" . $row['texto'] . "</p></li>";
				echo "</ol>";
			}

			

		?>
	
	</section>
</body>
</html>
