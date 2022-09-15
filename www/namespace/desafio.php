<div class="titulo">desafio</div>

<?php

require_once('arqui2.php');


use \Segundo\newton as abrev;

$pessoa = new abrev('newton', 24, '@newtex');
echo $pessoa->apresentarUser();

