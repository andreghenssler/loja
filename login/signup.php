<!DOCTYPE html>
<html lang="pt_br">
	<head>
		<?php include_once '../config/configuracao.php'; # Vai facilitar na hora de escrever as tags css, js , entre outras ?>
		<script type="text/javascript" src="<?php echo $url ?>/theme/js/login.js"></script>
		<script src="https://rawgit.com/RobinHerbots/Inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
		<title>Registro <?php echo  $_SESSION['titulo']; ?></title>
	</head>
	<body class="pg-login">
		
		<?php
			#include_once '../config/menu-fixed.php';
			#include_once 'config/menu-header.php';
		?>
		<nav id="header" class="navbar navbar-expand-md navbar-dark fixed-top">
			<div id="menu-horizontal-fixed" class="container navbar-navs">
				<div id="menu-lateral" ></div>
				<div class="nav-left" >
					<a href="<?php echo $url_caminho ?>"><img class="img-logo" src="<?php echo $url_caminho?>/theme/img/logos/logo2.png" title="<?php echo  $_SESSION['titulo']; ?>"></a>
				</div>
				<div class="nav-fill" >
					<div class="input-group mb-3">
						
					</div>
				</div>
				<div class="nav-rigth" >
					<div id="login" class="dropdown">
						
					</div>
					<div id="carrinho">
						Criando sua Conta				
					</div>
				</div>
			</div>
		</nav>

		<div id="page-singup" class="container-fluid">
			<div class="justify-content-center">
				<div id="singup">
					<div class="card">
						<div class="card-header">
							<h2 class="card-title text-center">Criar Conta</h2>
						</div>
						<div class="card-body">
							<form method="POST" class="mform" id="login-user" autocomplete="off" action="login2.php" accept-charset="utf-8">
								<input type="hidden" name="url" value="<?php echo $url_caminho ?>">
								<input type="hidden" name="log" value="<?php echo rand(0,999999); ?>">
								<div class="mb-3 row">
									<?php if (isset($_SESSION['camp_brancos'])) {echo $_SESSION['camp_brancos']; unset($_SESSION['camp_brancos']);} ?>
								</div>
								<div class="mb-3 row">
									<div class="col-md-3">
										<span class="float-sm-right text-nowrap">
											<abbr class="initialism text-danger" title="Necessários"><i class="icon fa fa-exclamation-circle text-danger fa-fw " title="Necessários" aria-label="Necessários"></i></abbr>            
										</span>
										<label class="label form-label col-form-label" for="input_name">Nome:</label>
									</div>
									<div class="col-md-9">
										<input type="text" class="form-control" id="input_name" name="input_name">
										<?php if (isset($_SESSION['camp_branc_nome'])) {echo $_SESSION['camp_branc_nome'];unset($_SESSION['camp_branc_nome']);} ?>
									</div>
								</div>

								<div class="mb-3 row">

									<div class="col-md-3">
										<span class="float-sm-right text-nowrap">
											<abbr class="initialism text-danger" title="Necessários"><i class="icon fa fa-exclamation-circle text-danger fa-fw " title="Necessários" aria-label="Necessários"></i></abbr>            
										</span>
										<label class="label form-label col-form-label" for="input_sobrename">Sobrenome:</label>
									</div>
									
									<div class="col-md-9">
										<input type="text" class="form-control" id="input_sobrename" name="input_sobrename" >
										<?php if (isset($_SESSION['camp_branc_sobrenome'])) {echo $_SESSION['camp_branc_sobrenome']; unset($_SESSION['camp_branc_sobrenome']);} ?>
									</div>
								</div>

								<div class="mb-3 row">

									<div class="col-md-3">
										<span class="float-sm-right text-nowrap">
											<abbr class="initialism text-danger" title="Necessários"><i class="icon fa fa-exclamation-circle text-danger fa-fw " title="Necessários" aria-label="Necessários"></i></abbr>            
										</span>
										<label class="label form-label col-form-label" for="input_nascimento">Nascimento:</label>
									</div>
									<div class="col-md-9">
										<input type="date" class="form-control" id="input_nascimento" name="input_nascimento" >
										<?php if (isset($_SESSION['camp_branc_nascimento'])) {echo $_SESSION['camp_branc_nascimento']; unset($_SESSION['camp_branc_nascimento']);} ?>
									</div>
								</div>

								<div class="mb-3 row">

									<div class="col-md-3">
										<span class="float-sm-right text-nowrap">
											<abbr class="initialism text-danger" title="Necessários"><i class="icon fa fa-exclamation-circle text-danger fa-fw " title="Necessários" aria-label="Necessários"></i></abbr>            
										</span>
										<label class="label form-label col-form-label" for="input_cpf">CPF:</label>
									</div>
									
									<div class="col-md-9">
										<input type="text" class="form-control" id="input_cpf" name="input_cpf" maxlength="15" >
										<?php if (isset($_SESSION['camp_igual_nome'])) {echo $_SESSION['camp_igual_nome']; unset($_SESSION['camp_igual_nome']);} ?>
									</div>
								</div>

								<div class="mb-3 row">									

									<div class="col-md-3">
										<span class="float-sm-right text-nowrap">
											<abbr class="initialism text-danger" title="Necessários"><i class="icon fa fa-exclamation-circle text-danger fa-fw " title="Necessários" aria-label="Necessários"></i></abbr>            
										</span>
										<label class="label form-label col-form-label " for="input_cpf">Gênero:</label>
									</div>
									<div class="col-md-9 check-radio">
										<div class="form-check">

											<?php
												$genero = mysqli_query($con,"SELECT * FROM genero");
												while ( $list_genero =  mysqli_fetch_assoc($genero)) {
													echo '<div>
															<input type="radio" name="input_genero" value="'.$list_genero['idGenero'].'" id="input_genero'.$list_genero['idGenero'].'">
															<label class="form-check-label" for="input_genero'.$list_genero['idGenero'].'">'.$list_genero['tipoGenero'].'</label>
														</div>';
												}
											?>
										</div><?php if (isset($_SESSION['camp_branc_genero'])) {echo $_SESSION['camp_branc_genero']; unset($_SESSION['camp_branc_genero']);} ?>
									</div>
								</div>

								<div class="mb-3 row">								

									<div class="col-md-3">
										<span class="float-sm-right text-nowrap">
											<abbr class="initialism text-danger" title="Necessários"><i class="icon fa fa-exclamation-circle text-danger fa-fw " title="Necessários" aria-label="Necessários"></i></abbr>            
										</span>
										<label class="label form-label col-form-label " for="input_celular">Celular:</label>
									</div>
									<div class="col-md-9">
										<input type="tel" class="form-control" id="input_celular" name="input_celular" >
										<?php if (isset($_SESSION['camp_branc_celular'])) {echo $_SESSION['camp_branc_celular']; unset($_SESSION['camp_branc_celular']);} ?>
									</div>
								</div>

								<div class="mb-3 row">						

									<div class="col-md-3">
										<span class="float-sm-right text-nowrap">
											<abbr class="initialism text-danger" title="Necessários"><i class="icon fa fa-exclamation-circle text-danger fa-fw " title="Necessários" aria-label="Necessários"></i></abbr>            
										</span>
										<label class="label form-label col-form-label" for="input_email">E-mail:</label>
									</div>
									<div class="col-md-9">
										<input type="email" class="form-control" id="input_email" name="input_email" placeholder="exemplo@mail.com" >
										<?php if (isset($_SESSION['camp_igual_cpf'])) {echo $_SESSION['camp_igual_cpf']; unset($_SESSION['camp_igual_cpf']);} ?>
									</div>
								</div>

								<div class="mb-3 row">
									<div class="col-md-3"></div>
									<div class="col-md-9">
										A senha deve ter ao menos 8 caracteres. Pelo menos 1  letra(s) minúscula(s), ao menos 1 letra(s) maiúscula(s), no mínimo 1 caractere(s) não alfa-numéricos, como *, -, ou #.
									</div>
								</div>

								<div class="mb-3 row">						

									<div class="col-md-3">
										<span class="float-sm-right text-nowrap">
											<abbr class="initialism text-danger" title="Necessários"><i class="icon fa fa-exclamation-circle text-danger fa-fw " title="Necessários" aria-label="Necessários"></i></abbr>            
										</span>
										<label class="label form-label col-form-label" for="input_password">Senha:</label>
									</div>
									<div class="col-md-9">
										<input type="password" class="form-control" id="input_password" name="input_password" placeholder="******" >
										<?php if (isset($_SESSION['camp_branc_senha'])) {echo $_SESSION['camp_branc_senha']; unset($_SESSION['camp_branc_senha']);} ?>
									</div>
								</div>
								<div class="mb-3 row">
									<div class="col-md-3"></div>
									<div class="col-md-9" style="text-align: right;">
										<abbr class="initialism text-danger" title="Necessários"><i class="icon fa fa-exclamation-circle text-danger fa-fw " title="Necessários" aria-label="Necessários"></i></abbr> campos obrigatórios
									</div>
								</div>


								<div class="row mb-3">
									<div class="mb-3 justify-content-center">
										<input type="submit" name="entrar" value="Criar minha Conta" class="btn btn-primary">
									</div>
								</div>
							</form>
						</div>
						<div class="card-footer bg-white">
							<div class="mb-3 row">
								<div class="mb-3 justify-content-rigth">
									Você já tem uma conta? <a href="index.php?url=">Fazer Login</a>
								</div>
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