<?php

/**
 * @author Acep / D.Tsogtbayar
 */

namespace db_cn {

    use PDO;

    class Connector {

        private $host = "127.0.0.1";
        private $user = "root";
        private $pass = "acep123";
        private $dbname = "prototype";
        private $dbh;
        private $error;
        private $stmt;

        public function __construct() {
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

        public function query($query) {
            $this->stmt = $this->dbh->prepare($query);
        }

        public function bind($param, $value, $type = null) {
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

        public function execute() {
            return $this->stmt->execute();
        }

        public function resultset() {
            $this->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function single() {
            $this->execute();
            return $this->stmt->fetch(PDO::FETCH_ASSOC);
        }

        public function rowCount() {
            return $this->stmt->rowCount();
        }

        public function lastInsertId() {
            return $this->dbh->lastInsertId();
        }

        public function beginTransaction() {
            return $this->dbh->beginTransaction();
        }

        public function endTransaction() {
            return $this->dbh->commit();
        }

        public function cancelTransaction() {
            return $this->dbh->rollBack();
        }

        public function debugDumpParams() {
            return $this->stmt->debugDumpParams();
        }

    }

    interface Select {

        function setColumns($columns = null);

        function limitRows($rows = "*");

        function sortByColumn($column = null, $reverse = false);
    }

    interface Insert {
        
    }

    interface Update {
        
    }

    interface Delete {
        
    }

    interface Create {
        
    }

    interface Drop {
        
    }

    class Database {
        
    }

    class Table implements Select {

        private $connect = null;
        private $table = null;
        private $result = null;
        private $columns = "*";
        private $rows = "*";
        private $is_rows_set = false;
        private $options = "1";
        private $is_options_set = false;
        private $sort = "1";
        private $sort_reverse = "ASC";
        private $is_sort_set = false;
        public $query = "";

        public function __construct($table) {
            $this->table = $table;
            $this->connect = new Connector();
        }

        public function limitRows($rows = "*") {
            if (isset($rows)) {
                if ($rows = "*") {
                    $this->is_rows_set = false;
                } else {
                    $row = preg_replace($rows, "\s+", "");
                    if (is_numeric($row)) {
                        $this->rows = $row;
                        $this->is_rows_set = true;
                    } else {
                        $this->is_rows_set = false;
                    }
                }
            }
        }

        public function setColumns($columns = null) {
            if (isset($columns)) {
                if (is_array($columns)) {
                    $cols = "";
                    foreach ($columns as $col) {
                        $cols += preg_replace($col, "\s+", "");
                    }
                    $cols = substr($cols, 0, -1);
                    $this->columns = $cols;
                } else if ($columns == "*") {
                    $this->columns = "*";
                } else {
                    $columns = preg_replace($col, "\s+", "");
                    $this->columns = $columns;
                }
            }
        }

        public function sortByColumn($column = null, $reverse = false) {
            if (isset($column) && ($reverse | !$reverse)) {
                $col = str_replace($column, "\s+", "");
                $this->sort = $col;
                if ($reverse) {
                    $this->sort_reverse = "ASC";
                } else {
                    $this->sort_reverse = "DESC";
                }
                $this->is_sort_set = true;
            }
        }

        public function result() {
            if (
                    isset($this->table) &&
                    isset($this->columns) &&
                    isset($this->rows) &&
                    isset($this->options) &&
                    isset($this->sort)) {

                try {
                    $query = "SELECT :columns FROM :table";
                    if ($this->is_options_set) {
                        $query += " WHERE 1";
                    }
                    if ($this->is_sort_set) {
                        $query += " ORDER BY :sort :sort_rev";
                    }
                    if ($this->is_rows_set) {
                        $query += " LIMIT :rows";
                    }
                    $this->connect->query($query);
                    $this->connect->bind(":columns", $this->columns);
                    $this->connect->bind(":table", $this->table);
                    if ($this->is_options_set) {
                        $this->connect->bind(":options", $this->options);
                    }
                    if ($this->is_sort_set) {
                        $this->connect->bind(":sort", $this->sort);
                        $this->connect->bind(":sort_rev", $this->sort_reverse);
                    }
                    if ($this->is_rows_set) {
                        $this->connect->bind(":rows", $this->rows);
                    }
                    $this->result = $this->connect->resultset();
                } catch (Exception $ex) {
                    echo "<pre>", print_r($ex), "</pre>";
                }
            } else {
                $this->result = null;
            }
            return $this->result;
        }
        
        public function rawQuery($query) {
            $this->connect->query($query);
            return $this->connect->resultset();
        }

    }

}