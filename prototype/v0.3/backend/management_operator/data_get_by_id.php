<?php

include "../init.php";

$id = "";
if (isset($_POST['p_id'])) {
	$id = $_POST['p_id'];
	$db = new DB();
	$db->query("select * from party where id = :p_id");
	$db->bind(":p_id", $id);
	$res = $db->single();

	foreach ($res as $r) {
		echo $r."::";
	}
}