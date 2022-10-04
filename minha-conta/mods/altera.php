<?php
	include_once '../../config/config.php';
	#$alter_email = $_POST['alter_email'];
	$alter_senha = md5("André@2021");
	$nome_user_cadastro = $_POST['nome_user_cadastro'];
	#$nascimento_cadastro = $_POST['nascimento_cadastro'];
	$celular_cadastro = $_POST['celular_cadastro'];
	$celular1_cadastro = $_POST['celular1_cadastro'];
	$conexao = $_POST['conexao'];

	$alteracao_dados = "UPDATE `usuario` SET `nomePessoa`='$nome_user_cadastro',`sobrenome`='',`senha`='$alter_senha ',`celular`='$celular_cadastro',`telefone`='$celular1_cadastro' WHERE idUsuario = '$conexao'";
	$altercao_sucedida = mysqli_query($con,$alteracao_dados);
	if ($altercao_sucedida) {
		header("Location: ../");
	}else{
		header("Location ../cadastro.php");
	}
?>