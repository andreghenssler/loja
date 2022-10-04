<?php 
	include '../../config/config.php';
	$numero_cartao = filter_input(INPUT_POST, 'numero_cartao', FILTER_SANITIZE_STRING );
	$nomeCompleto_cartao = filter_input(INPUT_POST, 'nomeCompleto_cartao', FILTER_SANITIZE_STRING );
	$startDate = filter_input(INPUT_POST, 'startDate', FILTER_SANITIZE_STRING );
	$numer_parcelas = filter_input(INPUT_POST, 'numer_parcelas', FILTER_SANITIZE_STRING );
	$codigoSeguranca = filter_input(INPUT_POST, 'codigoSeguranca', FILTER_SANITIZE_STRING );
	$carro = filter_input(INPUT_POST, 'carro', FILTER_SANITIZE_STRING );
	$ano_cartao = filter_input(INPUT_POST,'ano_cartao',FILTER_SANITIZE_STRING);
	$value = filter_input(INPUT_POST,'value',FILTER_SANITIZE_STRING);
	$validade = $startDate."/".$ano_cartao;
	if ($numero_cartao == "" && $nomeCompleto_cartao == "" && $codigoSeguranca == "") {
		
	}else{
		mysqli_query($con,"INSERT INTO modopagamento (codCarrinho,nomeImpresso, numeroCartao,cvv,validadeCartao,numeroParcelas,value) VALUES ( '$carro' , '$nomeCompleto_cartao', '$numero_cartao', '$codigoSeguranca', '$validade', '$numer_parcelas','$value')");

		if (mysqli_insert_id($con)) {
			echo true;
		}else{
			echo false;
		}
	}
	
?>