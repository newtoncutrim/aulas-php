<div class="titulo">criar banco</div>

<?php
require_once('conexao.php');

$conexao = novaConexao(null);
$sql = 'CREATE DATABASE curso_php';

$conexao->query($sql);

