<?php

session_start();
include_once $_SESSION['ROOT'] . "/DataBase/DB_Class.php";
action();

function action() {
    $action = $_POST["action"];
    if ($action == "keyword") {
        keyword();
    } else if ($action == "teacher") {
        teacher();
    } else if ($action == "project") {
        project();
    }
}

function project() {
    $db = new DataBase();
    $db->select("project", "p_name LIKE '%{$_POST["p_name"]}%'");
    if ($db->length() == 0)
        echo 0;
    else
        echo $db->getList();
}

function teacher() {

    $db = new DataBase();
    $db->select("project", "p_adviser LIKE '%{$_POST["p_adviser"]}%'");
    if ($db->length() == 0)
        echo 0;
    else
        echo $db->getList();
}

function keyword() {

    $db = new DataBase();
    $db->distinct("keyword", "k_value LIKE '%{$_POST["k_value"]}%'","","k_project");
    $array = array();
    while (($result = $db->getOne()) != null) {
        $db2 = new DataBase();
        $db2->select("project", "p_id = {$result["k_project"]}");
        $array[] = $db2->getList();
    }
    echo json_encode($array);
}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
