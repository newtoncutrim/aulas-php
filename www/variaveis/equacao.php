<div class="tiulo">desafio equaçao</div>

<?php
$conta1 = (6 *(3 + 2)) ** 2;
$divisor1 = 3 * 2;

$conta2 = (1 - 5) * (2 - 7);
$divisor2 = 2;

$partea = $conta1 / $divisor1;
$parteb = ($conta2 / $divisor2) ** 2;

$conta = ($partea - $parteb) ** 3;
$baixo = 10 ** 3;
$final = $conta / $baixo;
echo $final;
?>