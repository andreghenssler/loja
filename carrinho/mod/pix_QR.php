<div class="row" id="pagar-pix">
	<div class="col-md-12 text-center margin-top-12">
		<h4>Pagamento com PIX</h4>
	</div>
	<div class="col-md-12 row">
		<div class="col-md-3 img-paga-nao">
			<img src="src/pagar_pix_nao.jpg">
		</div>
		<div class="col-md-7" id="Ppix-fonte-size">
			<div class="col-md-12 margin-top-10 padding-6">
				<span class="icon fa fa-mobile"></span> Abra o app do seu panco ou instituição financeira e entre no ambiente PIX
			</div>

			<div class="col-md-12 margin-top-10 padding-6">
				<span class="icon fa fa-qrcode"></span> escolha a opção pagar QRCode e ensanei o código ao Lado
			</div>

			<div class="col-md-12 margin-top-10 padding-6">
				<span class="icon fa fa-check"></span> confirme as informações e finalize a compra
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
			Você receverá um e-mail quando seu PIX for aprovado
		</div>
	</div>
	<div class="col-md-12 margin-top-10 text-center" style="width:100%;margin-bottom: 10px;">
		<form method="POST" action="mod/acompanhar.php">
			<input type="hidden" name="cod_usuario" value="<?php echo $_SESSION['idUsuario'] ?>">
			<button type="submit" class="btn btn-primary" >Acompanhar Pedido</button>
		</form>
	</div>
</div>