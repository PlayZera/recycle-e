<?php

include('conexao.php');

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$rfid = $_POST['rfid'];
$cep = $_POST['cep'];

$sql = "INSERT INTO cadastro (nome, telefone, rfid, cep) VALUES ('$nome', '$telefone', '$rfid', '$cep'";

echo "<h1></h1>Cadastro foi com Sucesso!<h1>";
echo "<h1>$nome</h1><br>";
echo "<h1>$telefone</h1><br>";
echo "<h1>$rfid</h1><br>";
echo "<h1>$cep</h1><br>";

$conexao->close();
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrando...</title>
    <link rel="stylesheet" href="cadastro.css">
    <link rel="shortcut icon" href="icone.png">
</head>
<body>
    
</body>
</html>