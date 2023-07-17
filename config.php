<?php
    // Definição das constantes para conexão com o banco de dados
    define('HOST', 'localhost'); // Host do banco de dados
    define('USER', 'root');      // Usuário do banco de dados
    define('PASS', '');          // Senha do banco de dados
    define('BASE', 'cadastro');  // Nome da base de dados

    // Criação de uma nova conexão com o banco de dados utilizando a extensão MySQLi
    $conn = new mysqli(HOST, USER, PASS, BASE);
