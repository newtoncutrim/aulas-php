<div class="titulo">metodos magicos</div>

<?php


class Pessoa
{
    public $nome = 'p';
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

    // toda vez que chamar uma string
    public function __toString()
    {
        return "{$this->nome} {$this->idade}";
    }

    //le atributos nao declarados
    public function __get($name)
    {
        return "nao declarado $name";
    }

    // ser chamado quando altera um atributo nao declarado
    public function __set($name, $valor)
    {
        return "editar nao declarado {$name} {$valor}";
    }
    public function apresentar()
    {
        return $this . "<br>";
    }
    //metodo que nao existe
    public function __call($name, $arguments)
    {
        echo "tentando executar $name";
        echo "com os parametros" . print_r($arguments);
    }
}

$pessoa = new Pessoa('newton', 24);
echo $pessoa->apresentar();
// nao declarado nomeCompleto __get
echo $pessoa->nomeCompleto;

//alterar algo que nao existe __set
echo $pessoa->nomeCompleto = 'mudae<br>';
echo $pessoa->nomeCompleto;

//metodo que nao existe __cal
$pessoa->exc(1, 'teste', true, );

?>