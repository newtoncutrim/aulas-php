<div class="titulo">funcao anonima</div>

<?php
$anonima = function ($a, $b) {
    return $a + $b;
};

echo $anonima(2, 4).'<br>';

function somar($a, $b, $op, $funcao) {
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado<br>";

}
somar(2, 3, '+', $anonima);

$multiplicar = function ($a, $b) {
    return $a * $b;
};
somar(2, 5, '*', $multiplicar);

function dividir($a, $b) {
    return $a / $b;
}

somar(2, 3, '/', dividir);