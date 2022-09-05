<div class="titulo">break / continue</div>

<?php


for (;;) {
    
    $contador++;
    echo $contador;
    if($contador >= 10) {
        break;
    }
}
echo"<br>";

for (;;) {
    $cont++;
    if ($cont % 2 === 1) {
        continue;
    }
    echo "$cont<br>";
    if ($cont >=  20) {
        break;
    }
}

