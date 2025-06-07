<?php
session_start();
include "conexao.php";

$nome = trim($_POST['nome']);
$email = trim($_POST['email']);
$senha = $_POST['senha'];
$confirma = $_POST['confirma'];

if ($senha !== $confirma) {
    $_SESSION['cadastro_erro'] = "As senhas não coincidem.";
    header("Location: cadastro.php");
    exit();
}

$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

// Evita SQL Injection
$stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nome, $email, $senha_hash);

if ($stmt->execute()) {
    $_SESSION['cadastro_ok'] = "Cadastro realizado com sucesso! Faça login.";
    header("Location: cadastro.php");
} else {
    $_SESSION['cadastro_erro'] = "Erro ao cadastrar: " . $stmt->error;
    header("Location: cadastro.php");
}
exit();
?>