<div class="titulo">retorno funcao</div>

<?php
function somar($a) {
    return function ($b) use ($a) {
       return $a + $b;
    };
}
echo somar(3)(4);

$variavel = somar(9);
echo"<br>";
echo $variavel(10) . "<br>";
?>