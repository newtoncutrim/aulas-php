<div class="titulo">include com retorno</div>

<?php
$mostrar = require ('retorno_usado.php');
echo "$mostrar";
//diretamente
echo $variavel;

// usando caminho absoluto __dir__ podendo atribuir a varoavel ou nao o require
//$variavel =
require (__DIR__ . "/retorno_nusado.php");
echo "$naousada";