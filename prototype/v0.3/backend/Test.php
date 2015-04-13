<?php

/**
 * Description of Test
 *
 * @author Acep / D.Tsogtbayar
 */

include 'core/DB.php';

try {
    $db = new db/DB();
    $res = $db->query("select code, title, acronym from party");
    
    echo "<table class='table table-striped table-bordered'>";
    echo "<tr><th>Code</th><th>Title</th><th>Acronym</th></tr>";
    while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>"+$row['code']+"</td>";
        echo "<td>"+$row['title']+"</td>";
        echo "<td>"+$row['acronym']+"</td>";
        echo "</tr>";
    }

    echo "</table>";
} catch (Exception $ex) {
    echo "<div class='alert alert-danger' role='alert'>"+$ex->getMessage()+"</div>";
}