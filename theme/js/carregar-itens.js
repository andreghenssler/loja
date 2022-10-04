
pagina_endereco = 1;
quantidade_produtos_1 = 4;
function carregar_elementos_destaques_principal( pagina_endereco , quantidade_produtos_1){
	var dados = {
		pagina_endereco : pagina_endereco,
		quantidade_produtos_1 : quantidade_produtos_1
	}
	$.post('/loja/functions/carrear_itens_destaque_1.php', dados , function(retorna){
		//Subtitui o valor no seletor id="conteudo"
		//$(".destaques-principal").html(retorna);
		$("#msg").html('');
	});
}

function favoritar (){
		cod_usuario = $("#cod_usuario").val();
		id_produto: $("#id_produto").val()
		if (cod_usuario == "0") {
			window.location.href = "../login/";
		} else {
			cod_usuario = cod_usuario;
		}
		var dados = {
			cod_usuario: cod_usuario ,
			id_produto: id_produto
		}
		$.post('/loja/functions/favoritar.php', dados , function(retorna){
			
		})
}

$(document).ready(function(){
	$('.favoritar-colorido').click(function(){
		
		$('.favoritar').addClass('favoritar-contorno');
		$('.favoritar').html('<span class="icon fa fa-heart-o"></span><a >Favoritar</a>');
		$('.favoritar').removeClass('favoritar-colorido');
	});
	$('.favoritar-contorno').click(function(){	
		
		$('.favoritar').addClass('favoritar-colorido');
		$('.favoritar').html('<span class="icon fa fa-heart"></span><a >Favoritar</a>');
		$('.favoritar').removeClass('favoritar-contorno');
	});
	soma = 0;
	$('#submitrai').click(function(){
		soma=parseFloat($("#quantidade-5").val())-1;
		console.log(soma)
		$("#quantidade-5").val(soma);
		if (soma == 0) {
			$("#quantidade-5").val("1");
		}
	});
	$('#adiciona').click(function(){
		soma=1+parseFloat($("#quantidade-5").val());
		if (soma > 10) {
			$("#quantidade-5").val("10");
		}
		console.log(soma)
		$("#quantidade-5").val(soma);
	});


});