<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="cadastro.css">
    <link rel="shortcut icon" href="/assets/icone.png">
    

</head>
<body>
    <div id="land">
        <div id="container">
            <header>
                <h1>Página de cadastro</h1>
            </header>

            <main>
                <div class="container">
                    <div>
                        <h4 class="title">Informções para cadastro</h4>
                        <form method="POST">
                            <div class="omrs-input-group">
                                <label class="omrs-input-underlined">
                                  <input required name="nome">
                                  <span class="omrs-input-label">Nome</span>
                                    <span class="omrs-input-helper">Informe seu nome completo</span>
                               
                                </label>
                            </div>
                            <div class="omrs-input-group">
                                <label class="omrs-input-underlined">
                                  <input required name="telefone">
                                  <span class="omrs-input-label">Telefone</span>
                                    <span class="omrs-input-helper">Informe seu número de telefone</span>
                               
                                </label>
                            </div>
                            <div class="omrs-input-group">
                                <label class="omrs-input-underlined">
                                  <input required name="rfid">
                                  <span class="omrs-input-label">RFID</span>
                                    <span class="omrs-input-helper">Informe o código do seu RFID</span>
                               
                                </label>
                            </div>

                            <div class="omrs-input-group">
                                <label class="omrs-input-underlined">
                                  <input required name="cep">
                                  <span class="omrs-input-label">CEP</span>
                                    <span class="omrs-input-helper">Informe seu CEP</span>
                               
                                </label>
                            </div>
                            <input type="submit" value="Enviar"/>
                        </form>

                        <a href="/index.html">Voltar para página inicial</a>



                    </div>
                </div>
            </main>

        </div>

    </div>
    
</body>
</html>