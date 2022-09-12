<?php

$variavel = "estou definida";

//validacao para funcao ser carregada mais de uma vez
if (!function_exists('exibir')) {
    function exibir($a, $b) {
        return $a + $b;
    }
    
}

function exibir2($a, $b)
{
    return $a + $b;
}