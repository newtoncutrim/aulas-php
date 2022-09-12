<?php namespace Outro\Nome; ?>
<div class="titulo">use\as</div>

<?php
echo __NAMESPACE__ . '<br>';

require_once('use_arquivo.php');

function soma($a, $b)
{
    return $a . $b;
}

class Classe
{
    public $var;

    function func()
    {
        echo '<br>'. __NAMESPACE__ .'<br>'. __CLASS__ . '<br>' .__METHOD__ . '<br>';
    }
}

echo \Nome\Bem\Grande\constante . '<br>';

use const \Nome\Bem\Grande\constante;
echo constante . '<br>';

use \Nome\Bem\Grande as apelido;
echo soma(1, 2) . '<br>';
echo apelido\soma(1, 2) . '<br>';

// passando funcao para namespace com apelido
use function \Nome\Bem\Grande\soma as abreviacao;

echo abreviacao(1, 3);

$a = new Classe();
$a->func();

$b = new \Nome\Bem\Grande\Classe();
$b->func();

//usando apelido com as
$c = new apelido\Classe();
$c->func();

use \Nome\Bem\Grande\Classe as D;
$d = new D();
$d->func();
