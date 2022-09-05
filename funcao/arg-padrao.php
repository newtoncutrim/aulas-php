<div class="titulo">argumento padrao</div>

<?php
function padrao($beber, $comer = 'pao') {
    echo"comer {$comer} <br>";
    echo "beber {$beber}<br>";

}
padrao('agua');
//nunca colocar o segundo argumento sem parametro pois para introduzir o outro paramentro tem que colocar o primeiro ex:
// function padrao2($beber = 'refri', $comer)
// {
//     echo "comer {$comer} <br>";
//     echo "beber {$beber}<br>";
// }
// padrao2();

function padrao2($beber = 'refri', $comer = 'pao')
{
    echo "comer {$comer} <br>";
    echo "beber {$beber}<br>";
}
padrao2();

//declaraçao de tipos parametros de uma funçao

function somar(int $a, int $b) {
    return $a + $b;
}
echo somar(2, 4);

// coverte para interio o resultado da funcao
function somar1(float $a,float $b): int {
    return $a + $b;
}
echo somar1(2.9, 8.0);