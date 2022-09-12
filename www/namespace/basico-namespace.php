<?php

namespace contexto; ?>

<div class="titulo">basico namespace</div>

<?php

echo __NAMESPACE__ . '<br>'; 
const constante1 = 123;
define('contexto\constante2', 234);
define(__NAMESPACE__ .'\constante3', 345);
define('outro_contexto\constante4', 456);

echo constante1 . '<br>';
echo constante2 . '<br>';
// echo contexto\constante3 . '<br>'; 
echo \contexto\constante3 . '<br>'; 
echo constant(__NAMESPACE__ . '\constante3');
echo \outro_contexto\constante4 . '<br>'; 

function soma($a, $b) {
    return $a + $b;
}

echo soma(2, 3);
echo \contexto\soma(2, 3);

//conflito api php
function strpos($str, $texto) {
    echo "buscando texto {$texto} em {$str}<br>";
    return 1;
}

//nao acessou minha funçao
echo strpos('texto generico', 'generico');
// o de baixo forma certa de acessar
echo \strpos('texto generico', 'generico');



