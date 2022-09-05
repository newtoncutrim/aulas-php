<div class="titulo">foreach</div>

<?php

$dias_semana = [
    1 => 'domingo',
    'segunda',
    'terça',
    'quarta',
    'quinta',
    'sexta',
    'sabado'
];

foreach ($dias_semana as $indice => $valor) {
    echo"$indice $valor  ";
}

$numeros = [
    1, 2, 6, 8, 10
];

// esse & pega o endereço de memoria para alterar o array.
foreach ($numeros as &$numero) {
    $numero *= 2;
    echo "$numero <br>";
}