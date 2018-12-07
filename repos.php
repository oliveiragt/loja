<?php session_start();
date_default_timezone_set('America/Sao_Paulo');
include('conexao.php');
$qtdinc=$_POST['qtdrepor'];
$id=$_POST['id'];
$hora=date('d/m/Y H:i:s');
$busca=mysql_query("SELECT * FROM produtos WHERE idprod='$id'");
while($resultado=mysql_fetch_assoc($busca)){
	$quantidade=$resultado['quantidade'];
	$nomeprod=$resultado['nomeprod'];
	$ref=$resultado['nrreferencia'];
	$conta=$quantidade+$qtdinc;
	$usuario=$_SESSION['usuario'];
$adm=mysql_query("INSERT INTO movadm (tipomov,feitopor,quantidade,dia,nomeprod,nr,qtdatual) VALUES ('adicionou ao estoque','$usuario','$qtdinc','$hora','$nomeprod','$ref','$conta') ");
$atualiza=mysql_query("UPDATE produtos SET quantidade='$conta' WHERE idprod='$id'");}
if($atualiza){
	header('location:sucesso.php');
}
else{
	header('location:falha.php');
}

?>