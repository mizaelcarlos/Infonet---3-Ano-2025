<?php
include 'conexao.php';

$sql = "SELECT * FROM usuario";

$resultados = $conn->query($sql);

echo '<table style="border: solid 1px; color:green;">';
echo '<tr>';
echo '<th>ID</th>';
echo '<th>NOME</th>';
echo '<th>EMAIL</th>';
echo '<th>OPÇÕES</th>';
echo '</tr>';
while ($linha = $resultados->fetch_assoc()) {
    echo '<tr>';
    echo '<td>' . $linha['id'] . '</td>';
    echo '<td>' . $linha['nome'] . '</td>';
    echo '<td>' . $linha['email'] . '</td>';
    echo '<td><a href="editar.php?id=' . $linha['id'] . '">Editar</a></td>';
    echo '<td><a href="excluir.php?id=' . $linha['id'] . '">Excluir</a></td>';
    echo '</tr>';
}
echo '</table>';
