<div class="titulo">string</div>

<?php
// algumas funçoes

echo '<br>' . strtoupper('maiusculo');
echo '<br>' . strtolower('MINUSCULO');
echo '<br>' . ucfirst('so a primeira letra da primeira palavra'); 
echo '<br>' . ucwords('so as primeiras letras das palavras');
echo '<br>' . strlen('quantos caracteres tem?');
echo '<br>' . mb_strlen('quantos caracteres tem?');
echo '<br>' . str_replace('quantos', 'olhala', 'eu disse quantos quantos' );
echo '<br>' . substr('eu disse quantos quantos', 3, 6); //peguei so a parte 'disse'

echo '<br>' . mb_strpos('!AbcaBcabc', 'abc');
echo '<br>' . mb_stripos('!AbcaBcabc', 'abc'); //ignore case o 'i'
echo '<br>' . mb_strpos(strtolower('!AbcaBcabc'), 'abc');

?>