<div class="titulo">desafio palindromo</div>

<?php
// function indentificar($palavra) {
//     $ultimoIndice = strlen($palavra) - 1;
//     for($i = 0; $i < $ultimoIndice; $i++) {
//         if($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
//             return "nao";
//         }
//     }
//     echo "sim";
// }
// echo indentificar("arara");

function identificarSimples($palavra) {
    return $palavra === strrev($palavra) ? 'sim' : 'nao';
}
echo identificarSimples("");

// argumentos variaveis usando 3 pontos ... antes da variavel

// function argumentoVarialvel(...$numeros) {
//     $soma = 0;
//     foreach($numeros as $numero) {
//         $soma = $numero + $numero;
//     }
//     return $soma;
// }


// echo argumentoVarialvel(2, 6, 8);

function dependentes($titular, ...$dependentes) {
    echo"titular: $titular <br>";
    if($dependentes) {
        foreach($dependentes as $dp) {
            echo"dependente : $dp <br>";
        }
    }
    
}

echo dependentes('newton', 'marcos', ' rafael')
?>