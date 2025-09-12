<?php
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$idade = $_POST['idade'];

echo "Olá, $nome $sobrenome Você tem $idade anos.";
echo 'Olá,' . $nome . $sobrenome . 'Você tem $idade anos.';
