<?php
session_start();
print_r($_SESSION);
?>

<?php
$_SESSION['email'] = 'newtex_tv@gmail.com';
?>
<p>
    <b>Nome: </b> <?= $_SESSION['nome'] . '<br>'; ?>
    <b>Email: </b> <?= $_SESSION['email']; ?>
</p>


<a href="basico_sessao.php">voltar</a>

<p>
    <a href="limpar_sessao.php">limpar sessao</a>
</p>