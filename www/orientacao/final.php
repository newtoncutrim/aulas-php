<div class="titulo">modificador final</div>

<?php

use Classe as GlobalClasse;

abstract class Abastrata {
    public final function metodo() {
        echo "nao pode ser alterado";
    }
}

class Concreta extends Abastrata {
    public function metodo2 () {
        echo "funciona normal";
    }

    //nao pode modificar a funçao com final

    // public function metodo() {
    //     nao tem como mudar
    // }
}

$concreta = new Concreta();
$concreta->metodo2();

final class Imudavel {
    public $att = "valor";
}

class Classe extends Concreta {
    public $att2 = "valor";
}

$Classe = new Classe();
$Classe->att2;

// classe final nao permite herança 
?>