<?php
    function db_get_pdo() {
        $host = 'localhost';
        $port = '3306';
        $dbname = '';
        $charset = '';
        $username = '';
        $db_pw = '';
        $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=$charset";
        $pdo = new PDO($dsn, $username, $db_pw);
        return $pdo;
    }

?>