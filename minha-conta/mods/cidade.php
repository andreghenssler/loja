<?php
	include '../../config/config.php';
	$id_categoria = $_REQUEST['id_categoria'];

	$consul_cidade = "SELECT * FROM `estado` JOIN cidade on cidade.codUF = estado.idEstado WHERE cidade.codUF = '$id_categoria'";
	$consul_cidade_con = mysqli_query($con,$consul_cidade);

	while ($row = mysqli_fetch_assoc($consul_cidade_con)) {
		$sub_categorias_post[] = array(
			'id' => $row['idCidade'],
			'nome_sub_categoria' => $row['nomeCidade'],
		);
	}
	echo(json_encode($sub_categorias_post));
?>