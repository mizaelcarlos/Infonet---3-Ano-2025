<?php
include 'conexao.php';
$id = $_GET['id'];

$sql = "SELECT * FROM usuario where id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$resultado = $stmt->get_result();

while ($linha = $resultado->fetch_assoc()) {
    $nome = $linha['nome'];
    $email = $linha['email'];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Cadastro de usuário</h1>
    <form action="atualizar.php" method="post">
        <label for="">Nome</label>
        <input type="text" name="nome" id="nome" value="<?php echo $nome ?>">
        <label for="">Email</label>
        <input type="text" name="email" id="email" value="<?php echo $email ?>">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <button type="submit">Salvar</button>

    </form>
</body>

</html>