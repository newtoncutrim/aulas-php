<div class="titulo">membros estaticos</div>

<?php
class A {
    public $naoEstatica = "nao estatica pdc";
    public static $estatica = "variavel estatica";

    public function mostrarA() {
        echo "{$this->naoEstatica}<br>";
        return "estatica " . self::$estatica;//acessar variavel estatica
    }

    public static function mostrarStatic() {
        // echo "{$this->naoEstatica}"; // nao vai funcionar pois a funcao nao e estatica, uma funcao estatica so acessa estatica
        return "dentro da funcao " . self::$estatica;
    }
}

// $objetoA = new A(); nem precisa fazer instancia masi se quiser pode!
// echo $objetoA->mostrarA()."<br>";
// echo $objetoA->mostrarStatic()."<br>";// nao e tao interessante assim, em baixo ve a forma certa:

echo A::mostrarStatic() . "<br>";// acessar diretamente pela classe
echo A::$estatica = "nova atualizaçao". "<br>";



?>