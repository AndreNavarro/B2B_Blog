<?php
  include "../Config/config.php";

  //Método INSERT para inserção de novos usuários no Banco de Dados
  
  if(isset($_GET['insert'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $senha = $_POST['senha'];
  
    if(empty($nome) || empty($email) || empty($username) || empty($senha)){
      echo "<script>alert('Preencha todos os campos!');history.back();</script>";
      
    }
    else{
            
      foreach($db->query("SELECT * FROM usuario WHERE username='$username'") as $row){
        echo $username;
      }
      
      if($sql>=1){
        echo "<script>alert('Usuário já cadastrado!');history.back();</script>";
      }
      else{
        if($db->query("INSERT INTO usuario(nome,email,username,senha,tipouser) VALUES('$nome','$email','$username','$senha', 0)")){
          echo "<script>alert('Usuário cadastrado com sucesso!')</script>";
          header("Refresh:1; ../../index.php"); 
        } else {
          echo 'falha no cadastro';
        }
      }
    }
  }


  //Método LOGIN para fazer a validação de login/senha e acesso à página de perfil

  if(isset($_GET['login'])){
    $username = $_POST['username'];
	  $senha = $_POST['senha'];

    if(empty($_POST["username"]) || empty($_POST["senha"])){
        echo "<script>alert('Usuarios Ou Senha Incorretos!');
        top.location.href='../View/Login/login.php';
        </script>";
    }  
    else{  
      
      foreach($db->query("SELECT username, senha, tipouser FROM usuario WHERE username='$username' and senha='$senha'") as $row){
        session_start();
        
        if($row['tipouser'] == 0){
          $_SESSION['username'] = $username;
          $_SESSION['senha'] = $senha;
          header('Location: ../View/Profile/profile-user.php');
        }
        elseif($row['tipouser'] == 1){
          $_SESSION['username'] = $username;
          $_SESSION['senha'] = $senha;
          header('Location: ../View/Profile/profile-admin.php');
        }
        
        

      }
      
      echo "<script>alert('Login inválido, faça seu cadastro!');
        top.location.href='../View/Login/login.php';
        </script>";
              
    }
  }

  if(isset($_GET['sair'])){
    session_start();
    session_destroy();
    header("location:../../../index.php");
  }

?>