let personagensGlobais = JSON.parse(localStorage.getItem("personagens")) || [];

const container = document.getElementById("lista-personagens");

// Mostrar os personagens salvos
function renderizarPersonagens() {
    container.innerHTML = "";

    if (personagensGlobais.length === 0) {
        container.innerHTML = "<p>Nenhum personagem salvo ainda.</p>";
        return;
    }

    personagensGlobais.forEach((p, index) => {
        const card = document.createElement("div");
        card.classList.add("card");

        card.innerHTML = `
            <img src='issues/personagem.png' class='personagem-img'>
            <h2>${p.nome} (${p.raca} ${p.classe})</h2>
            <p><strong>Idade:</strong> ${p.idade}</p>
            <p><strong>História:</strong> ${p.historia}</p>
            <div class="atributos">
                <p><strong>Atributos:</strong></p>
                <span>For: ${p.atributos.forca}</span>
                <span>Des: ${p.atributos.destreza}</span>
                <span>Int: ${p.atributos.inteligencia}</span>
                <span>Car: ${p.atributos.carisma}</span>
                <span>Sab: ${p.atributos.sabedoria}</span>
                <span>Con: ${p.atributos.constituicao}</span>
            </div>
            <button class="btn-deletar" onclick="deletarPersonagem(${index})">🗑️ Deletar</button>
        `;

        container.appendChild(card);
    });
}

// Deleta personagem
function deletarPersonagem(index) {
    if (confirm("Deseja realmente deletar este personagem?")) {
        personagensGlobais.splice(index, 1);
        localStorage.setItem("personagens", JSON.stringify(personagensGlobais));
        renderizarPersonagens();
    }
}

// Baixar JSON com os personagens salvos
function baixarJSON() {
    const blob = new Blob([JSON.stringify(personagensGlobais, null, 2)], { type: "application/json" });
    const url = URL.createObjectURL(blob);

    const a = document.createElement("a");
    a.href = url;
    a.download = "personagens.json";
    a.click();

    URL.revokeObjectURL(url);
}

// Baixar como PDF usando html2pdf (biblioteca externa)
function baixarPDF() {
    html2pdf().from(container).set({
        margin: 1,
        filename: "personagens.pdf",
        image: { type: "jpeg", quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: "in", format: "letter", orientation: "portrait" }
    }).save();
}

// Chama a função ao carregar
renderizarPersonagens();
