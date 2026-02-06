<?php

    // pegando os dados do projeto e substituindo alguns ' '
    $caminho = str_replace("\u{00A0}", ' ', $_POST["caminho"]);
    $projeto = $_POST["projeto"];
    $titulo = $_POST["titulo"];
    $descricao = $_POST["descricao"];
    $edicao = $_POST["edicao"];
    $roteiro = $_POST["roteiro"];
    $entrega = $_POST["entrega"];

    // removendo os ' ' persistentes
    $caminho = trim($caminho);

    // teste
    $dados = [$caminho, $projeto, $titulo, $descricao, $edicao, $roteiro, $entrega];
    var_dump($dados);

?>