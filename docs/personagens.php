<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Seus Personagens</title>
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/1800/1800233.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/personagem.css">
</head>

<body>
    <header>
        <a class="btn-voltar" href="index.php">⟵ Voltar ao Painel</a>
        <h1>🧙‍♂️ Seus Personagens</h1>
    </header>

    <main>
        <div class="acoes-gerais">
            <button onclick="baixarJSON()">📦 Baixar JSON</button>
            <button onclick="baixarPDF()">🧾 Baixar PDF</button>
        </div>
        <div class="personagem-lista" id="lista-personagens"></div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <script src="script/personagem.js"></script>
</body>

</html>