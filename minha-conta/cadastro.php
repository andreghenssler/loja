<!DOCTYPE html>
<html lang="pt_br">
	<head>
		<?php include_once '../config/configuracao.php'; # Vai facilitar na hora de escrever as tags css, js , entre outras 
			if (!isset($_SESSION['user'])) {
				header("Location: ../login");
			}
			if (isset($_GET['url'])) {
				$url = $_GET['url'];
			}
		?>
		 
		
		<title><?php echo  $_SESSION['titulo']; ?></title>
		<script type="text/javascript" src="minha-conta.js"></script>
	</head>
	<body class="minha-conta">
		
		<?php
			include_once '../config/menu-fixed.php';
			include_once '../config/menu-header.php';
		?>
		<div id="page" class="container-fluid">
			<div id="minha-conta" class="col-md-12 row">
				<div id="menu-lateral-my" class="col-md-3">
					<ul class="nav nav-tabs">
					  <li class="nav-item active"><a  href="pedidos" class="nav-link ">Pedidos Atuais</a></li>
					  <li class="nav-item"><a href="pedidos" class="nav-link">Pedidos Anteriores</a></li>
					  <li class="nav-item"><a data-toggle="tab" href="#menu2" class="nav-link active">Cadastro</a></li>
					  <li class="nav-item" id="listagem_endereco_minha_conta"><a data-toggle="tab" href="#menu3" class="nav-link">Endereços</a></li>
					</ul>
				</div>

				<div id="conteudo-lateral-my" class="col-md-9">
					<div class="tab-content">
						
					  	<div id="menu2" class="tab-pane fade show active">
						    <?php include_once "mods/cadastro.php";	 ?>
					  	</div>
					  	<div id="menu3" class="tab-pane fade">
					    	<?php include_once "mods/endereco.php";	 ?>
					  	</div>
					</div>
				</div>
			</div>

		</div>
		

		<?php include_once 'mods/modais.php'; include_once '../config/footer.php' ?>
	</body>
</html>