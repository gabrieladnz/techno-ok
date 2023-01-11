<?php
include("script.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logotipo.ico" type="image/x-icon" />
    <title>Cadastro</title>
</head>
<body>
    <form method="POST" action="cadastro.php">
        <div id="campos">
            <label>Nome:</label>
            <input type="text" name="nome" id="nome" required>
        </div>
        <div id="campos">
            <label>Email:</label>
            <input type="text" name="email" id="email" required>
        </div>
        <div id="campos">
            <label>Senha:</label>
            <input type="password" name="senha" id="password" minlength="6" maxlength="12" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" onkeyup="verificaForcaSenha();" required>
            <span class="lnr lnr-eye"></span>
            <span id="password-status"></span>
        </div>
        <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
    </form>

</body>
</html>