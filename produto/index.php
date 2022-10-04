<!DOCTYPE html>
<html lang="pt_br">
	<head>
		<?php include_once '../config/configuracao.php'; # Vai facilitar na hora de escrever as tags css, js , entre outras 
		if (!isset($_SESSION['idUsuario'])) {
			$cod_usuario = "0";
		}else{
			$cod_usuario = $_SESSION['idUsuario'];}
		if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$consulta_produto = mysqli_query($con,"SELECT * FROM produto JOIN marca ON marca.idMarca = produto.codMarca JOIN categoria_produto ON categoria_produto.codProduto = produto.idProduto JOIN categoria ON categoria.idCategora = categoria_produto.codCategoria WHERE idProduto = '$id' ");
				$num = mysqli_num_rows($consulta_produto);
				$avalicao_geral = mysqli_query($con,"SELECT * FROM `avaliacao` JOIN estrelas on estrelas.idEstrelas = avaliacao.codEstrela JOIN produto on produto.idProduto = avaliacao.codProduto WHERE codProduto = '$id' ");
				if ($num == 0) {
					header("Location: ../");
				}
				if ($produto_row = mysqli_fetch_assoc($consulta_produto)) {
					$img_produto = $produto_row['imagemDestagada'];
				}
			}else{
				header("Location: ../");
			}
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
						<?php  ?>
						<div class="col-md-8 row">
							<div class="col-md-3">
								<div class="destacada-img">
									<img src="<?php echo $url_host; ?>/theme/img/produto/<?php echo $img_produto; ?>">
								</div>
							</div>
				  			<div class="col-md-9 ml-auto padding-5">
				  				<div class="col-md-12 ">
				  					<h1 class="text-center title-produto"><?php echo $produto_row['nomeProduto'] ?></h1>
				  				</div>
				  				<div class="col-md-12 padding-6">
				  					<div class="prev-description padding-3 ">
				  						<?php echo substr($produto_row['descricaoProduto'], 0,145)  ?>...
				  						<a href="#mais" class="text-decoration">Informações do Produto</a>
				  					</div>
				  				</div>
				  				
				  				<div class="col-md-12 padding-4">
				  					<div class="row">
				  						<form method="POST" action="#">
											<input type="hidden" name="id_produto" id="id_produto" value="<?php echo $id ?>">
											<input type="hidden" name="cod_usuario" id="cod_usuario" value="<?php echo $cod_usuario ?>">
										</form>
				  						<div class="col-md-3 favoritar favoritar-contorno">
				  							<span class="icon fa fa-heart-o"></span>
				  							<a >Favoritar</a>
				  						</div>
				  						<div class="col-md-8 numero-avaliações">
				  							<span class="icon fa fa-star"></span>
				  							<span class="icon fa fa-star"></span>
				  							<span class="icon fa fa-star"></span>
				  							<span class="icon fa fa-star-o"></span>
				  							<span class="icon fa fa-star-o"></span>
				  							Avaliações <?php echo mysqli_num_rows($avalicao_geral); ?>
				  						</div>
				  					</div>
				  				</div>
				  			</div>
				  			
						</div>
						<div class="col-md-4 ml-auto">
							<div class="col-md-12">
								<?php
									if ($produto_row['desconto'] == "") {
								?>
								<h1 class="valor-vista text-center">
									R$ <?php echo $produto_row['valor'] ?>
								</h1>
								<p class="valor-parcelas">
									<?php if ($produto_row['parceladoAte'] == ""){ ?>
										1x de <?php echo $produto_row['valor'] ?>
									<?php }else{
									?>
										<?php echo $produto_row['parceladoAte']."x de ". $produto_row['parceladoValor'] ?>
									<?php
									} ?>
								</p>
								<?php
									}else{
									?>
									<div class="desconto">
										<?php echo '<div class="desconto">
										<div class="src__WrapperDownArrow-sc-1jbhugd-22 gpDQjr">
											<svg viewBox="0 0 12 12" aria-labelledby="arrowDiscountIcon arrowDiscountDesc" width="10" height="10" fill="#fff">
												<path fill="inherit" d="M.813 5.647a.5.5 0 01.707 0L5.5 9.628V1.166a.5.5 0 111 0v8.461l3.98-3.98a.5.5 0 01.637-.057l.07.058a.5.5 0 010 .707l-4.833 4.832a.508.508 0 01-.019.018l-.027.022a.379.379 0 01-.044.031l-.03.017a.363.363 0 01-.08.034.398.398 0 01-.08.018.45.45 0 01-.063.006H5.99a.503.503 0 01-.061-.005l.072.005a.502.502 0 01-.151-.023l-.023-.008-.015-.006a.496.496 0 01-.048-.022l-.015-.01-.01-.004a.498.498 0 01-.051-.037l-.017-.015a.232.232 0 01-.025-.022L.813 6.354a.5.5 0 010-.707z"></path>
												</svg>
												</div>
												<span class="src__Text-sc-154pg0p-0 src__DiscountRate-sc-1jbhugd-23 fbjRgl">'.$produto_row['desconto'].'%</span>
										</div>'; ?>
										<del style="margin-top: 10px;">R$ <?php echo $produto_row['valor'] ?></del>
									</div>
									<h1 class="valor-vista text-center">
									R$ <?php echo $produto_row['valorDesconto'] ?>
								</h1>
								<p class="valor-parcelas">
									<?php if ($produto_row['parceladoAte'] == ""){ ?>
										1x de <?php echo $produto_row['valor'] ?>
									<?php }else{
									?>
										<?php echo $produto_row['parceladoAte']."x de ". $produto_row['parceladoValor'] ?>
									<?php
									} ?>
								</p>
									<?php
									}
								?>
								
							</div>
							<form method="GET" action="../carrinho/">
								<input type="hidden" name="id" value="<?php echo $id ?>">
								<div class="col-md-12">
									<div>
										<div id="quantidade" class="row col-md-12">
											<div class="row col-md-5">
												<div class="col-md-13 btn btn-mais-menos " id="submitrai">-</div>
												<input type="" name="quantidade" value="1" id="quantidade-5">
												<div class="col-md-13 btn btn-mais-menos " id="adiciona">+</div>
											</div>
											<div class="col-md-6">
												Quantidade: <label><?php echo $produto_row['quantidade'] ?></label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12 row" style="margin-top: 7%">
									<div class="justify-content-center row">
										<button class="btn btn-primary" type="submit">Comprar</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>
			<div class="row" style="margin-top:4%">
				<h4>Produtos que talvez goste</h4>
			</div>
			<div class="row" style="margin-top:20%">
				<div id="mais">
					<h4>Descição do Produto</h4>
				</div>
			</div>
		</div>

		<?php include_once '../config/footer.php' ?>
	</body>
</html>