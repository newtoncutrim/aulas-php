<?php
// session_id('d1749b852fb03d8bf8170a2f5432cf47');// passando uma sessao id
session_start();
if ($_SESSION['contador'] % 5 === 0) {
    session_regenerate_id();
}

if ($_SESSION['contador'] >=10) {
    session_destroy();
}
echo session_id();


$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1;
echo '<br>' . $_SESSION['contador'];

