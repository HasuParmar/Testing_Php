<?php
$id = $_GET['id'];
require 'vendor/autoload.php';
$connection = new MongoDB\Client("mongodb://127.0.0.1/");
$db = $connection->demoadd;
$id = new MongoDB\BSON\ObjectId($id);
$ids = $db->emp->findOne(array('_id' => $id));

$db->emp->deleteOne($ids);

header("Location:add.php");