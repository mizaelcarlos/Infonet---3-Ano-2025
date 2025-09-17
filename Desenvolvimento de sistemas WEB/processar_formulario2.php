<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Dados recebidos:</h2>";


    // $nome = trim($_POST['nome'] ?? '');
    // echo "Nome: $nome <br>";


    // $email = $_POST['email'];
    // echo "Email: $email <br>";


    // $senha = $_POST['senha'] ?? '';
    // echo "Senha: $senha";


    // $genero = $_POST['genero'];
    // echo "Gênero: $genero <br>";


    // echo 'Termos:' .  isset($_POST['aceito']) . '<br>';


    // var_dump($_POST['interesses']);

    // foreach ($_POST['interesses'] as $interesse) {
    //     echo $interesse . '<br>';
    // }


    // echo $_POST['estado'];
    // echo "Estado: " . ($estado ? $estado : "Não selecionado") . "<br>";


    // $foto_nome = $_FILES['foto']['name'];
    // $foto_tmp = $_FILES['foto']['tmp_name'];
    // $destino = "uploads/" . basename($foto_nome);
    // move_uploaded_file($foto_tmp, $destino)

    // if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    //     $foto_nome = $_FILES['foto']['name'];
    //     $foto_tmp = $_FILES['foto']['tmp_name'];
    //     $destino = "uploads/" . basename($foto_nome);


    //     if (move_uploaded_file($foto_tmp, $destino)) {
    //         echo "Foto enviada com sucesso: <a href='$destino' target='_blank'>$foto_nome</a><br>";
    //     } else {
    //         echo "Erro ao enviar a foto.<br>";
    //     }
    // } else {
    //     echo "Foto: Nenhuma enviada ou erro no upload.<br>";
    // }

    $data_nascimento = $_POST['data_nascimento'];
    //2025-09-12
    //12/09/2025
    $tempo_em_php = strtotime($data_nascimento);
    $data_formatada = date("d/m/Y", $tempo_em_php);
    echo $data_formatada;
}
