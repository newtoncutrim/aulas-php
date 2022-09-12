<?php namespace Primeiro;
class Pessoa
{
    public $idade = 12;
    public $nome = 'radical';

    public function __construct($nome, $idade)
    {
        $this->idade = $idade;
        $this->nome = $nome;
    }

    public function apresentar()
    {
        return "{$this->nome} {$this->idade}";
    }
}
