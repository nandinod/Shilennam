<?php

/**
 *
 * @author Acep / D.Tsogtbayar
 */
interface Select {
    
    function setColumns($columns = null);
    function limitRows($rows = "*");
    function sortByColumn($column = null, $reverse = false);
    
}
