<?php
	include '../../config/config.php';
	$id = $_SESSION['idUsuario'];
	
	# Consulta o carrinho pelo id do usuario
	$consul = mysqli_query($con,"SELECT * FROM `carrinho` WHERE pk_usuario='$id' ORDER BY idCarrinho DESC LIMIT 1 ");
	$carrinho = mysqli_fetch_assoc($consul);
	$idCarro = $carrinho['idCarrinho'];
    echo $idCarro; 
	
	# consulta ultimo modo de pagamento pelo carrinho
	$consul2 = mysqli_query($con,"SELECT * FROM `modopagamento` WHERE codCarrinho = '$idCarro'");
	$pag = mysqli_fetch_assoc($consul2);
	$modo = $pag['idModoPagamento'];
    echo "<br>".$modo;
	$data1 = date("Y-m-d");
	$data2 = "2040-12-31";

    # inseri dados do modo de pagamento para o pedido fechado
    $inseri_pedidofechado = mysqli_query($con,"INSERT INTO pedidofechado(codUsuario,codModopagamento,data,entrega) VALUES ('$id','$modo','$data1','$data2')");
	
	$select_pedidofechadp = mysqli_query($con, "SELECT * FROM pedidofechado WHERE codUsuario = '$id' ORDER BY idPedidoFechado DESC LIMIT 1 ");
	$pedidoFechadoRow = mysqli_fetch_assoc($select_pedidofechadp);
	$idPedidoFechado = $pedidoFechadoRow['idPedidoFechado'];
	echo "<br>".$idPedidoFechado;
    
    $status_end =  mysqli_query($con,"INSERT INTO `peido_status`(codPedido,codStatus) VALUES ('$idPedidoFechado','1' )");
    header("Location: ".$url_caminho."/minha-conta/pedidos");

?>