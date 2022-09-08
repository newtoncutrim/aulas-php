<div class="titulo">desafio 7 erros</div>
<?php
interface Template 
{
    function metodo1();
    function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template {
    public function metodo3() {
        echo "estou funcionando 3<br>";
    }
}

class Classe extends ClasseAbstrata {
    public function metodo1()
    {
        
    }
    public function metodo2($parametro)
    {
        
    }
    function __construct($parametro) {
        
    }

}

$exemplo = new Classe('.');
$exemplo->metodo3();
?>