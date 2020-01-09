<?php
if ($_POST) {
    require 'vendor/autoload.php';
    $connection = new MongoDB\Client("mongodb://127.0.0.1/");
    $db = $connection->demoadd;
    $id = new MongoDB\BSON\ObjectId($_POST['id']);
    $db->emp->updateOne(
        array('_id' => $id),
        array(
            '$set' => array(
                'firstname' => $_POST["firstname"],
                'lastname' => $_POST['lastname'],
                'username' => $_POST['username'],
            )
        )
    );
    header("Location:add.php");
}
?>