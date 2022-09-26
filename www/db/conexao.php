<?php
function novaConexao($banco = 'curso_php') {
    $servidor = 'database';
    $usuario = 'root';
    $senha = '1234';

    $conexao = mysqli_connect($servidor, $usuario, $senha);

    if($conexao->conect_error) {
        die('erro' . $conexao->conect_error); 
        // echo('erro' . $conexao->conect_error);
        // exit();
    }
    return $conexao;
}