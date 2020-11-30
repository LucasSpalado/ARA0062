<?php

class Bd {

    private $conn;

    function __construct() {
        /* Connect to a MySQL database using driver invocation */
        $dsn = 'mysql:dbname=id15496510_trabalho;host=localhost';
        $user = 'id15496510_admin';
        $password = 'Q9etI1&dD(l!b\4T';
        
        try {
            $this->conn = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }

    }
    
    function query($sql) {
        try {
            return $this->conn->query($sql) ;
        } catch (PDOException $e) {
            echo 'Query failed: ' . $e->getMessage();
        }
    }
    
    function exec($sql) {
        try {
            return $this->conn->exec($sql) ;
        } catch (PDOException $e) {
            echo 'Query failed: ' . $e->getMessage();
        }
    }
    
}
?>