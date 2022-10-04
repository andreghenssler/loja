<div class="pedido-atual row">
	<input type="hidden"id="id_conexao" value="<?php echo $_SESSION['idUsuario'] ?>" name="id_conexao">
	<h4 class="title">Endereços</h4>
	<div class="pesquisa"></div>
	<hr>
	<!-- <script type="text/javascript" src="<?php echo $url_caminho ?>/theme/js/alterar_dados.js"></script> -->
	<div class="pedidos-ultimos row">
		<div class="col-md-12 row">
			<div class="sajs">
				<div class="col-md-12 row jusk">
					<div class="col-md-12" style="margin-bottom: 5px;border-bottom: 1px solid #ccc;">
						<div class="col-md-6">
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cadastroEndereco_c">
							  Cadastro de Endereço
							</button>
						</div>
					</div>
					<div class="col-md-12">
						<span id="msg"></span>
					</div>
					<div class="col-md-12 row listagem_endereco_minha_conta" id="listagem_endereco_minha_conta"></div>
				</div>

				

			</div>
		</div>
	</div>
	
</div>
