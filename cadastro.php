<?php
include_once("bd/conexao.php");

// recebendo dados
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

// inserindo no bd
$cadastro = "INSERT INTO usuarios(nome, email, senha) VALUES('$nome', '$email', '$senha', NOW())";
$resultadoCadastro = mysqli_query($con, $cadastro)
?>