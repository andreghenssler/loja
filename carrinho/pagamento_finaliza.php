<!DOCTYPE html>
<html lang="pt_br">
	<head>
		<?php include_once '../config/configuracao.php'; # Vai facilitar na hora de escrever as tags css, js , entre outras
		$quantidade = $_POST['quantidade'];
		$id_usuario = $_SESSION['idUsuario'];
		$id = $_POST['cod_produto'];
		$consulta_produto = mysqli_query($con,"SELECT * FROM produto JOIN marca ON marca.idMarca = produto.codMarca JOIN categoria_produto ON categoria_produto.codProduto = produto.idProduto JOIN categoria ON categoria.idCategora = categoria_produto.codCategoria WHERE idProduto = '$id' ");
		$num = mysqli_num_rows($consulta_produto);
		$produto_row = mysqli_fetch_assoc($consulta_produto);

		$consulta_carrinho = mysqli_query($con,"SELECT * FROM carrinho WHERE pk_usuario = '$id_usuario' ORDER BY idCarrinho DESC LIMIT 1 ");
		$consulta_carrinho_row = mysqli_fetch_assoc($consulta_carrinho);

		?>
		<title><?php echo  $_SESSION['titulo']; ?></title>
		<script type="text/javascript" src="<?php echo $url_caminho ?>/theme/js/carregar-itens.js"></script>
	</head>
	<body>
		
		<?php
			include_once '../config/menu-fixed.php';
			include_once '../config/menu-header.php';
		?>

		<div id="page" class="container-fluid">
			<div class=" row justify-content-center ">
				<div class="mostra-produto">
					<div class="row">
						<div id="metodo-pagamento">
							<ul class="nav nav-tabs" id="myTab" role="tablist">
							  <li class="nav-item">
							  	
							    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#pix" role="tab" aria-controls="pix" aria-selected="true">PIX</a>
							  </li>
							  <li class="nav-item">
							  	
							    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#boleto" role="tab" aria-controls="boleto" aria-selected="false">Boleto</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#cartao" role="tab" aria-controls="cartao" aria-selected="false">Cartão</a>
							  </li>
							</ul>
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="pix" role="tabpanel" aria-labelledby="home-tab">
									<?php include_once "mod/pix_QR.php" ?>
								</div>
							  	<div class="tab-pane fade" id="boleto" role="tabpanel" aria-labelledby="profile-tab">
									<?php include_once "mod/boleto.php" ?>
								</div>
							  	<div class="tab-pane fade" id="cartao" role="tabpanel" aria-labelledby="contact-tab">
							  		<?php include_once "mod/cartao_credito.php" ?>
							  	</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			
		</div>

		<?php include_once '../config/footer.php';
		 include_once 'mod/boleto_modal.php' ?>
	</body>
</html>