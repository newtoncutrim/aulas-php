<?php session_start(); ?>

<div class="titulo">sessao </div>

<?php

// ini_set('display_erros', 1);
// error_reporting(E_ERROR);

print_r($_SESSION);

if (!$_SESSION['nome']) {
    $_SESSION['nome'] = 'newton';
}

if (!$_SESSION['email']) {
    $_SESSION['email'] = 'newton@gmail.com';
}
?>

<p>
    <a href="sessao2.php">voltar sessao</a>
</p>