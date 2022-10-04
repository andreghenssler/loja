<?php

	/* Conexão com o Banco de dados Normal, mas tarde será feito por PDO */
/*
	$dbtype   = "mysql";
	$host     = "localhost";
	$port     = "3306";
	$user     = "root";
	$password = "";
	$db       = "loja";

	$conn = mysqli_connect($host,$user,$password) or ("Não foi possivél se conectar");


	if(mysqli_query($conn,"create database $db")){
	    echo 'Banco de dados criado';
	}else{
		$con = mysqli_connect($host,$user,$password,$db) or ("Não foi possivél se conectar");
	}
	
	mysqli_close($conn);
// ##/####
	*/
	$dbtype   = "mysql";
		$host     = "108.167.151.90";
		$port     = "3306";
		$user     = "henssl03_root";
		$password = "I088v7Q0mZbl";
		$db       = "henssl03_loja";

		$conn = mysqli_connect($host,$user,$password) or ("Não foi possivél se conectar");


		if(mysqli_query($conn,"create database $db")){
		    echo 'Banco de dados criado';
		}else{
			$con = mysqli_connect($host,$user,$password,$db) or ("Não foi possivél se conectar");
		}
		
		mysqli_close($conn);
/*	*/
?>