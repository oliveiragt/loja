<?php
include('conexao.php');
$id=$_GET['id'];
$apaga=mysql_query("DELETE FROM usuarios WHERE idusuario = '$id'");
if($apaga){
	header('location:sucesso.php');
}
else{
	header('location:falha.php');
}

?>