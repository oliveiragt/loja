<?php session_start();
include('conexao.php');
$id=$_POST['id'];
$nome=$_POST['nome'];
$senha=$_POST['senha'];
$login=$_POST['login'];
$cargo=$_POST['cargo'];
$apaga=mysql_query("UPDATE usuarios SET nome='$nome',senha='$senha',login='$login',cargo='$cargo' WHERE idusuario='$id'");
if($apaga){
	header('location:sucesso.php');
}
else{
	header('location:falha.php');
}

?>