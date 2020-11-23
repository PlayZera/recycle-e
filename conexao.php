<?php
$host = "0.0.0.0";
$username = "root";
$password = "";

$conexao = mysqli_connect($host, $username, $password) or die('Erro de conexão com o banco de dados!');
$banco = mysqli_select_db($conexao, 'recycle') or die("Não foi possível selecionar o banco de dados!");
?>
