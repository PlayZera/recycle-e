<?php
session_start()
?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pontuação</title>

    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="cadastro.css">
    <link rel="shortcut icon" href="icone.png">
</head>
<body>
    <header>
        <h1>Consulta de Pontuação</h1><br>
    </header>

    <main>
        
        
        <h1>Olá <?php echo $_SESSION['nome'];?> de RFID: <?php echo $_SESSION['rfid'];?>, tudo bem com você?</h1><br>
        <h1>Sua pontuação é de <?php echo $_SESSION['pont'];?> pts</h1><br>
        <h1>Quanto mais lixo você jogar de maneira correta melhor é a sua pontuação!</h1><br>
        
        <a href="index.html">Voltar a página incial</a>
        
        
    </main>
    
</body>
</html>