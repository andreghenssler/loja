<?php
	#include_once '../config/config.php';

	$consulta_1 = mysqli_query($con,"SELECT * FROM produto"); /* Consulta total de Produtos */
	$numero_consulta1 = mysqli_num_rows($consulta_1);
	$rand1 = rand(0,$numero_consulta1);
	$rand2 = rand(0,$numero_consulta1);
	$rand3 = rand(0,$numero_consulta1);
	$rand4 = rand(0,$numero_consulta1);
	$consulta_2 = mysqli_query($con,"SELECT * FROM produto LIMIT 4/*JOIN marca ON marca.idMarca = produto.codMarca JOIN categoria_produto ON categoria_produto.codProduto = produto.idProduto JOIN categoria ON categoria.idCategora = categoria_produto.codCategoria*/ "); /* Consulta te faz ligações com as demais tabelas */
	$numero_consulta2 = mysqli_num_rows($consulta_2);
	while($row_produto = mysqli_fetch_assoc($consulta_2) ){
		#echo $row_produto['nomeProduto'];
		?>
		<div class="destaque-1" title="<?php echo $row_produto['nomeProduto']; ?>">
			<a href="produto/?id=<?php echo $row_produto['idProduto'] ?>">
				<div>
					<?php
						if ($row_produto['desconto'] == "") {
							// code...
						}else{
							echo '<div class="desconto">
									<div class="src__WrapperDownArrow-sc-1jbhugd-22 gpDQjr"><svg viewBox="0 0 12 12" aria-labelledby="arrowDiscountIcon arrowDiscountDesc" width="10" height="10" fill="#fff"><path fill="inherit" d="M.813 5.647a.5.5 0 01.707 0L5.5 9.628V1.166a.5.5 0 111 0v8.461l3.98-3.98a.5.5 0 01.637-.057l.07.058a.5.5 0 010 .707l-4.833 4.832a.508.508 0 01-.019.018l-.027.022a.379.379 0 01-.044.031l-.03.017a.363.363 0 01-.08.034.398.398 0 01-.08.018.45.45 0 01-.063.006H5.99a.503.503 0 01-.061-.005l.072.005a.502.502 0 01-.151-.023l-.023-.008-.015-.006a.496.496 0 01-.048-.022l-.015-.01-.01-.004a.498.498 0 01-.051-.037l-.017-.015a.232.232 0 01-.025-.022L.813 6.354a.5.5 0 010-.707z"></path></svg></div>
									<span class="src__Text-sc-154pg0p-0 src__DiscountRate-sc-1jbhugd-23 fbjRgl">'.$row_produto['desconto'].'%</span>
								</div>';
						}
					?>
					<div class="img-produto">
						<img src="<?php echo $url_host; ?>/theme/img/produto/<?php echo $row_produto['imagemDestagada']; ?>">
					</div>
					<div class="title-produto">
						<p>
							<?php
								if (strlen($row_produto['nomeProduto'])>63) {
									$adiciona_pootons = "...";
								}else{
									$adiciona_pootons = "";
								}
								echo substr($row_produto['nomeProduto'], 0,63).$adiciona_pootons;
							?>
						</p>
					</div>
					<div class="valores">
						<?php
							if ($row_produto['desconto']=="") {
								echo '<div class="valor-2"> R$'.$row_produto["valor"].'</div>';
							}else{
								echo '<div class="valor-1"> <del> R$ '.$row_produto["valor"].'</del>
						</div>
						<div class="valor-2">R$ '.$row_produto["valorDesconto"].'</div>';
							}
							
						?>
						
						<div class="vezes-parcelado">
							<?php
								if ($row_produto['parceladoAte']>1) {
									echo "em ".$row_produto['parceladoAte']."x de R$ ".$row_produto['parceladoValor'];
								}else{
									echo "em 1x de R$ ".$row_produto['valor'];
								}
							?>
							
						</div>
					</div>
				</div>
			</a>
		</div>
		<?php
	}

?>

