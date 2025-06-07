<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login Medieval</title>
  <link rel="stylesheet" href="login.css">
</head>

<body>

  <div class="login-container">
    <h1>Entrar no Castelo</h1>

    <?php
    if (session_status() === PHP_SESSION_NONE) {
      session_start();
    }


    // erro de login
    if (isset($_SESSION['erro_login'])) {
      echo "<p style='color:red;'>" . $_SESSION['erro_login'] . "</p>";
      unset($_SESSION['erro_login']);
    }

    // toast de logout
    if (isset($_SESSION['logout_success'])) {
      echo "<script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'success',
                title: 'Logout realizado com sucesso!',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
            });
        });
    </script>";
      unset($_SESSION['logout_success']);
    }
    ?>


    <form action="processa_login.php" method="POST" autocomplete="off">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="seu@email.com" required />

      <label for="senha">Senha:</label>
      <input type="password" id="senha" name="senha" placeholder="Sua senha secreta" required />

      <button type="submit">Entrar</button>
    </form>
    <br>
    <a href="cadastro.php"><button type="button">Cadastrar-se</button></a>
  </div>

  <?php if ($showLogoutToast): ?>
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Logout realizado!',
        text: 'Você saiu com sucesso do sistema.',
        timer: 2500,
        showConfirmButton: false
      });
    </script>
  <?php endif; ?>

</body>

</html>