# 🛡️ RPG Master Panel ⚔️

Um painel medieval para gerenciar personagens, NPCs, monstros e eventos de RPG — feito com PHP puro e muito sangue de dragão 🐉.

## 🔥 Funcionalidades

- Login seguro com verificação de senha (PHP + `password_verify`)
- Cadastro de novos usuários
- Gerenciamento visual de:
  - 📜 Personagens
  - 👥 NPCs
  - 🐉 Monstros
  - 📖 Eventos
- Página de geração aleatória de heróis épicos
- Logout com feedback visual (toast)

## 🚀 Como rodar localmente

1. Instale o [XAMPP](https://www.apachefriends.org/index.html)
2. Coloque os arquivos em `htdocs/meu-site`
3. Importe o banco de dados (opcional, arquivo `banco/banco.sql`)
4. Acesse no navegador:  
   `http://localhost/meu-site/`

## 💾 Estrutura de pastas

projeto/
├── index.php
├── rpg/
│ └── docs/
│ └── index.php
│ └── logout.php
│ └── data/


## 🔒 Segurança

- Nunca suba seu `conexao.php` com senha real no GitHub.
- Use variáveis de ambiente ou um `.env` se possível.

## 🙋 Feito por

[🔗 Bryan M. Almeida](https://github.com/Bryan-M-Almeida)