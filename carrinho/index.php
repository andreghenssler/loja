<!DOCTYPE html>
<html lang="pt_br">
	<head>
		<?php include_once '../config/configuracao.php'; # Vai facilitar na hora de escrever as tags css, js , entre outras
		if (isset($_GET['quantidade'])) {
			$_SESSION['quantidade'] = $_GET['quantidade'];
		}else{
			$_SESSION['quantidade'] = 1;
		}
		
		if (!isset($_SESSION['idUsuario'])) {
			header("Location:".$url_host."/login/index.php?url=".$url);
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
						<div class="col-md-9 row">
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
				  					</div>
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
				  				<label>Quantidade de Itens:</label> <b><?php echo$_SESSION['quantidade'] ?></b>

				  				
				  			</div>
				  				
				  				
				  			</div>
				  			
						</div>
						<div class="col-md-3 ml-auto">
							
							<form method="GET" action="compra.php">
								<input type="hidden" name="cod_produto" value="<?php echo $id ?>">
								<input type="hidden" name="quantidade" value="<?php echo $_SESSION['quantidade'] ?>">
								<div class="col-md-12">
								</div>
								<div class="col-md-12 row" style="margin-top: 7%">
									<div class="justify-content-center row">
										<button class="btn btn-primary" type="submit">Avançar</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>
			<div class="row" style="margin-top:4%">
				<h4>Produtos que talvez goste</h4>
				<?php
					echo produto_tavez_goste($con);
				?>
			</div>
			
		</div>

		<?php include_once '../config/footer.php' ?>
	</body>
</html>