const monstrosData = {
  "monstros": [
    {
      "nome": "Goblin das Sombras",
      "tipo": "Goblin",
      "nivel": 10,
      "hp": 300,
      "imagem": "./issues/goblin.png",
      "ataque": "Furto de alma",
      "descricao": "Rápido e traiçoeiro, ataca por emboscada nas florestas escuras."
    },
    {
      "nome": "Goblin assassino",
      "tipo": "Goblin",
      "nivel": 8,
      "hp": 10,
      "imagem": "https://i0.wp.com/the-avocado.org/wp-content/uploads/2019/12/Pathfinder-Goblin.png?resize=480%2C480&quality=70&ssl=1",
      "ataque": "Adaga Envenenada",
      "descricao": "Rápido e traiçoeiro, ataca por emboscada nas florestas escuras."
    },
    {
      "nome": "Dragão ancião",
      "tipo": "Dragão",
      "nivel": 10,
      "hp": 3000,
      "imagem": "https://pngimg.com/d/dragon_PNG84520.png",
      "ataque": "Sopro Flamejante",
      "descricao": "Criatura ancestral que devasta vilas inteiras com seu fogo."
    },
    {
      "nome": "Espectro do Abismo",
      "tipo": "Fantasma",
      "nivel": 6,
      "hp": 120,
      "imagem": "https://i.pinimg.com/originals/a9/ea/4d/a9ea4d65eef448f8e4356429a4df1f78.png",
      "ataque": "Toque Gelado",
      "descricao": "Vaga pelas ruínas trazendo loucura à mente dos vivos."
    },
    {
      "nome": "Dragão Escarlate",
      "tipo": "Dragão",
      "imagem": "https://static.vecteezy.com/system/resources/thumbnails/062/797/016/small/majestic-red-dragon-resting-elegantly-on-its-perch-png.png",
      "descricao": "Cuspidor de fogo ancestral, dorme nas cavernas de Cinzélia há séculos.",
      "nivel": 10,
      "hp": 1900
    },
    {
      "nome": "Golem de Pedra",
      "tipo": "Construto",
      "imagem": "https://es-wiki.metin2.gameforge.com/images/e/e6/Golem_de_Roca_Gigante.png",
      "descricao": "Criado por antigos magos, protege ruínas esquecidas.",
      "nivel": 5,
      "hp": 900
    },
    {
      "nome": "Serpente de Ossos",
      "tipo": "Mortovivo",
      "nivel": 5,
      "hp": 400,
      "imagem": "./issues/serpente.png",
      "ataque": "Esmagamento",
      "descricao": "Cobra esquelética reanimada, desliza entre criptas esperando a próxima vítima."
    },
    {
      "nome": "Arauto Flamejante",
      "tipo": "Demônio",
      "nivel": 8,
      "hp": 1600,
      "imagem": "https://i.redd.it/what-would-ben-call-a-devil-dmc-transformation-v0-wd5u520h7k8e1.png?width=702&format=png&auto=webp&s=b14198ce92588b6e32d0a67fd832673bc6383a42",
      "ataque": "Chicote de Lava",
      "descricao": "Guarda o portal infernal e queima tudo ao redor com sua presença."
    },
    {
      "nome": "Cervo Carmesim",
      "tipo": "Fera Mística",
      "nivel": 3,
      "hp": 250,
      "imagem": "./issues/cervo.png",
      "ataque": "Investida Arcana",
      "descricao": "Visto como presságio de guerra, corre com velocidade impossível aos olhos humanos."
    },
    {
      "nome": "Aranha Titânica",
      "tipo": "Aracnídeo",
      "nivel": 6,
      "hp": 600,
      "imagem": "./issues/aranha.png",
      "descricao": "Se esconde em cavernas profundas e caça grupos inteiros com sua teia corrosiva."
    },
    {
      "nome": "Vulto Caótico",
      "tipo": "Aberração",
      "nivel": 7,
      "hp": 1100,
      "imagem": "./issues/vulto.png",
      "ataque": "Grito Mental",
      "descricao": "Forma instável de pura energia distorcida, grita em línguas esquecidas e corrompe a mente."
    },
    {
      "nome": "Titã de Ferro",
      "tipo": "Construto",
      "nivel": 9,
      "hp": 2200,
      "imagem": "./issues/tita.png",
      "ataque": "Punho Demolidor",
      "descricao": "Um colosso forjado por deuses da guerra. Só desperta quando o mundo está em ruína."
    }
  ]
}
const container = document.querySelector("#monstro-container");

fetch("../data/monstros.json")
  .then(res => res.json())
  .catch(() => monstrosData)
  .then(data => {
    const lista = data.monstros.slice(0, 12);

    lista.forEach(monstro => {
      const card = document.createElement("div");
      card.className = "monstro-card";

      card.innerHTML = `
        <h2>${monstro.nome}</h2>
        <img src="${monstro.imagem}" alt="${monstro.nome}" />
        <div class="atributos">
        <p><strong>Descrição:</strong> ${monstro.descricao}</p>
          <p><strong>Tipo:</strong> ${monstro.tipo}</p>
          <p><strong>HP:</strong> ${monstro.hp}</p>
          <p><strong>Nível:</strong> ${monstro.nivel}</p>
        </div>
      `;

      container.appendChild(card);
    });
  });

