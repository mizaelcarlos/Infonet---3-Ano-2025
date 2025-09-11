<?php

$numero = 10;
$valor = 10.54;
$ligado = true; //boolean
$LIGADO = false;
$Ligado = false;



$nome = 'Theo Hernandez';
$idade = 18;
//echo 'A idade é: ' . $idade . ' O nome do rapaz é: ' . $nome;
//echo "A idade é:  $idade  O nome do rapaz é:  $nome";


// if ($idade >= 18) {
//     echo 'Maior de idade';
// } else {
//     echo 'Menor de idade';
// }

// $tamanho = count($nomes);

// for ($i = 0; $i < $tamanho; $i++) {
//     echo $nomes[$i];
// }

$nomes = ['Henzo', 'Felipe', 'Lidia'];

foreach ($nomes as $nome_atual) {
    echo '<p style="color:blue">' . $nome_atual . '<p>';
}
