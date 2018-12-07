$(function(){
	//Pesquisar os cursos sem refresh na página
	$("#pesquisa").keyup(function(){
		
		var pesquisa = $(this).val();
		
		//Verificar se há algo digitado
		if(pesquisa != ''){
			var dados = {
				palavra : pesquisa
			}		
			$.post('busca2.php', dados, function(retorna){
				//Mostra dentro da ul os resultado obtidos 
				$(".resultadonome").html(retorna);
			});
		}else{
			$(".resultadonome").html('');
		}		
	});
});

