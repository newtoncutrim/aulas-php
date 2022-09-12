<?php
require_once('desafio1.php');

class newton extends Pessoa {
    public $email = '@newtex';

    public function __construct($nome, $idade, $email)
    {
        parent::__construct($nome, $idade);
        $this->email = $email;
    }

    public function apresentarUser()
    {       
        $funcao = parent::apresentar();
        return $funcao . "{$this->email}";
    } 
}