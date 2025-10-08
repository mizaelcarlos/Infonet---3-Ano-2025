<?php
include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$sql = "UPDATE USUARIO SET nome = ?, email = ? where id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $nome, $email, $id);
$stmt->execute();

header("Location: listar.php");
