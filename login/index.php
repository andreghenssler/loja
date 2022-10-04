<!DOCTYPE html>
<html lang="pt_br">
	<head>
		<?php include_once '../config/configuracao.php'; # Vai facilitar na hora de escrever as tags css, js , entre outras 
			if (isset($_SESSION['user'])) {
				header("Location: ../");
			}
			if (isset($_GET['url'])) {
				$url = $_GET['url'];
			}
		?>
		
		<title>Acessar <?php echo  $_SESSION['titulo']; ?></title>
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
						Login				
					</div>
				</div>
			</div>
		</nav>

		<div id="page-login" class="container-fluid">
			<div class="justify-content-center">
				<div id="login">
					<div class="card">
						<div class="card-header">
							<h2 class="card-title text-center">Login</h2>
						</div>
						<div class="card-body">
							<form method="POST" class="mform" id="login-user" autocomplete="off" action="login.php" accept-charset="utf-8">
								<input type="hidden" name="url" value="<?php echo $url ?>">
								<input type="hidden" name="log" value="<?php echo rand(0,999999); ?>">
								<div class="loginerrors mt-3">
									<?php
										if (isset($_SESSION['erro_login'])) {echo $_SESSION['erro_login'];unset($_SESSION['erro_login'] );
										}
									?>
								</div>
								<div class="mb-3 row">
									<div><label class="label form-label col-form-label"  for="nome_user">Nome:</label></div>
									<div><input type="text" class="form-control" id="nome_user" name="nome_user" placeholder="exemplo@email.com"></div>
								</div>
								<div class="mb-3 row">
									<label class="label form-label col-form-label" for="password_user">Senha:</label>
									<div class="">
										<input type="password" class="form-control" id="password_user" name="password_user" placeholder="******">
									</div>
								</div>
								<div class="row mb-3">
									<div class="mb-3 justify-content-center">
										<input type="submit" name="entrar" value="Entrar" class="btn btn-primary">
									</div>
								</div>
							</form>
						</div>
						<div class="card-footer bg-white">
							<div class="mb-3 row">
								<div class="mb-3 justify-content-rigth">
									<a href="forgot_password.php?url=<?php echo $url ?>">Esqueceu sua Senha?</a>

								</div>
							</div>
							
							<div class="mb-3 justify-content-center">
								<form method="POST" action="signup.php?">
									<input type="hidden" name="url" value="<?php echo $url ?>">
									<input type="submit" name="" value="Criar Conta" class="btn btn-secondary bg-white">
								</form>
							</div>

							<div class="justify-content-center mb-3" style="font-size: 12px;">
								<div>
									Ao continuar, você concorda com as <a href="">Condições de Uso</a> da InfoMAIS. Por favor verifique a <a href="">Notificação de Privacidade</a>, <a href="">Notificação de Cookies</a> e a <a href="">Notificação de Anúncios Baseados em Interesse</a>.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		

		<?php include_once '../config/footer.php' ?>
	</body>
</html>