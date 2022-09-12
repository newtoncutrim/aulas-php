<div class="titulo">require_once</div>

<?php
require ('arquivo-once.php');
$variavel = "redefinida";
// garante que o arquivo sera chamado uma unica vez !
//se usar 2 imcludes a variavel reinicializa voltando ao estado original com valor definido antigo 
require_once ('arquivo-once.php');
echo $variavel;
echo exibir(3, 7);