<div class="titulo">desafio variavel</div>

<?php
$a = 'nossa';
$nossa = 'eu';
$eu = 'consegui';
$consegui = 'responder';
$responder = 'esse';
$esse = 'desafio';

echo "$a! {$$a} {$$$a} {$$$$a} {$$$$$a} {$$$$$$a}. ";


define('EXEMPLO_DE_CONSTANTE', 4.9);

echo EXEMPLO_DE_CONSTANTE;

const NOVA_CONSTANTE = 'OI';

echo '<br>' . __LINE__;
echo '<br>' . __DIR__;
echo '<br>' . __FILE__;