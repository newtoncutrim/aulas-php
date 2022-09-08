<div class="titulo">operadores logicos</div>

<?php
echo "<p>negaçao</p>";
var_dump(true);
echo"<br>";
var_dump(!true); //not

echo "<p>TABELA VERDADE 'and' (E) </p>";

var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);

var_dump(true  and true);
var_dump(true  and false);
var_dump(false and  true);
var_dump(false and  false);

echo "<p>TABELA VERDADE 'or' (ou) </p>";

var_dump(true  || true);
var_dump(true  || false);
var_dump(false ||  true);
var_dump(false || false);

var_dump(true  or true);
var_dump(true  or false);
var_dump(false or  true);
var_dump(false or false);

echo "<p>TABELA VERDADE 'xor' (ou exclusivo) </p>";

var_dump(true  xor true);
var_dump(true  xor false);
var_dump(false xor  true);
var_dump(false xor false);

var_dump(true  != true);
var_dump(true  != false);
var_dump(false !=  true);
var_dump(false != false);

echo "<p class='negrito'>TABELA VERDADE \'xor\' (ou exclusivo) </p>";


?>
