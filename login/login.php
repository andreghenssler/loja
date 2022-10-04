<?php
	
	include_once '../config/configuracao.php'; # Vai facilitar na hora de escrever as tags css, js , entre outras

	$url = $_POST['url'];
	$log = $_POST['log'];
	$nome_user = $_POST['nome_user'];
	$password_user = md5($_POST['password_user']);

	$consulta_log = mysqli_query($con, "SELECT * FROM `usuario` WHERE email ='$nome_user' and senha = '$password_user' LIMIT 1 ");
	$numero_log = mysqli_num_rows($consulta_log);
	while ($dados_usuarios = mysqli_fetch_assoc($consulta_log)) {
		$_SESSION['idUsuario'] = $dados_usuarios['idUsuario'];
		$_SESSION['user'] = $dados_usuarios['nomePessoa']." ".$dados_usuarios['sobrenome'];
		$_SESSION['UserSobrenome'] = $dados_usuarios['sobrenome'];
		$_SESSION['email'] = $dados_usuarios['email'];
		$_SESSION['password_user'] = $dados_usuarios['senha'];
		$_SESSION['celular'] = $dados_usuarios['celular'];
		$_SESSION['cpf'] = $dados_usuarios['cpf'];
		$_SESSION['telefone'] = $dados_usuarios['telefone'];
		$_SESSION['nascimento'] = $dados_usuarios['nascimento'];
	}
	if ($numero_log>'0') {
		header('Location: '.$url);
	}else{
		echo "false";
		$_SESSION['erro_login'] = "<div class='alert alert-danger' role='alert'> Nome de usuário ou senha errados. Por favor tente outra vez. </div>";
		header("Location: index.php?url=".$url);
	}

?>
