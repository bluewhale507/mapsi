<?php
    require_once ("./pdo.php");

     function db_select($query, $param=array()){
        $pdo = db_get_pdo();
        try {
            $stmt = $pdo->prepare($query);
            $stmt->execute($param);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $pdo = null;
            return $result;
        } catch (PDOException $ex) {
            return false;
        } finally {
            $pdo = null;
        }
    }

    function db_insert($query, $param = array())
    {
        $pdo = db_get_pdo();
        try {
            $stmt = $pdo->prepare($query);
            $result = $stmt->execute($param);
            $last_id = $pdo->lastInsertId();
            $pdo = null;
            if ($result) {
                return $last_id;
            } else {
                return false;
            }
        } catch (PDOException $ex) {
            return false;
        } finally {
            $pdo = null;
        }
    }
?>