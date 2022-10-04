
$(document).ready(function(){
	console.log('%cATENÇÃO!','color:red;font-weight:bold;font-size:50px;-webkit-text-stroke:2px black;text-stroke:2px black');
	console.log('Este é um recurso do navegador voltado para desenvolvedores. Não utilize caso não compreenda seu funcionamento.');
	console.log('%cNunca copie e cole conteúdo de outros locais aqui.Se alguém disse para você copiar e colar algo aqui para ativar um recurso do sistema ou qualquer outra ação relacionada, isso é uma fraude e você poderá ser penalizado por isso.', 'font-weight:bold;font-size:15px');
	/*$('.dropdown-toggle').dropdown();*/
	/*$('[data-toggle="popover"]').popover();*/
	$("#clik").click(function(){
		alert("oi");
	});
	$('.alter-email-1').click(function(){
	    $('#alter_email').attr('disabled',''); ;
	});

	$("#submit-search").click(function(){
		var url = window.location.protocol+"//"+window.location.hostname+""+window.location.pathname;
		var pesquiar_input = "buscar/index.php?produto="+$("#pesquiar_input").val();
		var context = url+pesquiar_input;
		window.location.href = context;
		console.log("pesquisar 📎"+context);
	});
});