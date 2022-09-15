<div class="titulo">erro personalizado</div>

<?php
ini_set('display_erros', 1);
// echo 4 / 0;

error_reporting(E_ERROR); //tira o warning so deixa erro
// echo 4 / 0;

error_reporting(E_ALL);// todos erros
// echo 4 / 0;

error_reporting(~E_ERROR);// nao erros
// echo 4 / 0;

include "arquivo-inexistente.php";//erro de include

//filtrando erros
function FiltrarMensagem($errno, $string) {
    $texto = 'include';
    // $texto = 'by zero';
    // $texto = 'Undefined';


    return !!stripos(" $string", $texto);
}

set_error_handler('FiltrarMensagem', E_WARNING);

echo "<hr>";
include "arquivo-inexistente.php";//erro de include
echo $a / 0;

restore_error_handler();//restaurando erros