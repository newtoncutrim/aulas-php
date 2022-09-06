<div class="titulo">interface</div>

<?php
interface Animal {
    function respirar();// por padrao ja e public e n pode ser privada nem protegida
}

interface Canino extends Animal {
    function Latir();
}

interface Mamifero {
    function mamar();
}

class A implements Canino, Mamifero { //pode ter virgula e implementar outra interface ex canino, animal
    public function respirar()
    {
        return "estou respirando";
    }

    public function Latir()
    {
        return "au au au";
    }

    public function mamar() {
        return "mamar";
    }
}

$classeA = new A();
echo "{$classeA->Latir()}<br>";
echo "{$classeA->respirar()}<br>";
echo "{$classeA->mamar()}";

?>
