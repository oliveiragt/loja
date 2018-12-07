<?php 
  include('conexao.php');
  $nome=$_POST['nome'];
  $senha=$_POST['senha'];    
  $cargo=$_POST['cargo'];
  $login=$_POST['login'];
  $query ="INSERT INTO `usuarios` (nome,senha,login,cargo) VALUES ('".$nome."','".$senha."','".$login."','".$cargo."')";
$insere=mysql_query($query);
   if($insere){
	  header('location:sucesso.php');
  }
  else{
	  header('location:falha.php');
  }
?>