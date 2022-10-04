<!DOCTYPE html>
<html lang="pt_br">
	<head>
		<?php include_once '../../config/configuracao.php'; # Vai facilitar na hora de escrever as tags css, js , entre outras 
			if (!isset($_SESSION['user'])) {
				header("Location: ../login");
			}
			if (isset($_GET['url'])) {
				$url = $_GET['url'];
			}
			$id = $_SESSION['idUsuario'];
			$consulta_gerar_pedidos = mysqli_query($con,"SELECT * FROM usuario JOIN carrinho ON usuario.idUsuario = carrinho.pk_usuario JOIN produto ON produto.idProduto = carrinho.codProdutoCarrinho JOIN modopagamento ON modopagamento.codCarrinho = carrinho.idCarrinho JOIN pedidofechado ON pedidofechado.codModopagamento = modopagamento.idModoPagamento JOIN peido_status on peido_status.codPedido = pedidofechado.idPedidoFechado JOIN statuspedido ON statuspedido.idStatusPedidos = peido_status.codStatus WHERE usuario.idUsuario = '$id' ORDER BY pedidofechado.idPedidoFechado DESC LIMIT 1;");
		?>
		 
		
		<title><?php echo  $_SESSION['titulo']; ?></title>
		<!-- <script type="text/javascript" src="../minha-conta.js"></script> -->
	</head>
	<body class="minha-conta">
		
		<?php
			include_once '../../config/menu-fixed.php';
			include_once '../../config/menu-header.php';
		?>
		<div id="page" class="container-fluid">
			<div id="minha-conta" class="col-md-12 row">
				<div id="menu-lateral-my" class="col-md-3">
					<ul class="nav nav-tabs">
					  <li class="nav-item active"><a data-toggle="tab" href="#home" class="nav-link active">Pedidos Atuais</a></li>
					  <li class="nav-item"><a data-toggle="tab" href="#menu1" class="nav-link">Pedidos Anteriores</a></li>
					  <li class="nav-item"><a href="../cadastro.php" class="nav-link">Cadastro</a></li>
					  <li class="nav-item" id="listagem_endereco_minha_conta"><a href="../cadastro.php" class="nav-link">Endereços</a></li>
					</ul>
				</div>

				<div id="conteudo-lateral-my" class="col-md-9">
					<div class="tab-content">
						<div id="home" class="tab-pane fade show active">
							<?php include_once "../mods/pedido_atual.php";	 ?>
					  	</div>
					  	<div id="menu1" class="tab-pane fade">
						    <?php include_once "../mods/pedido_anteior.php";	 ?>
					  	</div>					  	
					</div>
				</div>
			</div>

		</div>
		

		<?php include_once '../mods/modais.php'; include_once '../../config/footer.php' ?>
	</body>
</html>