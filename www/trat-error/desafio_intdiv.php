<?php
namespace Aritmetica;

class NaoInteiroExeption extends \Exception {

}

function intdiv($a , $b) {
    if ($b == 0) {
        throw new \DivisionByZeroError();
    }

    if ($a % $b > 0) {
        throw new NaoInteiroExeption();
    }
    return $a / $b;
}