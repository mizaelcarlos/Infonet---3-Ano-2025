<?php
$email = $_POST['email'];

// echo var_dump(empty($email));


if (empty($email)) {
    echo 'Por favor, preencha o campo de email.';
} else {
    echo "Email recebido: $email";
}
