$(document).ready(function(){
	
	$('#input_cpf').inputmask({
    	mask: "999.999.999-99"
	});
	
	$('#input_cnpj').inputmask({
    	mask: "99.999.999/9999-99"
	});
	
	$('#input_telefone').inputmask({
    	mask: "(99) 9999-9999"
	});
	
	$('#input_celular').inputmask({
    	mask: "(99) 99999-9999"
	});
});