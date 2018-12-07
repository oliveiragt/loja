<?php session_start();
setlocale (LC_ALL, 'pt-BR');
	include('conexao.php');
	$pesquisa = $_POST['palavra'];
	$busca = "SELECT * FROM produtos WHERE nrreferencia LIKE '%$pesquisa%' LIMIT 4";
	$resultado_busca = mysql_query($busca);
	if(mysql_num_rows($resultado_busca) <= 0){
		echo "Nenhum produto com o número de referência ".$pesquisa." encontrado...";
	}else{ 
	        echo "<div id='roll1'><table border='1px' bordercolor='black' class='res'>";
			echo "<tr><td colspan='5'><h4>Informações do Produto</h4></td></tr>";
			echo "<tr><td>Marca</td><td>Nome</td><td>Valor Unitário</td><td>Ação</td></tr>";
		while($rows = mysql_fetch_assoc($resultado_busca)){
			$id=$rows['idprod'];
			echo "<tr><td><h4>".$rows['marcaprod']."</h4></td>";
			echo "<td><h4>".$rows['nomeprod']."</h4></td>";
			echo "<td><h4>R$".number_format($rows['preco'], 2, ',', ',')."</h4></td>";
			?><td><form method="post" action="retira.php"><input type="text" id="qtd" name="qtd" placeholder="Quantidade a ser retirada"><input type="text" id="hide" value="<?php echo $id;?>" name="prod"><?php
	        ?>
	<input id='botao' type='submit' value='Retirar'>
	<tr><td colspan='2'>Número de Referência</td><td colspan='2'><h4><?php echo $rows['nrreferencia']; ?></h4></td></tr>
	</form><?php	
	}}
		echo "</div>";
	
?></tr></table>
<style>
#hide{
	display:none;
}

.res{
	color:black;
	width:100%;
	position:absolute;
	top:0%;
	left:0%;
	color:black;
}
table.res {border-collapse: collapse; }

table.res tr td {border:1px solid black; }
td{
	text-align:center;
	font-weight:bold;
}
@media screen and (max-device-width: 767px) {
.res{
	position:absolute;
	top:0%;
	left:0%;
	background-color:white;
	width:100%;
}
#qtd{
	font-size:50;
	width:100%;
}
#botao{
  font-size:50;
}
}


</style>