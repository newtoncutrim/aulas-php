<div class="titulo">desafio impressao</div>

<?php
// $array = [
//     'aaa',
//     'bbb',
//     'ccc',
//     'ddd',
//     'eee',
//     'fff'
// ];

// for ($a = 0; $a <conut($array); $a = $a + 2) {
//     echo $array[$a];
// }




// $array = [
//     'aaa',
//     'bbb',
//     'ccc',
//     'ddd',
//     'eee',
//     'fff'
// ];

// for ($a = 0; $a < count($array); $a++) {
//     if ($a % 2 === 1) continue;
//     echo "{$array[$a]}";
// }


$array = [
    'aaa',
    'bbb',
    'ccc',
    'ddd',
    'eee',
    'fff'
];

foreach ($array as $indice => $valor) {
    if ($indice % 2 !== 0) continue;
        echo $array[$indice];
    
}