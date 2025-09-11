<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02</title>
</head>

<body>
    <?php
    $label01 = 'nome';
    ?>
    <h1>Formulário de cadastro</h1>
    <form action="processar_formulario.php" method="post">
        <label for=""><?php echo $label01 ?></label>
        <input type="text" name="nome" id="nome">
        <br>
        <label for="">Idade</label>
        <input type="text" name="idade" id="idade">
        <br>
        <button type="submit">Salvar</button>
    </form>
    <footer>
        <?php echo date('d/m/Y') ?>
    </footer>
</body>

</html>