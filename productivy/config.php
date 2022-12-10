<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'db_cadastro';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    /*
    if($conexao->connect_errno)
    {
        echo "ERRO";
    }
    else
    {
        echo "CONEXÃO EFETUADA COM SUCESSO";
    }
    */

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'db_crud';

    $conn = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

?>