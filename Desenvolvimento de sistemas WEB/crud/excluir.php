<?php
include 'conexao.php';
$id = $_GET['id'];

$sql = "DELETE FROM USUARIO where id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i",  $id);
$stmt->execute();

header("Location: listar.php");
