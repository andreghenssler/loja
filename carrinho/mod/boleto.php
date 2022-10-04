<div class="row" id="pagar-boleto">
	<div class="col-md-12 text-center margin-top-12">
		<h4>Pagamento com Boleto</h4>
	</div>
	<div class="col-md-12 row">
		<div class="col-md-3 img-paga-nao">
			<!-- <img src="src/pagar_pix_nao.jpg"> -->
			<form method="POST" action="#" class="boleto-gerar-pagamento">
				<input type="hidden" name="bol" value="<?php echo gerador(); ?>">
			<input type="hidden" name="carro" id="carro" value="<?php echo $consulta_carrinho_row['idCarrinho'] ?>">
			<input type="hidden" name="value" value="<?php if ($produto_row['desconto'] == "") {echo "R$ ".$produto_row['valor']*$quantidade;}else{echo "R$ ".$produto_row['valorDesconto']*$quantidade;} ?>">
			<input type="submit" name="" class="btn btn-secondary col-md-12" data-toggle="modal" data-target="#exampleModal" value="Gerar Boleto de Pagamento">
			</form>
		</div>
		<div class="col-md-7" id="Ppix-fonte-size">
			<div class="col-md-12 margin-top-10 padding-6">
				<span class="icon fa fa-print"></span> Imprima o boleto e pague no banco
			</div>

			<div class="col-md-12 margin-top-10 padding-6">
				<span class="icon fa fa-laptop"></span> ou pague pela internet, utilizando o código de barras
			</div>

			<div class="col-md-12 margin-top-10 padding-6">
				<span class="icon fa fa-calendar-check-o"></span> O prazo de validade é de 2 dias úteis
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="row">
			<div class="justify-content-center col-md-12 text-center">
				<div class="col-md-12"><h4>Valor Total</h4></div>
				<div class="col-md-12"><h3><?php if ($produto_row['desconto'] == "") {echo "R$ ".$produto_row['valor']*$quantidade;}else{echo "R$ ".$produto_row['valorDesconto']*$quantidade;} ?></h3></div>
			</div>
		</div>
		<div class="col-md-12 margin-top-10 text-center" style="width:100%;margin-bottom: 10px;">
			Se o pagamento não for realizado dentro do prazo, terá que fazer uma nova compra
		</div>
	</div>
	<div class="col-md-12 margin-top-10 text-center" style="width:100%;margin-bottom: 10px;">
		<form method="POST" action="mod/acompanhar.php">
			<input type="hidden" name="cod_usuario" value="<?php echo $_SESSION['idUsuario'] ?>">
			<button type="submit" class="btn btn-primary" >Acompanhar Pedido</button>
		</form>
	</div>
</div>
<script type="text/javascript">
	$(".boleto-gerar-pagamento").on('submit',function(b){
		b.preventDefault();
		var dados = $(".boleto-gerar-pagamento").serialize();
		$.post('mod/gereo_boleto.php',dados,function(){
			console.log(dados)
		});

	})
</script>