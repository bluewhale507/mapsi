<?php
    function db_get_pdo() {
        $host = 'localhost';
        $port = '3306';
        $dbname = '';
        $charset = '';
        $username = '';
        $db_pw = '';
        $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=$charset";
        try {
            //DB handle, handle attribute set(err detection, throw exception mod)
            $pdo = new PDO($dsn, $username, $db_pw);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "서버와의 연결 성공!";
        } catch (PDOException $ex){
            //Print POD Exepction for debugging
            echo "Connect to Server Failed! : ".$ex->getMessage()."<br>";
        }
        return $pdo;
    }

?>