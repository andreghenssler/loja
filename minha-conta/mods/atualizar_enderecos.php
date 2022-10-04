<?php
	include '../../config/config.php';
	
	$pagina = filter_input(INPUT_POST, 'pagina', FILTER_SANITIZE_NUMBER_INT);
	$quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);
	$id_conexao = filter_input(INPUT_POST, 'id_conexao', FILTER_SANITIZE_NUMBER_INT);
	$inicio = ($pagina * $quantidade) - $quantidade;
	$result_usuario = "SELECT * FROM `endereco` JOIN endereco_pricipal on endereco_pricipal.idEnderecoPrincipal = endereco.principal JOIN cidade on cidade.idCidade = endereco.codCidade JOIN estado on estado.idEstado = cidade.codUF JOIN usuario on usuario.idUsuario = endereco.codUsuario WHERE codUsuario = '$id_conexao' LIMIT $inicio, $quantidade";
	$resultado_usuario = mysqli_query($con, $result_usuario);
	$numeros_enderecos = mysqli_num_rows($resultado_usuario);
	if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
		while($row_endereco = mysqli_fetch_assoc($resultado_usuario)){
			$checked_principal = $row_endereco['idEnderecoPrincipal'];
			if ($checked_principal == 1) {
				$checked = "checked";
			}else{
				$checked = "";
			}
?>
<div class="col-md-5 list-enderecos">
	<div class="col-md-12">
		<input type="hidden" name="conexao_alter" id="conexao_alter" value="<?php echo $row_endereco['idEndereco'] ?>">
		<p><?php echo $row_endereco['rua'].", ".$row_endereco['numero']?></p>
		<p><?php echo $row_endereco['bairro'].", ".$row_endereco['nomeCidade'].", ".$row_endereco['uf'] ?></p>
	</div>
	<div class="col-md-12">
		<input type="radio" name="" <?php echo $checked ?> disabled> Endereco principal
	</div>

	<div class="col-md-12 row">
		<div class="col-md-6">
			<?php
				if ($numeros_enderecos==1) {
					
				}else{
					echo '<a  class="btn btn-primary animation" id="excluir_endereco">Excluir</a>';
				}
			?>
		</div>
		<div class="col-md-6">
			
		</div>
	</div>
</div>
<?php
		}
	}else{echo '<div class="alert alert-info" alert="role">Você não possui endereços cadastrado</div>';}
?>