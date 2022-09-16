<?php session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if ($_POST['email']) {
    $usuarios = [
        [
            'nome' => 'newton',
            'email' => 'newton@gmail.com',
            'senha' => '0982'
        ],
        [
            'nome' => 'teste',
            'email' => 'teste@gmail.com',
            'senha' => '147753'
        ]
    ];

    foreach($usuarios as $usuario) {
        $emailValido = $email === $usuario['email'];
        $senhaValida = $senha === $usuario['senha'];

        if ($emailValido && $senhaValida) {
            $_SESSION['erros'] = null;
            $_SESSION['usuario'] = $usuario['nome'];
            //tempo 60s * 60m * 24hrs * 3 = 3dias:
            $expiracao = time() + 60 * 60 * 24 * 3;
            //armazenar no usuario nome
            setcookie('usuario', $usuario['nome'], $expiracao);
            header('Location: index.php');
        }
    }
    if(!$_SESSION['usuario']) {
        $_SESSION['erros'] = ['usuario/senha invalido!'];
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>curso php</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <link rel="stylesheet" href="./css/login.css">

</head>

<body class="login">
    <header class="cabecalho">
        <h1>CURSO DE PHP</h1>
        <H2>seja bem vindo</H2>
    </header>

    <main class="conteudo">
        <div class="principal">
            <h3>IDENTIFIQUE - SE!</h3>
            <?php if ($_SESSION['erros']) : ?>
                <div class="erros">
                    <?php foreach ($_SESSION['erros'] as $erro) : ?>
                        <p><?= $erro ?></p>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
            <form action="#" method="POST">
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha">
                    <button>enviar</button>
                </div>
            </form>
        </div>
    </main>
    <footer class="rodape">
        cod3r & alunos <?= date('Y'); ?>
    </footer>
</body>

</html>