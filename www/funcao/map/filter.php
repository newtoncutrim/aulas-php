<div class="titulo">map /  filter</div>

<?php
$array1 = [1.3, 2, 3, 4.8, 5.2];
// $numeros = [];
// foreach ($array1 as $numero) {
//     $array2[] = round($numero);
// }
// print_r($array2);


// 2;
// $array3 = array_map(round, $array1);
// printf($array3);

$notasAprovados = [];
foreach($array1 as $array) {
    if($array >= 4) {
        $notasAprovados[] = $array;
        
    }
}
print_r($notasAprovados);

2;
function aprovados($nota) {
    return $nota >= 4;
}

$aprovados = array_filter($array1, aprovados);

new  class {

}
?>