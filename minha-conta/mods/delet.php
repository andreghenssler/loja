<?php
	include '../../config/config.php';
	$conexao_alter = $_REQUEST['conexao_alter'];

	$consul_cidade = "DELETE FROM `endereco` WHERE `idEndereco` = '$conexao_alter'";
	$consul_cidade_con = mysqli_query($con,$consul_cidade);

	
	echo(json_encode($conexao_alter));
?>