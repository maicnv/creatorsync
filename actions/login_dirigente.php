<?php
    // pegando os dados de login do dirigente e substituindo alguns ' '
    $usuario = str_replace("\u{00A0}", ' ', $_POST["usuario"]);
    $senha = $_POST["senha"];

    // removendo espaços 'persistentes'
    $usuario = trim($usuario);

    # validando o 'usuairo'
    if (empty($usuario)) { // usuairo não foi informado
        echo "Usuairo não pode estar vazio";
        exit;
    }

    if (!preg_match("/^[a-zà-ú\s]+$/i", $usuario)) { // nome possue números
        echo "Usuairo deve conter apenas letras";
        exit;
    }
    $usuario = mb_strtolower($usuario, 'UTF-8');

?>