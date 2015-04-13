<?php

include '../init.php';

$code = "";
$title = "";
$acronym = "";

if (isset($_POST['party-code'])) {
	$code = $_POST['party-code'];
}
if (isset($_POST['party-title'])) {
	$title = $_POST['party-title'];
}
if (isset($_POST['party-acronym'])) {
	$acronym = $_POST['party-acronym'];
}

$db = new DB();
$db->query("insert into party (code, title, acronym) values (:code, :title, :acronym)");
$db->bind(':code', $code);
$db->bind(':title', $title);
$db->bind(':acronym', $acronym);
$db->execute();

header('Location: ../../manage/editor.php#insert_party');