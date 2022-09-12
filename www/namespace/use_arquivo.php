<?php namespace Nome\Bem\Grande; ?>

<?php
echo __NAMESPACE__ . '<br>';

const constante = 123;

function soma($a, $b) {
    return $a + $b;
}

class Classe {
    public $var;

    function func() {
        echo '<br>' . __NAMESPACE__ . '<br>' . __CLASS__ . '<br>' . __METHOD__ . '<br>';
    }
}