<?php

$diretorio = "xml/";

if (!is_dir($diretorio)) {
    echo "Pasta $diretorio nao existe";
} else {
    $novo_nome = "torcedores";

    $arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : false;

    for ($controle = 0; $controle < count($arquivo['name']); $controle++) {
        $destino = $diretorio . "/" . $novo_nome . '.xml';

        if (move_uploaded_file($arquivo['tmp_name'][$controle], $destino)) {
            echo "Upload realizado com sucesso<br>";
        } else {
            echo "Erro ao realizar upload";
        }
    }
}
