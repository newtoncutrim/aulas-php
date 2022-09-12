<div class="titulo">polimorfismo</div>

<?php


abstract class comida {
    public $peso;
}

class Arroz extends comida 
{

}

class Feijao extends comida
{

}

class Sorvete extends comida
{

}

class Pessoa {
    public $peso;

    public function __construct($peso)
    {
        $this->peso = $peso;
    }

    //passando a classe pai comida
    //se passar uma classe que nao e filha diretamente nao funciona ex arroz / sorvete
    public function comer(comida $comida) 
    {
        $this->peso += $comida->peso;
    }
}

$c1 = new Arroz();
$c1->peso = 0.70;

$c2 = new Feijao();
$c2->peso = 0.40;

$p = new Pessoa(80.10);
$p->comer($c1);
$p->comer($c2);

echo $p->peso;
?>