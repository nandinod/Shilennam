<?php

/**
 * Description of Table
 *
 * @author Acep / D.Tsogtbayar
 */
class Table extends Connector implements Select{
    
    private $table = null;
    private $result = null;
    private $columns = "*";
    private $rows = "*";
    private $is_rows_set = false;
    private $options = "1";
    private $sort = "1";
    private $sort_reverse = "ASC";
    private $is_sort_set = false;
    
    protected function __construct($table) {
        parent::__construct();
        $this->table = $table;
        $this->columns = "*";
        $this->rows = "";
        $this->options = "";
    }

    protected function limitRows($rows = "*") {
        if (isset($rows)) {
            if ($rows = "*") {
                $this->is_rows_set = false;
            } else {
                $row = preg_replace($rows, "\\s+", "");
                if (is_numeric($row)) {
                    $this->rows = $row;
                    $this->is_rows_set = true;
                } else {
                    $this->is_rows_set = false;
                }
            }
        }
    }

    protected function setColumns($columns = null) {
        if (isset($columns)) {
            if (is_array($columns)) {
                $cols = "";
                foreach ($columns as $col) {
                    $cols += preg_replace($col, "\\s+", "");
                }
                $cols = substr($cols, 0, -1);
                $this->columns = $cols;
            } else if ($columns == "*") {
                $this->columns = "*";
            } else {
                $columns = preg_replace($col, "\\s+", "");
                $this->columns = $columns;
            }
        }
    }

    protected function sortByColumn($column = null, $reverse = false) {
        if (isset($column) && ($reverse | !$reverse)) {
            $col = str_replace($column, "\\s+", "");
            $this->sort = $col;
            if ($reverse) {
                $this->sort_reverse = "ASC";
            } else {
                $this->sort_reverse = "DESC";
            }
            $this->is_sort_set = true;
        }
    }
    
    protected function result() {
        if (isset($this->table)) {
            if (
                    isset($this->columns) &&
                    isset($this->rows) &&
                    isset($this->options) &&
                    isset($this->sort)) {
                
                $query = "SELECT :columns FROM :table WHERE :options";
                if ($this->is_sort_set) {
                    $query += " ORDER BY :sort :sort_rev";
                }
                if ($this->is_rows_set) {
                    $query += " LIMIT :rows";
                }
                $this->query($query);
                $this->bind(":column", $this->columns);
                $this->bind(":column", $this->rows);
                $this->bind(":column", $this->options);
                $this->bind(":column", $this->sort);
                $this->bind(":sort_rev", $this->sort_reverse);
                $this->result = $this->resultset();
            } else {
                $this->result = null;
            }
        } else {
            $this->result = null;
        }
        return $this->result;
    }

}
