<?php
    // Definindo variáveis para conexão
    $hostname_conn = "localhost";
    $database_conn = "iwane047_ti09";
    $username_conn = "iwane047_ti09";
    $password_conn = "senacti09";
    $charset_conn = "utf8";

    // Definindo parâmetros de conexão
    $conn_produtos = new mysqli($hostname_conn, $username_conn, $password_conn, $database_conn);

    // Definindo o conjunto de caracteres da conexão
    mysqli_set_charset($conn_produtos, $charset_conn);

    // Verificando o conjunto de caracteres da conexão
    if($conn_produtos->connect_error){
        echo "Error: ".$conn_produtos->connect_error;
    };
    // Não deixar espaço vazio depois do fechamento do PHP causa erro HEADER
?>