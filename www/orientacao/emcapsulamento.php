<div class="titulo">modificadores de acesso</div>

<?php
class A {
    public $publico = 'publico';
    protected $protegido = 'protegido';
    private $privado = 'privado';

    public function mostrarA () {
        // $this->privada(); jeito de chamar funcao dentro da class
        return "{$this->publico} {$this->protegido} {$this->privado}";
    }

    protected function tranmitirHeranca() {
        echo "serei transmitido por herança";
    }

    private function privada() {
        echo "eu nao vou imprimir";
    }
}

$a = new A();
echo $a->mostrarA();
echo "<br>";
//$a->privada();// nao consegue pois e privada somente a classe pose ver 

class B extends A {
    public function mostrarB()
    {   
        parent::tranmitirHeranca();// so via herança nao consegue instanciar!
        echo "|B: {$this->publico}";// todos verao
        echo "|B: {$this->protegido}"; //so os filhos verao esse
        // echo "{$this->privado}"; por ser privado nao sera exibido
    }
}

$b = new B();
echo "<br>";
echo $b->mostrarA();
echo "<br>";
$b->mostrarB();
?>