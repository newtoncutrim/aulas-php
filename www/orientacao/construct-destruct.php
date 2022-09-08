<div class="titulo">construct-destruct</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade)
    {
        echo "eu sou o construtor<br>";
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct()
    {
        echo "e morreu";
    }

    public function apresentar () {
        return "meu nome e: {$this->nome} com {$this->idade} anos<br>";
    }
}

$pessoa = new pessoa('newton', 24);
 echo $pessoa->apresentar();

unset($pessoa);
?>