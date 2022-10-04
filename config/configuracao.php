<?php
	# Configurações mais para tags HTML (meta, javascrpit, css)
	include_once 'config.php';
?>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Andre, Cecília e Eduarda">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="copyright" content="© <?php echo date("Y")." ".$_SESSION['titulo']; ?>">
		<meta http-equiv="pragma" content="no-cache">
    	<meta name="robots" content="index,follow">
    	<meta http-equiv="content-language" content="pt-br, pt">


    	<meta name="msapplication-navbutton-color" content="#195128">
    	<meta name="msapplication-TileColor" content="#C25669">
    	<meta name="apple-mobile-web-app-capable" content="yes">
    	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    	<meta name="theme-color" content="#C25669">

		<link rel="shortcut icon" href="<?php echo $url_caminho ?>/theme/img/logos/favicon.ico">


		<!-- CSS only -->

		<!-- <link rel="stylesheet" type="text/css" href="<?php echo $url_caminho ?>/theme/css/bootstrap.min.css"> -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="<?php echo $url_caminho ?>/theme/css/animate.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $url_caminho ?>/theme/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $url_caminho ?>/theme/css/all.css">
		
		<!-- JavaScript OFFICE-->
		<!-- <script type="text/javascript" src="<?php echo $url_caminho ?>/theme/js/jquery-3.6.0.min.js"></script>
		<script src="<?php echo $url_caminho ?>/theme/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="<?php echo $url_caminho ?>/theme/js/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="<?php echo $url_caminho ?>/theme/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->

		<!-- JavaScript -->
  
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		

		<script type="text/javascript" src="<?php echo $url_caminho ?>/theme/js/loja.js"></script>