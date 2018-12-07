<?php 
 session_start();//inicia a sessão
 date_default_timezone_set('America/Sao_Paulo');//configura o fuso horário para São Paulo
 //atribuindo sessões as variáveis pra poder usar no INSERT e UPDATE
 $usu=$_SESSION['usuario'];
 $conta=$_SESSION['conta'];
 $nr=$_SESSION['nr'];
 $id=$_SESSION['idproduto'];
 $nomeprod=$_SESSION['nomep'];
 $preco=$_SESSION['preco'];
 $qtd=$_SESSION['qtd'];
 $retira=$_SESSION['retira'];
 $retirada=$_SESSION['qtdatual'];
 $data = date("d/m/Y H:i:s "); 
include("conexao.php");//abre a conexão
//insere na tabela movestoque os valores que vem das sessões, que são informações de movimento de estoque
$seleciona=mysql_query("INSERT INTO movestoque (movrea,feitopor,data,valoruni,valortotal,referencia,qtd,nomeprod,qtdatual)  
VALUES ('retirou do estoque','$usu','$data','$preco','$conta','$nr','$qtd','$nomeprod','$retira') ");
$atualiza=mysql_query("UPDATE produtos SET quantidade='$retira',qtdantiga='$retirada' where idprod='$id'");//atualiza um produto onde o ID é igual ao produto que foi modificado em outra página
if($atualiza){//se o produto for atualizado , faz uma outra verificação
if($seleciona){
 header("location:sucesso.php");//se tudo ocorrer normalmente, redireciona para a pagina de sucesso
}
else{
	header("location:falha.php");//se houver falha, encaminha pra tela de falha
}
}
else{
	echo "erro ao atualizar!";//se o produto não for atualizado, apresenta o erro
}


?>