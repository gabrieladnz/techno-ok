<?php
include_once("bd/conexao.php");

// recebendo dados
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$query_select = "SELECT email FROM usuarios WHERE email = '$email'";
$select = mysqli_query($con, $query_select);
$array = mysqli_fetch_array($select);
// verificando variável
$emailarray = isset($array['email']);

if ($emailarray == $email) {
    echo "<script language='javascript'>";
    echo "alert('Email já cadastrado no sistema.')";
    echo "</script>";
    die();
} else {
    // inserindo dados no bd
    $cadastro = "INSERT INTO usuarios(nome, email, senha) VALUES('$nome', '$email', '$senha')";
    $resultadoCadastro = mysqli_query($con, $cadastro);

    echo "<script language='javascript'>";
    echo "alert('Cadastro realizado com sucesso!')";
    echo "</script>";
}