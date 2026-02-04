<?php

    $titulo = str_replace("\u{00A0}", ' ', $_POST["titulo"]);
    $descricao = str_replace("\u{00A0}", ' ', $_POST["descricao"]);
    $plano = $_POST["plano"];

    // removendo espaços 'persistentes'
    $titulo = trim($titulo);
    $descricao = trim($descricao);

    # validando o 'titulo'
    if (empty($titulo)) { // titulo não foi informado
        echo "Nome não pode estar vazio";
        exit;
    }

    # validando a 'descricao'
    if (empty($descricao)) { // descricao não foi informada
        echo "Nome não pode estar vazio";
        exit;
    }

?>
