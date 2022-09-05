<div class="titulo">desafio tabela</div>

<?php

$array = [
    ['01', '02', '03', '04', '05'],
    ['06', '07', '08', '09', '10'],
    ['11', '12', '13', '14', '15'],
    ['16', '17', '18', '19', '20']
];
?>

<!-- <table border="1">
    
    <?php
    // foreach ($array as $matriz) {
    //         echo "<tr>";
    //     foreach ($matriz as $numeros) {
    //         echo "<td> $numeros</td>";
    //     }
    //     echo"</tr>";
    // } 
    ?>
    
</table> -->

<table>
    <?php
    foreach ($array as $index => $matriz) {
        //operador ternario
        $style = $index % 2 === 1 ? "background-color: blue;" : '';
        //colocando estilo na linha da tabela
        echo"<tr style='{$style}'>";
        foreach ($matriz as $numeros) {
            echo"<td> $numeros</td>";
        }
        echo"</tr>";
    }
    ?>
</table>

<!-- foreach ($array as $matriz) {
    foreach ($matriz as $numeros){
        echo $numeros;
    }
    echo "<br>";
} -->