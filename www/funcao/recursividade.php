<div class="titulo">recursiva / desafio</div>

<?php
function somaDoida($numero) {
    $soma = 0;
    for ($i = 1; $i <= $numero; $i ++) {
        $soma = $soma + $i;
    }
    return $soma;
}



// desafio impressao por nivel ">>>"
 $array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];

 function impressaoArray($array, $nivel = '>') {
    foreach ($array as $imprimir) {
        if(is_array($imprimir)) {
            impressaoArray($imprimir, $nivel . $nivel[0]);
        } else {
            echo"$nivel $imprimir <br>";
        }
    }
 }

 impressaoArray($array);
?>