<?php

    // pegando os dados de cadastro do cliente e substituindo alguns ' '
    $nome = str_replace("\u{00A0}", ' ', $_POST["nome"]);
    $telefone = str_replace("\u{00A0}", ' ', $_POST["telefone"]);
    $email = str_replace("\u{00A0}", ' ', $_POST["email"]);
    $nicho = $_POST["nicho"];
    $senha = $_POST["senha"];
    $confirmar_senha = $_POST["confirmar_senha"];

    // removendo espaços 'persistentes'
    $nome = trim($nome);
    $nicho = trim($nicho);
    $telefone = trim($telefone);
    $email = trim($email);

    # validando o 'nome'
    if (empty($nome)) { // nome não foi informado
        echo "Nome não pode estar vazio";
        exit;
    }

    if (!preg_match("/^[a-zà-ú\s]+$/i", $nome)) { // nome possue números
        echo "Nome deve conter apenas letras";
        exit;
    }
    $nome = strtolower($nome);


    // validando telefone
    $telefone = str_replace(['(', ')', '-', ' '], '', $telefone);

    if (!ctype_digit($telefone)) {
        echo "Telefone deve conter apenas números";
        exit;
    }

    if (strlen($telefone) != 11) {
        echo "Telefone deve ter 11 dígitos";
        exit;
    }


    // validando 'email'
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // verificando se o email é válido
        echo "Email inválido";
        exit;
    }


    // validando 'senha'
    if (strlen($senha) < 8) {
        echo "Senha deve ter no mínimo 8 caracteres";
        exit;
    }

    if (!preg_match("/[0-9]/", $senha)) {
        echo "Senha deve conter ao menos um número";
        exit;
    }

    if (!preg_match("/[A-Z]/", $senha)) {
        echo "Senha deve conter letra maiúscula";
        exit;
    }

    if (!preg_match("/[a-z]/", $senha)) {
        echo "Senha deve conter letra minúscula";
        exit;
    }

    if (!preg_match("/[!@#$%&?]/", $senha)) {
        echo "Senha deve conter caractere especial";
        exit;
    }

    if ($senha !== $confirmar_senha) {
        echo "As senhas não conferem";
        exit;
    }
    
    // testando
    $dados = [$nome, $nicho, $telefone, $email, $senha, $confirmar_senha];
    var_dump($dados);


?>