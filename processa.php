<?php

include "conexao.php";

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$rfid = $_POST['rfid'];
$cep = $_POST['cep'];

$sql = "INSERT INTO cadastro (nome, telefone, rfid, cep) VALUES ('$nome', '$telefone', '$rfid', '$cep')";
$sql = mysqli_query($conexao, $sql);

connection_aborted();
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrando...</title>

    <link rel="stylesheet" href="success.css">
    <link rel="shortcut icon" href="icone.png">
</head>
<body>
    <div id="bg">
        <div id="Conteiner">
            <h1>Cadastro feito com Sucesso!</h1><br>

            <a href="index.html"><span></span> <strong>Clique aqui para voltar a página incial</strong></a>
        </div>
            <?php
                echo "<h1>Parabéns $nome, agora você está pronto para jogar!</h1><br>";
            ?>
    </div>
    
</body>
</html>