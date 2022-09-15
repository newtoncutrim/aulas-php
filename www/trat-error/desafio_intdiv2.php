<div class="titulo">desafio intdiv()</div>

<?php
require_once 'desafio_intdiv.php';
use function \Aritmetica\intdiv;


try {
    echo intdiv(8, 3);
    
} catch (\Aritmetica\NaoInteiroExeption $e) {
    echo "resultado nO E numero inteiro<br>";
}

try {
    echo intdiv(8, 0);
} catch (DivisionByZeroError $e) {
    echo "divisao por zero<br>";
}

echo intdiv(8, 2) . '<br>';
echo \intdiv(8, 2) . '<br>';


?>