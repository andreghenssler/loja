<?php
	function ano(){
		$year = date("Y")+1;
		$year_final = $year+12;
		for ($i=$year; $i <=$year_final ; $i++) { 
			echo '<option value="'.$i.' ">'.$i.'</option>';
		}
	}

	function meses_ano(){
		for ($i=1; $i <=12 ; $i++) {
			echo '<option value="'.$i.'">'.$i.'</option>';
		}
	}
	function gerador(){
		$padrao = "03399.85301 ";
		$um = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).".";
		$dois = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9)." ";
		$tres = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).".";
		$quatro = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9)." ";
		$quinto = "2 ";
		$sexto = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9)." ";

		echo  $padrao.$um.$dois.$tres.$quatro.$quinto.$sexto;

	}
	
?>
