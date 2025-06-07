<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPG Master Panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/1800/1800233.png" type="image/x-icon">
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <header>
        <h1>🛡️ RPG Master Panel ⚔️</h1>
        <p class="subtitulo">O seu grimório digital de personagens, monstros e aventuras.</p>
        <form action="logout.php" method="POST" style="position: absolute; top: 1rem; right: 1rem;">
            <button type="submit"
                style="background: darkred; color: white; padding: 0.5rem 1rem; border: none; border-radius: 5px; cursor: pointer;">
                Sair 🔓
            </button>
        </form>
    </header>

    <main>
        <section class="painel">
            <div class="painel-card" onclick="window.location.href='personagens.php'">
                <h2>📜 Personagens</h2>
                <p>Veja e gerencie todos os heróis do seu mundo.</p>
            </div>

            <div class="painel-card" onclick="window.location.href='npcs.php'">
                <h2>👥 NPCs</h2>
                <p>Cidadãos, vilões, comerciantes e aliados secundários.</p>
            </div>

            <div class="painel-card" onclick="window.location.href='monstros.php'">
                <h2>🐉 Monstros</h2>
                <p>Feras, criaturas e entidades mágicas prontas para batalha.</p>
            </div>

            <div class="painel-card" onclick="window.location.href='eventos.php'">
                <h2>📖 Eventos</h2>
                <p>Encontros, armadilhas e missões do seu universo.</p>
            </div>

            <div class="painel-card" onclick="window.location.href='gerador.php'">
                <h2>🧙‍♂️ Forjar Herói</h2>
                <p>Crie um aventureiro único com atributos épicos e habilidades lendárias.</p>
            </div>



        </section>
    </main>

    <footer>
        <a href="https://github.com/Bryan-M-Almeida">
            <p>Feito por Bryan 🧙 • 2025</p>
        </a>
    </footer>
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