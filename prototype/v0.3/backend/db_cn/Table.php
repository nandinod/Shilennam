<?php

/**
 * Description of Table
 *
 * @author Acep / D.Tsogtbayar
 */
class Table extends Connector implements Select{
    
    private $table = null;
    
    function __construct($table_name) {
        $this->table = $table_name;
    }

    public function getFirstResult() {
        
    }

    public function getResults() {
        
    }

    public function sortByColumn($column, $reverse = false) {
        
    }

    public function sortById($reverse = false) {
        
    }

    public function toArrays() {
        
    }

    public function toObjects() {
        
    }

}
