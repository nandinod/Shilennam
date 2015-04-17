<?php

/**
 * Description of DB
 *
 * @author Acep
 */
class Connector {
    
    private $host = "127.0.0.1";
    private $user = "root";
    private $pass = "acep123";
    private $dbname = "prototype";
    
    private $dbh;
    private $error;

    private $stmt;

    protected function __construct() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname . ';charset=utf8';

        $options = array(
            PDO::ATTR_PERSISTENT => true, 
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
        }
    }

    protected function query($query){
        $this->stmt = $this->dbh->prepare($query);
    }

    protected function bind($param, $value, $type = null){
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    protected function execute(){
        return $this->stmt->execute();
    }

    protected function resultset(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    protected function single(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    protected function rowCount(){
        return $this->stmt->rowCount();
    }

    protected function lastInsertId(){
        return $this->dbh->lastInsertId();
    }

    protected function beginTransaction(){
        return $this->dbh->beginTransaction();
    }
    protected function endTransaction(){
        return $this->dbh->commit();
    }
    protected function cancelTransaction(){
        return $this->dbh->rollBack();
    }

    public function debugDumpParams(){
        return $this->stmt->debugDumpParams();
    }
}