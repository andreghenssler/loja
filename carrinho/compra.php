<!DOCTYPE html>
<html lang="pt_br">
	<head>
		<?php include_once '../config/configuracao.php'; # Vai facilitar na hora de escrever as tags css, js , entre outras
		$quantidade = $_GET['quantidade'];
		$id_usuario = $_SESSION['idUsuario'];
		$id = $_GET['cod_produto'];
		$consulta_produto = mysqli_query($con,"SELECT * FROM produto JOIN marca ON marca.idMarca = produto.codMarca JOIN categoria_produto ON categoria_produto.codProduto = produto.idProduto JOIN categoria ON categoria.idCategora = categoria_produto.codCategoria WHERE idProduto = '$id' ");
		$num = mysqli_num_rows($consulta_produto);

		$produto_row = mysqli_fetch_assoc($consulta_produto);

		$insert_dados_carrinho = mysqli_query($con,"INSERT INTO `carrinho` (`quantidade`, `codProdutoCarrinho`, `pk_usuario`) VALUES ('$quantidade ', '$id', '$id_usuario')");

		

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
								<div class="col-md-9 row">
									<div class="col-md-3">
										<div class="destacada-img">
											<img src="<?php echo $url_host; ?>/theme/img/produto/<?php echo $produto_row['imagemDestagada']; ?>">
										</div>
									</div>
						  			<div class="col-md-9 ml-auto padding-5">
						  				<div class="col-md-12 ">
						  					<h1 class="text-center title-produto"><?php echo $produto_row['nomeProduto'] ?></h1>
						  				</div>
						  				
						  				<div class="col-md-12">
						  					<?php
						  						if ($produto_row['desconto'] == "") {
						  					?>
						  					<h1 class="valor-vista valor-vista-c  text-center">
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
						  				<div class="col-md-12">
						  				<label>Quantidade de Itens:</label> <b><?php echo $_GET['quantidade'] ?></b>

						  				
						  			</div>
						  				
						  				
						  			</div>
						  			
								</div>
								<div class="col-md-3 ml-auto">
									
									<form method="POST" action="pagamento_finaliza.php">
										<input type="hidden" name="cod_produto" value="<?php echo $id ?>">
										<input type="hidden" name="cod_usuario" value="<?php echo $id_usuario ?>">
										<input type="hidden" name="quantidade" value="<?php echo $_GET['quantidade'] ?>">
										<div class="col-md-12">

											<div class="row">
												<div id="subtoral" class="text-center">
													<h3>Subtotal</h3>
													<h4><?php
						  								if ($produto_row['desconto'] == "") {echo "R$ ".$produto_row['valor']*$quantidade;}else{echo "R$ ".$produto_row['valorDesconto']*$quantidade;}
						  							?></h4>
												</div>
												<div class="col-md-12 text-center frete margin-top-10">
													<div class="col-md-12"><label class="frete-descricao">Frete</label></div>
													<div class="col-md-12">
														<div class="col-md-12"><label class="frete-valor">R$ 00,00</label></div>
													</div>
												</div>
												
											</div>
										</div>
										<div class="row text-center">
											<hr>
											<h4>Total da Compra</h4>
											<h5><?php
						  						if ($produto_row['desconto'] == "") {echo "R$ ".$produto_row['valor']*$quantidade;}else{echo "R$ ".$produto_row['valorDesconto']*$quantidade;}
						  							?>
						  					</h5>
										</div>
										<div class="col-md-12 row" style="margin-top: 7%">
											<div class="justify-content-center row">
												<button class="btn btn-primary" type="submit">Escolha de Pagamento</button>
											</div>
										</div>
									</form>
								</div>
					</div>
				</div>

			</div>
			<div class="row" style="margin-top:4%">
				
			</div>
			
		</div>

		<?php include_once '../config/footer.php' ?>
	</body>
</html>