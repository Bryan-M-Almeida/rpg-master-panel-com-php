<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Cadastro Medieval</title>
<link rel="stylesheet" href="assets/style/cadastro.css">
</head>
<body>
  <div class="cadastro-container">
    <h1>Registrar no Castelo</h1>
    <form action="processa_cadastro.php" method="POST" autocomplete="off">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" placeholder="Seu nome real" required />

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="seu@email.com" required />

      <label for="senha">Senha:</label>
      <input type="password" id="senha" name="senha" placeholder="Senha secreta" required />

      <button type="submit">Cadastrar</button>
    </form>
  </div>
</body>
</html>

