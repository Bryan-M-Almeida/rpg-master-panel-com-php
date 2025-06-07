<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cadastro Medieval</title>
    <link rel="stylesheet" href="cadastro.css">
</head>

<body>
    <main class="container">
        <h1>Cadastro</h1>
        <p class="subtitle">Junte-se à guilda dos usuários</p>

        <?php
        if (isset($_SESSION['cadastro_erro'])) {
            echo "<p style='color:red;'>" . $_SESSION['cadastro_erro'] . "</p>";
            unset($_SESSION['cadastro_erro']);
        }

        if (isset($_SESSION['cadastro_ok'])) {
            echo "<p style='color:green;'>" . $_SESSION['cadastro_ok'] . "</p>";
            unset($_SESSION['cadastro_ok']);
        }
        ?>

        <form action="processa_cadastro.php" method="POST" id="register-form" novalidate>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Seu nome" required />

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="seu@email.com" required />

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" placeholder="sua senha" required />

            <label for="confirma">Confirmar Senha:</label>
            <input type="password" id="confirma" name="confirma" placeholder="repita a senha" required />

            <button type="submit">Cadastrar</button>
        </form>
<br>
        <a href="index.php"><button type="button">Já é cadastrado? Entrar</button></a>
    </main>
</body>

</html>