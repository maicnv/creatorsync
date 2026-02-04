<?php

    // pegando os dados de login do cliente e substituindo alguns ' '
    $email = str_replace("\u{00A0}", ' ', $_POST["email"]);
    $senha = $_POST["senha"];

    // removendo espaços 'persistentes'
    $email = trim($email);

    // validando 'email'
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // verificando se o email é válido
        echo "Email inválido";
        exit;
    }


?>