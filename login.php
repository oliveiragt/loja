<?php 
date_default_timezone_set('America/Sao_Paulo');
include('conexao.php');
  $login = $_POST['usuario'];
  $senha = $_POST['senha'];    
      $verifica = mysql_query("SELECT * FROM usuarios WHERE login='$login' and senha='$senha'") or die("erro ao selecionar");
	  $resultados = mysql_fetch_array($verifica);
        if (mysql_num_rows($verifica)<=0){
          header('location:falha.html');
		  }else{
			  session_start();
			  $_SESSION['cargo']=$resultados['cargo'];
			  $_SESSION['usuario']=$resultados['nome'];
		    header('location:sistema.php');
        }
?>