<div class="row" id="pagar-cartao">
	<div class="col-md-12 text-center margin-top-12">
		<h4>Cartão de Crédito</h4>
	</div>
	<div class="col-md-12 row">
		<div class="col-md-3 img-paga-nao">
			<!-- <img src="src/pagar_pix_nao.jpg"> -->
			<!-- <button  type="button"  class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">Gerar Boleto de Pagamento</button> -->
		</div>
		<div class="col-md-7" id="Ppix-fonte-size">
			<form method="POST" class="mform pagamento-cartao">
				<input type="hidden" name="carro" id="carro" value="<?php echo $consulta_carrinho_row['idCarrinho'] ?>">
				<input type="hidden" name="value" value="<?php if ($produto_row['desconto'] == "") {echo "R$ ".$produto_row['valor']*$quantidade;}else{echo "R$ ".$produto_row['valorDesconto']*$quantidade;} ?>">
				<div class="row form-group">
					<div class="col-md-12">
						<label for="numero_cartao">Número do Cartão:</label>
						<input type="text" class="form-control" name="numero_cartao" id="numero_cartao" minlength="16" maxlength="22">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-12">
						<label for="numero_cartao">Nome Completo:</label> <span  for="numero_cartao">(Conforme está impresso no cartão)</span>
						<input type="text" class="form-control" name="nomeCompleto_cartao" id="numero_cartao">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-5 row">
						<label for="numero_cartao">Validade</label>
						<div class="col-md-6">
							<select class="custom-select col-md-12" id="startDate" name="startDate"><?php echo meses_ano(); ?></select>
						</div>
						<div class="col-md-6">
							<select class="custom-select col-md-12" name="ano_cartao"><?php echo ano(); ?></select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="numero_cartao">Código de Segurança</label>
						<input type="text" class="form-control" name="codigoSeguranca" id="cvv_cartao">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-12">
						<label for="numero_cartao">Número do Cartão:</label>
						<select class="custom-select" name="numer_parcelas" id="numer_parcelas">
							<option value='1'> 1x de
							<?php if ($produto_row['desconto'] == "") {echo "R$ ".$produto_row['valor']*$quantidade;}else{echo "R$ ".$produto_row['valorDesconto']*$quantidade;} ?>
							</option>

						</select>
					</div>
				</div>
				<div class="row" style="margin-bottom:10px">
					<div class="justify-content-center col-md-12 text-center margin-top-6">
						<button type="submit" id="pagar" class="btn btn-primary">Pagar</button>
					</div>
				</div>
			</form>
			<script type="text/javascript">
				$('.pagamento-cartao').on('submit',function(e){
					e.preventDefault();
					var dados = $('.pagamento-cartao').serialize();
					$.post('mod/pagar_cartao.php',dados,function(a){
						if (a) {
							$("#disabled").removeClass('disabled');
						}else{
							alert("Tente novamente");
						}
					});
					console.log("oi"+dados);
				})
			</script>
		</div>
	</div>
	<div class="col-md-12">
		<div class="row">
			<div class="justify-content-center col-md-12 text-center">
				<div class="text-center"><h4>Valor Total</h4></div>
				<div class="text-center"><h3><?php if ($produto_row['desconto'] == "") {echo "R$ ".$produto_row['valor']*$quantidade;}else{echo "R$ ".$produto_row['valorDesconto']*$quantidade;} ?></h3></div>
			</div>
		</div>
		<div class="col-md-12 margin-top-10 text-center" style="width:100%;margin-bottom: 10px;">
			Se o pagamento não for realizado dentro do prazo, terá que fazer uma nova compra
		</div>
	</div>
	<div class="col-md-12 margin-top-10 text-center" style="width:100%;margin-bottom: 10px;">
		<form method="GET" action="mod/acompanhar.php">
			<input type="hidden" name="cod_usuario" value="<?php echo $_SESSION['idUsuario'] ?>">
			<button type="submit"  id="disabled" class="btn btn-primary disabled">Acompanhar Pedido</button>
		</form>
	</div>
</div>