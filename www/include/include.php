<?php

// include('arquivo_include.php');
// echo "<br>";
// echo $soma(5, 4);

function chamarArquivo() {
    include('arquivo_include.php'); //por escopo so funciona dentro da funcao
    echo "<br>";
    echo $soma(3, 3);
    echo "<br>";
    imprimir();
}

chamarArquivo();
