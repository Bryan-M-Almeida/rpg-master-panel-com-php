<?php
// salvar-personagem.php

header("Content-Type: application/json");

$dados = file_get_contents("php://input");
$personagem = json_decode($dados, true);

if ($personagem && isset($personagem['nome'])) {
    $arquivo = 'personagens.json';

    if (file_exists($arquivo)) {
        $lista = json_decode(file_get_contents($arquivo), true);
    } else {
        $lista = [];
    }

    $lista[] = $personagem;

    file_put_contents($arquivo, json_encode($lista, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

    echo json_encode(["mensagem" => "Personagem salvo com sucesso!"]);
} else {
    http_response_code(400);
    echo json_encode(["erro" => "Dados inválidos"]);
}
