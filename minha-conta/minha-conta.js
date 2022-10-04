$(function(){
    $('#estado').change(function(){
		if( $(this).val() ) {
            $('#cidades').hide();
            $('.carregando_cidades').show();
            $.getJSON('mods/cidade.php?search=',{id_categoria: $(this).val(), ajax: 'true'}, function(j){
              	var options = '<option value="">Escolha a sua Cidade</option>';  
              	for (var i = 0; i < j.length; i++) {
                	options += '<option value="' + j[i].id + '">' + j[i].nome_sub_categoria + '</option>';
              	} 
              	$('#cidades').html(options).show();
            	$('.carregando_cidades').hide();
            });
        } else {
        	$('#id_sub_categoria').html('<option value="">– Estado invalido –</option>');
		}
	});
});
pagina_endereco = 1;
quantidade_endereco = 1009;
function atualizar_lista_endereco( pagina_endereco , quantidade_endereco ){
	id_conexao = $("#id_conexao").val();
	var dadow = {
		pagina : pagina_endereco,
		quantidade : quantidade_endereco,
		id_conexao: id_conexao
	}
	$.post('mods/atualizar_enderecos.php', dadow , function(retorna){
		//Subtitui o valor no seletor id="conteudo"
		$(".listagem_endereco_minha_conta").html(retorna);
		$("#msg").html('');
	});
}

$(document).ready(function() {
	atualizar_lista_endereco( pagina_endereco , quantidade_endereco );
	$("#listagem_endereco_minha_conta").click(function(){
		$("#msg").html('');
		atualizar_lista_endereco( pagina_endereco , quantidade_endereco );
	})
	$('#c_endereco_meus').on('submit',function(e){
		atualizar_lista_endereco( pagina_endereco , quantidade_endereco );
		e.preventDefault();
	  	/* Enviar para o banco mods/endereco_c.php */
		var dados = $("#c_endereco_meus").serialize();
	  	$.post("mods/endereco_c.php",dados,function(retorna){
		    if (retorna) {
		    	$("#msg").html('<div class="alert alert-success" alert="role">Novo Endereco Cadastrado</div>'); 
		      	$('#c_endereco_meus')[0].reset();
		      	$('body').removeClass('modal-open');
		      	$("#cadastroEndereco_c").removeClass('fade show');
		      	/*$("#cadastroEndereco_c").hide();*/
		      	atualizar_lista_endereco( pagina_endereco , quantidade_endereco );
		    }else{
		    	alert("Campos em Branco");
		    }
	    
	  	});
	  	atualizar_lista_endereco( pagina_endereco , quantidade_endereco );
	});
	
	$(".listagem_endereco_minha_conta").on('click','a', function(eve){
		eve.preventDefault();
		var conexao_alter = $("#conexao_alter").val();
		console.log(conexao_alter);
		$.getJSON('mods/delet.php?search=',{conexao_alter: conexao_alter, ajax: 'true'}, function(j){
          	 $('.animation').hide()
        	atualizar_lista_endereco( pagina_endereco , quantidade_endereco );
        });
		$(this).closest('.list-enderecos').remove();
	});
})