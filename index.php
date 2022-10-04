<!DOCTYPE html>
<html lang="pt_br">
	<head>
		<?php include_once 'config/configuracao.php'; # Vai facilitar na hora de escrever as tags css, js , entre outras ?>
		
		<title><?php echo  $_SESSION['titulo']; ?></title>
		<script type="text/javascript" src="<?php echo $url_caminho ?>/theme/js/carregar-itens.js"></script>
	</head>
	<body>
		
		<?php
			include_once 'config/menu-fixed.php';
			include_once 'config/menu-header.php';
		?>

		<div id="page" class="container-fluid">
			<div class="produto">
				<div id="destaques" class="container destaques-principal">
					<?php include_once "functions/carrear_itens_destaque_1.php" ?>
				</div>
				<div id="curtir"></div>
				<div id="visitados"></div>
			</div>
		</div>

		<?php include_once 'config/footer.php' ?>
	</body>
</html>