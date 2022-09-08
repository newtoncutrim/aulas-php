<div class="titulo">classe abstrata</div>

<?php
abstract class ClasseAbstrata1 {
    public abstract function metodo1();

    protected abstract function metodo2();

}

abstract class ClasseAbstrata2 extends ClasseAbstrata1 {
    public abstract function metodo3();

    public function metodo4() {
        echo "metodo 4 ";
    }
} 

class Concreta1 extends ClasseAbstrata2 {
    public function metodo1() 
    {
        echo "metodo 1 ";
        $this->metodo2();
    }
    protected function metodo2()
    {
        echo "metodo 2 ";
    }
    public function metodo3()
    {   
        $this->metodo1();
        echo " metodo 3 ";
        parent::metodo4();
        "{$this->metodo5('lenda viva')}<br>";
    }
    protected function metodo5($param)
    {
        echo "metodo 5 interno $param <br>";
    }
}

$ex = new Concreta1();
$ex->metodo3();

var_dump($ex instanceof Concreta1);
var_dump($ex instanceof ClasseAbstrata1);
var_dump($ex instanceof ClasseAbstrata2);


?>