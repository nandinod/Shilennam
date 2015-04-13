<?php

namespace db;

/**
 * Description of DB
 *
 * @author Acep
 */
class DB {
    
    private $_db = null;
    
    public function __construct() {
        try {
            $this->_db = new \PDO("mysql:host=127.0.0.1;dbname=prototype", "root", "");
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
    
    
}
