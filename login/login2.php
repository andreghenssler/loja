<?php
	
	include_once '../config/config.php'; # Vai facilitar na hora de escrever as tags css, js , entre outras

	$nome = $_POST['input_name'];
	$sobrenome = $_POST['input_sobrename'];
	$cpf = $_POST['input_cpf'];
	$nascimento = $_POST['input_nascimento'];
	$genero = $_POST['input_genero'];
	$telefone = $_POST['input_celular'];
	$email = $_POST['input_email'];
	$senha = $_POST['input_password'];
	$url_destino = $_POST["url"];

	if (empty($nome)) {
		$_SESSION['camp_branc_nome'] = "<div class='invalid-feedback' role='alert'> Esta faltando o campo Nome </div>";
		header("Location: signup.php?url=".$url);
	}
	if (empty($sobrenome)) {
		$_SESSION['camp_branc_sobrenome'] = "<div class='invalid-feedback' role='alert'> Esta faltando o campo sobrenome </div>";
		header("Location: signup.php?url=".$url);
	}
	if (empty($cpf)) {
		$_SESSION['camp_igual_nome'] = "<div class='invalid-feedback' role='alert'> Esta faltando o campo CPF </div>";
		header("Location: signup.php?url=".$url);
	}
	if (empty($genero)) {
		$_SESSION['camp_branc_genero'] = "<div class='invalid-feedback' role='alert'> Escolha o seu tipo de gênero </div>";
		header("Location: signup.php?url=".$url);
	}
	if (empty($nascimento)) {
		$_SESSION['camp_branc_nascimento'] = "<div class='invalid-feedback' role='alert'> Esta faltando o campo Nascimento </div>";
		header("Location: signup.php?url=".$url);
	}
	if (empty($celular)) {
		$_SESSION['camp_branc_celular'] = "<div class='invalid-feedback' role='alert'> Esta faltando o campo Número de Celular </div>";
		header("Location: signup.php?url=".$url);
	}
	if (empty($email)) {
		$_SESSION['camp_igual_cpf'] = "<div class='invalid-feedback' role='alert'> Esta faltando o campo e-mail </div>";
		header("Location: signup.php?url=".$url);
	}
	if (empty($email)) {
		$_SESSION['camp_branc_senha'] = "<div class='invalid-feedback' role='alert'> Esta faltando o campo senha </div>";
		header("Location: signup.php?url=".$url);
	}


	$password = md5($senha);

	$consulta = mysqli_query($con, "SELECT * FROM `usuario` WHERE cpf ='$cpf' or email ='$email' ");
	$numero_consuta = mysqli_num_rows($consulta);
	if ($numero_consuta == '1') {
		while($consulta_rapiad = mysqli_fetch_assoc($consulta)){
			$cpf_existe = $consulta_rapiad['cpf'];
			$email_existe = $consulta_rapiad['email'];
		}

		if ($cpf_existe = $cpf ) {
			$_SESSION['camp_igual_nome'] = "<div class='invalid-feedback' role='alert'> Este CPF já esta cadastrado </div>";
			header("Location: signup.php?url=".$url);
		}


		if ($email_existe = $email ) {
			$_SESSION['camp_igual_cpf'] = "<div class='invalid-feedback' role='alert'> Este E-mail já esta cadastrado </div>";
			header("Location: signup.php?url=".$url);
		}

	}else{
		if (empty($nome) && empty($sobrenome) && empty($cpf) && empty($nascimento) && empty($genero) && empty($telefone) && empty($email) && empty($senha) ) {
				
				$_SESSION['camp_branc_nome'] = "<div class='invalid-feedback' role='alert'> Esta faltando o campo Nome </div>";

				$_SESSION['camp_branc_sobrenome'] = "<div class='invalid-feedback' role='alert'> Esta faltando o campo sobrenome </div>";

				$_SESSION['camp_igual_nome'] = "<div class='invalid-feedback' role='alert'> Esta faltando o campo CPF </div>";

				$_SESSION['camp_branc_genero'] = "<div class='invalid-feedback' role='alert'> Escolha o seu tipo de gênero </div>";

				$_SESSION['camp_branc_nascimento'] = "<div class='invalid-feedback' role='alert'> Esta faltando o campo Nascimento </div>";

				$_SESSION['camp_branc_celular'] = "<div class='invalid-feedback' role='alert'> Esta faltando o campo Número de Celular </div>";

				$_SESSION['camp_igual_cpf'] = "<div class='invalid-feedback' role='alert'> Esta faltando o campo e-mail </div>";

				$_SESSION['camp_branc_senha'] = "<div class='invalid-feedback' role='alert'> Esta faltando o campo senha </div>";
			}
			else{
				$insert_usuario = mysqli_query($con,"INSERT INTO `usuario`(`nomePessoa`, `sobrenome`, `cpf`, `email`, `senha`, `celular`, `telefone`, `codGenero`, `nascimento`) VALUES ('$nome','$sobrenome','$cpf','$email','$password','$telefone',null,'$genero','$nascimento' )");
				unset($_SESSION['camp_branc_nome'],$_SESSION['camp_branc_sobrenome'],$_SESSION['camp_igual_nome'],$_SESSION['camp_branc_genero'],$_SESSION['camp_branc_nascimento'],$_SESSION['camp_branc_celular'],$_SESSION['camp_igual_cpf'],$_SESSION['camp_branc_senha']);

				if ($insert_usuario) {
					header("Location: ".$url_caminho);
				}else{
					echo '<script type="text/javascript">alert("Não foi possivél criar o seu usuário, tente novamente\nSe o problema percentir entre em contato pelo infomais327@gmail.com");</script>';
				}
			}
	}
	


?>
