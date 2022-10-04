<div class="pedido-atual row">
	<h4 class="title">Últimos Pedido</h4>
	<div class="pesquisa"></div>
	<hr>
	<?php
	$pedido = "03-".rand(0,8).rand(0,6).rand(0,9)."-".rand(0,9).rand(0,8);
	$ultimo_pedido_row = mysqli_fetch_assoc($consulta_gerar_pedidos );
	?>
	<div class="pedidos-ultimos row">
		<div class="col-md-12">
			<div class="ajs">
				<div class="col-md-12 row jusk">
					<div class="col-md-12">
						<div class="numero-pedido"><b>Pedido:</b> <?php echo $pedido ?></div>
					</div>
					<div class="col-md-12 row asnkj">
						<div class="col-md-3 img" >
							<img src="<?php echo $url_host; ?>/theme/img/produto/<?php echo $ultimo_pedido_row['imagemDestagada']; ?>">
						</div>
						<div class="col-md-6 row">
							<div class="col-md-12">
								<h3><?php echo $ultimo_pedido_row['nomeProduto'] ?></h3>
								<div class="col-md-12">
									<?php echo $ultimo_pedido_row['nomeProduto'] ?><br>
									<?php echo substr($ultimo_pedido_row['descricaoProduto'], 0,250) ?>...
								</div>
							</div>
							<div class="col-md-5">
								Unidade: <?php echo $ultimo_pedido_row['quantidade']; #ver  ?> 
							</div>
						</div>
						<div class="col-md-2 row" style="align-content: center; ">
							<div class="col-md-12 valor-produto-askj">
								Valor:<br> <?php echo $ultimo_pedido_row['value'] ?>
							</div>
						</div>
					</div>
					
					<div class="col-md-12 detalhar-pedido-hak row" style="padding-top: 8px;" >
						<div class="acompnhar-pedido">
							<a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
								Acompanhar Pedido
							</a>
							<div class="collapse" id="collapseExample">
								<div class="card card-body">
							   		<!-- Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. -->
							   		<div class="progress">
							   			<div class="progress-bar bg-danger" role="progressbar" style="width: 12%;border-radius: 5px 5px;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
							   		</div>
							   		
							  	</div>
							</div>
						</div>
						<div class="destalhar">
							<a href="#pedido?id=">Detalhes do Pedido</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>