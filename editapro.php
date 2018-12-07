<?php session_start();
include('conexao.php');
$id=$_POST['id'];
$nome=$_POST['nomeprod'];
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$nr=$_POST['nrref'];
$preco=$_POST['precounitario'];
$img=$_POST['img'];
$apaga=mysql_query("UPDATE produtos SET nomeprod='$nome',marcaprod='$marca',modeloprod='$modelo',nrreferencia='$nr',preco='$preco', linkimg='$img' WHERE idprod='$id'");
if($apaga){
	header('location:sucesso.php');
}
else{
	header('location:falha.php');
}

?>