<?php
	# Configurações para mais o PHP
	
	session_start(); # Inicio das sessões

	# Cookies do site
	setcookie('INFOMAIS',md5('INFOMAIS'), time()+(4*36000)*9,'/');
	setcookie('loja',md5('loja'), time()+(4*36000)*9,'/');

	$url = "//$_SERVER[HTTP_HOST]".$_SERVER["REQUEST_URI"];
	$url_host = "//$_SERVER[HTTP_HOST]"."/loja";
	$url_caminho = $url_host;

	$_SESSION["titulo"] = "INFOMAIS +";
	
	include_once "conexao.php";

	function get_client_ip() {
	    $ipaddress = '';
	    if (isset($_SERVER['HTTP_CLIENT_IP']))
	        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
	    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
	        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
	    else if(isset($_SERVER['HTTP_X_FORWARDED']))
	        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
	    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
	        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
	    else if(isset($_SERVER['HTTP_FORWARDED']))
	        $ipaddress = $_SERVER['HTTP_FORWARDED'];
	    else if(isset($_SERVER['REMOTE_ADDR']))
	        $ipaddress = $_SERVER['REMOTE_ADDR'];
	    else
	        $ipaddress = 'UNKNOWN';
	    return $ipaddress;
	}
	if (isset($_SESSION['user'])) {
		$_SESSION['user'];
		$_SESSION['UserSobrenome'];
		$_SESSION['email'];
		$_SESSION['celular'];
		$_SESSION['telefone'] ;
	}
	include_once __DIR__.'/../functions/list_select_estado.php';
	include_once __DIR__.'/../functions/ano.php';
	function produto_tavez_goste($con){

	}
?>