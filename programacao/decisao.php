<div class="titulo">while</div>

<?php
//pode ser que nao execute de primeira se a condicao nao for verdadeira
$a = 1;
while ($a <= 10) {
    echo "$a <br>";
    $a++;
}


//pelo menos uma vez e executado
$b = 2;
do {
    echo $b;
    $b++;
} while ($b <= 10);