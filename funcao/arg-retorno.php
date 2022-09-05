<div class="titulo">ARGUMENTO E RETORNO</div>

<?php
// function obterMensagem() {
//     $s = "seja bem vindo";
//     return $s;
// }
// echo obterMensagem();

// function obterMensagemNome($nome, $sobrenome)
// {
//     $s = "seja bem vindo {$nome} {$sobrenome}";
//     return $s;
// }
// echo obterMensagemNome('newton', 'cutrim');

// function soma($a, $b) {
//     return $a + $b;
// }

// $x = 45;
// $y = 15;
// echo soma($x, $y);

// echo soma(2, 3);

// trocando valor por endereço

$variavel = 4;
function trocadeValor(&$a, $valor) {
   return $a = $valor;
}
trocadeValor($variavel, 89);
echo $variavel;
?>