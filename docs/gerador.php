<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <title>Gerador de Personagem</title>
    <link rel="stylesheet" href="style/gerador.css" />
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/1800/1800233.png" type="image/x-icon">
</head>

<body>
    <audio id="bg-music" loop>
        <source src="issues/Elden Ring Main Theme (The Final Battle) _ EPIC VERSION.mp3" type="audio/mpeg" />
        Seu navegador não suporta o elemento de áudio.
    </audio>

    <header>
        <a class="btn-voltar" href="index.php">⟵ Voltar ao Painel</a>
        <h1>🛡️ Gerador de Personagem</h1>
    </header>

    <main>
        <button id="musicBtn" onclick="document.getElementById('bg-music').play()">🎵 Ativar Música</button>
        <button id="gerarBtn">⚔️ Gerar Personagem</button>

        <section class="personagem-container">
            <div class="personagem">
                <h2>Nome: <span class="nome">–</span></h2>
                <h2>Idade: <span class="idade">–</span></h2>
                <h2>Raça: <span class="raca">–</span></h2>
                <h2>Classe: <span class="classe">–</span></h2>
                <h3>História:</h3>
                <p class="historia">–</p>
            </div>

            <div class="atributos">
                <h2>Atributos</h2>
                <p>Força: <span class="forca">–</span></p>
                <p>Destreza: <span class="destreza">–</span></p>
                <p>Inteligência: <span class="inteligencia">–</span></p>
                <p>Carisma: <span class="carisma">–</span></p>
                <p>Sabedoria: <span class="sabedoria">–</span></p>
                <p>Constituição: <span class="constituicao">–</span></p>
            </div>
        </section>

        <div id="loader" style="display: none;" class="loader">
            <img src="issues/loading.gif" alt="Carregando..." />
            <p>Gerando personagem...</p>
        </div>
        <button id="salvarBtn">💾 Salvar Personagem</button>

    </main>

    <script src="script/gerador.js"></script>
</body>

</html>