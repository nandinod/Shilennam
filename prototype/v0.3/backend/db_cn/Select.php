<?php

/**
 *
 * @author Acep / D.Tsogtbayar
 */
interface Select {
    
    function sortById($reverse = false);
    function sortByColumn($column, $reverse = false);
    function toArrays();
    function toObjects();
    function getResults();
    function getFirstResult();
    
}
