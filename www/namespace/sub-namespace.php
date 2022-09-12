<?php namespace App;?>
<div class="titulo">sub-namespace</div>

<?php
echo __NAMESPACE__ . '<br>';
const constante = 123;

namespace App\Principal;
echo __NAMESPACE__ . '<br>';
const constante = 234; 

// echo \App\constante1 . '<br>';
// echo \App\Principal\constante2 . '<br>';

namespace App\Principal\Especifico;
const constante = 567;
echo constant('\\'. __NAMESPACE__. '\constante3');
echo \App\constante . '<br>';
echo \App\Principal\constante . '<br>';
echo \App\Principal\Especifico\constante;
