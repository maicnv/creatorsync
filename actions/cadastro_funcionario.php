<?php

    // pegando os dados de cadastro do funcionario e substituindo alguns ' '
    $nome = str_replace("\u{00A0}", ' ', $_POST["nome"]);
    $telefone = str_replace("\u{00A0}", ' ', $_POST["telefone"]);
    $email = str_replace("\u{00A0}", ' ', $_POST["email"]);
    $funcao = $_POST["funcao"];
    $especialidade = $_POST["especialidade"];

    // removendo espaços 'persistentes'
    $nome = trim($nome);
    $funcao = trim($funcao);
    $email = trim($email);
    $telefone = trim($telefone);
    $especialidade = trim($especialidade);

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


    // validando 'email'
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // verificando se o email é válido
        echo "Email inválido";
        exit;
    }

    
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

    $dados = [$nome, $funcao, $email, $telefone, $especialidade];
    var_dump($dados);

?>