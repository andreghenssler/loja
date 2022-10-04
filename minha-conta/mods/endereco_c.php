<?php
	include '../../config/config.php';
	
	$numero_casa = filter_input(INPUT_POST, 'numero_casa', FILTER_SANITIZE_STRING );
	$conexao2 = filter_input(INPUT_POST, 'conexao2', FILTER_SANITIZE_STRING );
	$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING );
	$cidades = filter_input(INPUT_POST, 'cidades', FILTER_SANITIZE_STRING );
	$endereco_meus = filter_input(INPUT_POST, 'endereco_meus', FILTER_SANITIZE_STRING );
	$complemento_endereco = filter_input(INPUT_POST, 'complemento_endereco', FILTER_SANITIZE_STRING );
	$bairro_endereco = filter_input(INPUT_POST, 'bairro_endereco', FILTER_SANITIZE_STRING );
	$customRadioInline1 = filter_input(INPUT_POST, 'customRadioInline1', FILTER_SANITIZE_STRING );
	/*endereco_meus*/


	$query_meuEndereco = "INSERT INTO endereco(codUsuario , rua , numero , complemento , bairro , principal , codCidade) VALUES ('$conexao2 ','$endereco_meus','$numero_casa','$complemento_endereco','$bairro_endereco','$customRadioInline1','$cidades')";
	mysqli_query($con,$query_meuEndereco);

	if (mysqli_insert_id($con)) {
		echo true;
	}else{
		echo false;
	}

	/*
		
		;

	*/
?>