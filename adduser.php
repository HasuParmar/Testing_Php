<?php

if($_POST) {
    require 'vendor/autoload.php';
    require 'helper/helper.php';
    $connection = new MongoDB\Client("mongodb://127.0.0.1/");


    $db = $connection->demoadd;
    $rec['_id'] = getNextSequence("userid",$db);
    $rec['firstname'] = $_POST['firstname'];
    $rec['lastname'] = $_POST['lastname'];
    $rec['username'] = $_POST['username'];
    $rec['password'] = $_POST['password'];
    $db->emp->insertOne($rec);

    header("Location:add.php");
}
?>
