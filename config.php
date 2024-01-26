<?php
//defini constante para conexão com o bd 
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'carro');

    //variavel de conexão
    $conn = new MySQLi(HOST, USER, PASS, BASE);
?>