<?php 
	include '../../config/config.php';
	$carro = filter_input(INPUT_POST, 'carro', FILTER_SANITIZE_STRING );
	$bol = filter_input(INPUT_POST,'bol',FILTER_SANITIZE_STRING);
	$value = filter_input(INPUT_POST,'value',FILTER_SANITIZE_STRING);
	echo "ok";
	mysqli_query($con,"INSERT INTO modopagamento(codCarrinho, boleto,value) VALUES ('$carro','$bol','$value') ");
	
	
	
?>