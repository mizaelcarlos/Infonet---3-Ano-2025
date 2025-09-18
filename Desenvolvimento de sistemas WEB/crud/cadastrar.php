<?php
include 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuario (nome,email,senha) VALUES (?,?,?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $nome, $email, $senha);

if ($stmt->execute()) {
    echo 'Usuário cadastrado com sucesso!';
} else {
    echo 'Error: ' . $stmt->error;
}
