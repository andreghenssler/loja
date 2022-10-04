<?php
	include_once '../config/configuracao.php'; # Vai facilitar na hora de escrever as tags css, js , entre outras
	unset($_SESSION['idUsuario'], $_SESSION['user'], $_SESSION['UserSobrenome'], $_SESSION['email'], $_SESSION['password_user'], $_SESSION['celular'], $_SESSION['cpf'], $_SESSION['telefone'], $_SESSION['nascimento']);
	header('Location: '.$url_caminho.'/index.php?logout');
?>