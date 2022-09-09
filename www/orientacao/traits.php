<div class="titulo">trait recursos novos</div>

<?php
trait Validacao {
    public $att = "a";
    public function valida($str) {
        return isset($str) && $str != '';
    }
}

trait validamelhor {
    public $att2 = "b";
    private $c = "privado";
    public function validamelhor($str) {
        return isset($str) && trim($str);
    }
}

class validate {
    use Validacao, validamelhor;

    public function imprimirC () {
        echo "{$this->c}";
    }
}

$validate = new validate();
var_dump( $validate->valida(' '));
echo "<br>";
var_dump($validate->validamelhor(' '));
echo "<br>";
echo $validate->att,
$validate->att2;
echo "<br>";
$validate->imprimirC();

// bom usar para reciclar codido
?>