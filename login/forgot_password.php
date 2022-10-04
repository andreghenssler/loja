<!DOCTYPE html>
<html lang="pt_br">
	<head>
		<?php include_once '../config/configuracao.php'; # Vai facilitar na hora de escrever as tags css, js , entre outras 
			if (isset($_SESSION['user'])) {
				header("Location: my");
			}
			if (isset($_GET['url'])) {
				$url = $_GET['url'];
			}
		?>
		
		<title>Recuperar Senha <?php echo  $_SESSION['titulo']; ?></title>
		<script type="text/javascript" src="<?php echo $url ?>/theme/js/login.js"></script>
		<script src="https://rawgit.com/RobinHerbots/Inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
	</head>
	<body>
		
		<?php
			#include_once '../config/menu-fixed.php';
			#include_once 'config/menu-header.php';
		?>
		<nav id="header" class="navbar navbar-expand-md navbar-dark fixed-top">
			<div id="menu-horizontal-fixed" class="container navbar-navs">
				<div id="menu-lateral" ></div>
				<div class="nav-left" >
					<a href="<?php echo $url_host ?>"><img class="img-logo" src="<?php echo $url_host ?>/theme/img/logos/logo2.png" title="<?php echo  $_SESSION['titulo']; ?>"></a>
				</div>
				<div class="nav-fill" >
					<div class="input-group mb-3">
						
					</div>
				</div>
				<div class="nav-rigth" >
					<div id="login" class="dropdown">
						
					</div>
					<div id="carrinho">
						<!-- Recuperação de Usuário -->				
					</div>
				</div>
			</div>
		</nav>

		<div id="page-login" class="container-fluid">
			<div class="justify-content-center">
				<div id="login">
					<div class="card">
						<div class="card-header">
							<h2 class="card-title text-center">Recuperar Senha</h2>
							<p class="card-subtitle">Insira o endereço de e-mail e CPF associado à sua conta <?php echo $_SESSION['titulo']; ?></p>
						</div>
						<div class="card-body">
							<form method="POST" class="mform" id="login-user" autocomplete="off" action="forgot_senha.php" accept-charset="utf-8">
								<input type="hidden" name="url" value="<?php echo $url ?>/12">
								<input type="hidden" name="log" value="<?php echo rand(0,999999); ?>">
								<div class="loginerrors mt-3">
									<?php
										if (isset($_SESSION['erro_login'])) {echo $_SESSION['erro_login'];unset($_SESSION['erro_login'] );
										}
									?>
								</div>
								<div class="mb-3 row">
									<div><label class="label form-label col-form-label"  for="recuper_user_email">E-mail:</label></div>
									<div><input type="text" class="form-control" id="recuper_user_email" name="recuper_user_email" placeholder="exemplo@email.com"></div>
								</div>
								<div class="mb-3 row">
									<label class="label form-label col-form-label" for="input_cpf">CPF:</label>
									<div class="">
										<input type="text" class="form-control" id="input_cpf" name="input_cpfinput_cpf" placeholder="___.___.___-__">
									</div>
								</div>
								<div class="row mb-3">
									<div class="mb-3 justify-content-center">
										<input type="submit" name="entrar" value="Continuar" class="btn btn-primary">
									</div>
								</div>
							</form>
						</div>
						<div class="card-footer bg-white">
							
							<div class="mb-3 row">
								<div class="mb-3 justify-content-rigth">
									Lembrou de sua senha? <a href="index.php?url=">Fazer Login</a>
								</div>
							</div>

							<div class="justify-content-center mb-3" style="font-size: 12px;">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
						<div class="" style="margin: 15px;"></div>
						<div class="" style="margin: 15px;"></div>
						<div class="" style="margin: 15px;"></div>
						<div class="" style="margin: 15px;"></div>
						<div class="" style="margin: 15px;"></div>
						<div class="" style="margin: 15px;"></div>
		

		<?php include_once '../config/footer.php' ?>
	</body>
</html>