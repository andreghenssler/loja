<style type="text/css">
	

</style>
<nav id="header" class="navbar navbar-expand-md navbar-dark fixed-top">
	<div id="menu-horizontal-fixed" class="container navbar-navs">
		<div id="menu-lateral" ></div>
		<div class="nav-left" >
			<a href="<?php echo $url_caminho ?>"><img class="img-logo" src="<?php echo $url_host ?>/theme/img/logos/logo2.png" title="<?php echo  $_SESSION['titulo']; ?>"></a>
		</div>
		<div class="nav-fill" >
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="Pesquisar ..." id="pesquiar_input" aria-label="Pesquisar" aria-describedby="basic-addon2">
				<input type="hidden" name="url" value="">
				<button type="submit" class="input-group-text" id="submit-search" title="Pesquisar ...">
					<i class="icon fa fa-search"></i>
				</button>
			</div>
		</div>
		<div class="nav-rigth" >
			<div id="login" class="dropdown">
				<?php 
					if (isset($_SESSION['user'])) {
						echo '<a class="dropdown-toggle" role="button" id="login-navbar-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 11pt;">Olá, '.$_SESSION['user'].'</a>';
					}else{
						echo '<a class="dropdown-toggle" role="button" id="login-navbar-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</a>';
					}
				?>
				
				<div class="dropdown-menu" aria-labelledby="login-navbar-1">
					<?php
					
						if (isset($_SESSION['user'])) {
					?>
						<div>
							<a class="dropdown-item" href="<?php echo $url_host ?>/minha-conta">Minha Conta</a>
						</div>
						<div>
							<a class="dropdown-item" href="<?php echo $url_host ?>/minha-conta/pedidos">Meus Pedidos</a>
						</div>
						<div>
							<a class="dropdown-item" href="<?php echo $url_host ?>/login/logout.php">Não é você? Sair</a>
						</div>
						
					<?php
						}else{
					?>
						<div>
							<a class="dropdown-item btn btn-secondary btn-danger" href="<?php echo $url_host ?>/login/index.php?url=<?php echo $url ?>">Entrar</a>
						</div>
						<div>
							<a class="dropdown-item" href="<?php echo $url_host ?>/login/signup.php">Novo Cliente? Cadastrar</a>
						</div>
					<?php
						}
					?>
				</div>
			</div>
			<div id="carrinho">
				<a href="<?php echo $url_host ?>/carrinho">
					<span class="icon fa fa-shopping-cart  fa-2x"></span>
					<span>Carrinho</span>
				</a>
				
			</div>
		</div>
	</div>
</nav>