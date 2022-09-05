<div class="titulo">primeira classe</div>

<?php
class Cliente {
    public $nome;
    public $sobrenome;
    public $idade;
    public $andar;
    public $parado = true;
    public $array = [1, 2, 3, 4, 5];

    public function ApresentarNome() {
        return "Nome: {$this->nome} {$this->sobrenome} e idade: {$this->idade} anos <br>";
    }
    public function andar() {
        if ($this->parado) {
            echo 'Estou parado<br>';
        } else {
            echo 'Estou andando<br>';
        }
    }
    public function imprimirNumeros() {
        foreach($this->array as $numero) {
            echo $numero;
        }
    }
}

$cliente1 = new Cliente();
$cliente1->nome = 'newtex';
echo "$cliente1->nome<br>";// acessar diretamente o atributo
$cliente1->sobrenome = 'melhor do momento';
$cliente1->idade = 24;
echo $cliente1->ApresentarNome();
$cliente1->andar();

$c2 = new Cliente();
$c2->nome = 'cibele';
$c2->sobrenome = 'boa de mais';
$c2->idade = 22;
echo $c2->ApresentarNome();
$c2->imprimirNumeros();


?>