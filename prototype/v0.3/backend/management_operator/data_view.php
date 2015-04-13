<?php

require_once "../init.php";

$db = new DB();
$parties = $db->getParties();

echo "<table class='table table-striped table-hover'>";
echo "<tr><th>Code</th><th>Title</th><th>Acronym</th></tr>";
foreach ($parties as $party) {
	echo "<tr>";
	echo "<td>".$parties['code']."</td>";
	echo "<td>".$parties['title']."</td>";
	echo "<td>".$parties['acronym']."</td>";
	echo "</tr>";
}
echo "</table>";