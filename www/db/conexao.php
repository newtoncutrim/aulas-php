<?php
function novaConexao($banco = 'curso_php') {
    $servidor = 'localhost:8080';
    $usuario = 'root';
    $senha = '1234';

    $conexao = new PDO('mysql:host=localhost;dbname=db', $usuario, $senha);

    if($conexao->conect_error) {
        die('erro' . $conexao->conect_error); 
        // echo('erro' . $conexao->conect_error);
        // exit();
    }
    return $conexao;
}