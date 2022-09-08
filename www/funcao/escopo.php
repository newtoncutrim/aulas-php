<div class="titulo">escopo de funçao</div>

<?php
$variavel = 2;
//troca de valor usando global para buscara avariavel fora do escopo
function trocarValor() {
    global $variavel;
    return $variavel = 7;
}

echo trocarValor();

var_dump(trocarValor());
?>