<?php
	function list_select_estado($con){
		$consulta_estado = mysqli_query($con,"SELECT idEstado,nomeEstado,uf FROM `estado` ORDER by nomeEstado");
		$num_total_estado = mysqli_num_rows($consulta_estado);
		while ($list_select_estado = mysqli_fetch_assoc($consulta_estado)) {
			$idEstado = $list_select_estado['idEstado'];
			$nomeEstado = $list_select_estado['nomeEstado'];
			$ufEstado = $list_select_estado['uf'];
			echo "<option value='$idEstado'>$nomeEstado ($ufEstado)</option>";
		}
	}
?>