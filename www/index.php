<?php 
require_once('sessao.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>curso php</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>

<body>
    <header class="cabecalho">
        <h1>CURSO DE PHP</h1>
        <H2>INICIO DOS EXERCICIOS</H2>
    </header>
    <nav class="navegacao">
        <span class="usuario"><?= $_SESSION['usuario']; ?></span>
        <a href="logout.php" class="vermelho">sair</a>
    </nav>
    <main class="conteudo">
        <div class="principal">
            <?php require_once("menu.php"); ?>
        </div>
    </main>
    <footer class="rodape">
        cod3r & alunos <?= date('Y'); ?>
    </footer>
</body>

</html>