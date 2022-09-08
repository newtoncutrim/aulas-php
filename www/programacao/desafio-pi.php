<div class="titulo">desafio pi</div>

<?php
echo pi() . '<br>';
$pi = 3.14;

if ($pi - pi() <= 0.01) {
    echo "igual";
} else {
    echo "diferente";
}

?>
