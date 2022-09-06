<div class="titulo">HERANÇA</div>

<?php

use Pessoa as GlobalPessoa;

class Pessoa {
    public $nome;
    public $sobrenome;
    public $idade;

    function __construct($nome, $sobrenome, $idade)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->idade = $idade;

        echo "construtor chamado";
    }

    function __destruct()
    {
        echo "destrutor de pessoa chamado";
    }
    
    public function Apresentar() {
        echo "{$this->nome} {$this->sobrenome} e idade: {$this->idade}";
    }
}

class User extends Pessoa {
    public $login;

    function __construct($nome, $sobrenome, $idade, $login)
    {
        $this->login = $login;
        parent::__construct($nome, $sobrenome, $idade);
        echo "usuario criado<br>";
    }

    function __destruct()
    {
        echo "user tchau<br>";
        parent::__destruct();
    }

    public function ApresentarUser() {
        parent::Apresentar();
        echo " $this->login";
    }

}

$usuario = new User('newton', 'cutrim', 24, '@newtex');
$usuario->ApresentarUser();
echo"<br>";
unset($usuario);

?>