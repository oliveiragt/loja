<?php session_start();
setlocale (LC_ALL, 'pt-BR');
	include('conexao.php');
	$pesquisa = $_POST['palavra'];
	$busca = "SELECT * FROM produtos WHERE nomeprod LIKE '%$pesquisa%' LIMIT 5";
	$resultado_busca = mysql_query($busca);
	if(mysql_num_rows($resultado_busca) <= 0){
		echo "Nenhum produto com o nome ".$pesquisa." encontrado...";
	}else{ 
	        echo "<div id='roll'><table border='1px' bordercolor='black' class='res'>";
			echo "<tr><td colspan='5'><h4>Informações do Produto</h4></td></tr>";
		while($rows = mysql_fetch_assoc($resultado_busca)){
			$id=$rows['idprod'];
			$img=$rows['linkimg'];
			echo "<tr><td colspan='2'>Imagem do Produto</td></tr><tr><td colspan='2'><h4><img width='400' height='300'src='$img'></h4></td></tr>";
			echo "<tr><td>Número de referência</td><td><h4>".$rows['nrreferencia']."</h4></td></tr>";
			echo "<tr><td>Nome do produto</td><td><h4>".$rows['nomeprod']."</h4></td></tr>";
			echo "<tr><td>Marca</td><td><h4>".$rows['marcaprod']."</h4></td></tr>";
			echo "<tr><td>Valor Unitário</td><td><h4>R$".number_format($rows['preco'], 2, ',', ',')."</h4></td></tr>";
		 }echo "</table></div>";}?>
	

<style>
#hide{
	display:none;
}
.res{
	z-index:1;
	position:absolute;
	top:0%;
	left:0%;
	color:black;
	width:100%;
	height:50px;
	color:black;
}
table.res {border-collapse: collapse;}

table.res tr td {border:1px solid black;}
td{
	text-align:center;
	font-weight:bold;
}
/* versão para celular */
@media screen and (max-device-width: 767px) {
	
.res{
	color:black;
	width:100%;
	height:65%;
	color:black;
	border:solid 1px black;
	background-color:white;
}
table.res {border-collapse: collapse;}

table.res tr td {border:1px solid black;}
td{
	text-align:center;
	font-weight:bold;
}
}
</style>