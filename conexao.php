<?php 
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "recycle";

	$conexao = mysqli_connect($host, $user, $password, $db) or die("Não foi possível se conectar com a database");
	
?>