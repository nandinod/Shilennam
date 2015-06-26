<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function getTagForResult($content = "") {
    $data = "<li class='list-group-item'>";
    $data .= $content;
    $data .= "</li>";
    return $data;
}

$action = isset($_POST['action']) ? $_POST['action'] : "";
$keyword = isset($_POST['keyword']) ? $_POST['keyword'] : "";

if (!empty($action) && !empty($keyword)) {
    if ($action == "search_ediin") {
        require_once './DB_CN.php';
        $eza = new db_cn\Table("ediin_zasag_angi");
        $results = $eza->select("*", "type COLLATE UTF8_GENERAL_CI like '%$keyword%'");
        $full_data = "";
        foreach ($results as $res) {
            $full_data .= getTagForResult($res['type']);
        }
        echo $full_data;
    }
}