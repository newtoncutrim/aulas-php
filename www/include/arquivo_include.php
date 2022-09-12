<?php

echo "carregando arquivo include";

$soma = function($a, $b) {return $a + $b;};

if (!function_exists('imprimir')) {
    function imprimir()
    {
        echo "estou aqui";
    }
}