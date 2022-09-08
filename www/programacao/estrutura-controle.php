<div class="titulo">operadores relacionais 2</div>

<?php
echo "<p> RELACIONAIS</p><hr>";

$idade = 61;

if($idade <= 10) {
    echo "criança";
} elseif ($idade > 10 && $idade < 18) {
    echo "adolescente";
} elseif ($idade >= 18) {
    echo"adulto";
}

echo "<p> Spaceship</p><hr>";
var_dump(5 <=> 3);// 1
var_dump(3 <=> 3);// 0
var_dump(1 <=> 3);//-1


?>

<style>
    p {
        margin-bottom: -15px
    }
</style>