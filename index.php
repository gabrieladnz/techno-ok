<?php
include("script.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="shortcut icon" href="img/logotipo.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Cadastro</title>
</head>

<body>
    <nav>
        <a href="https://github.com/gabrieladnz" target="_blank"><button type="button" id="botGit">gabrieladnz <span class="bi bi-github"></span></button></a>
        <a href="https://www.linkedin.com/in/gabrieladnz/" target="_blank"><button type="button" id="botLinkd"><span class="bi bi-linkedin"></span></button></a>
        <a href="mailto:gabrieladnz.dev@gmail.com?" target="_blank"><button type="button" id="botEmail"><span class="bi bi-envelope-fill"></span></button></a>
    </nav>

    <div class="container">
        <div class="form-image">
            <img src="img/form.svg">
        </div>
        <div class="form">
            <form method="POST" action="cadastro.php" target="contato">
                <iframe style="display:none;" name="contato" src="cadastro.php"></iframe>
                <div class="form-header">
                    <h1>Cadastre-se</h1>
                </div>
                <div class="campos">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" placeholder="Insira seu nome" required>
                </div>
                <div class="campos">
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email" placeholder="Insira seu email" required>
                </div>
                <div class="campos">
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="password" placeholder="Insira sua senha" minlength="6" maxlength="12" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" onkeyup="verificaForcaSenha();" required>
                    <span id="olhos" class="lnr lnr-eye" onclick="espiando()"></span>
                    <span id="password-status"></span>
                </div>
                <div class="botao">
                    <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
                </div>
            </form>
        </div>
    </div>

</body>

</html>