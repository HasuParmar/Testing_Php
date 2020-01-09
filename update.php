<?php
    $id = $_GET['id'];
    require 'vendor/autoload.php';
    $connection = new MongoDB\Client("mongodb://127.0.0.1/");
    $id = new MongoDB\BSON\ObjectId($id);
    $db = $connection->demoadd;
    $show = $db->emp->findOne(array('_id' => $id));
?>

<html>
<title></title>
<head>

</head>
<body>
<form action="updatedata.php" method="post">
    First Name: <input type="text" name="firstname" value="<?php echo $show['firstname'] ?>"><br>
    Last Name: <input type="text" name="lastname" value="<?php echo $show['lastname'] ?>"><br>
    User Name: <input type="text" name="username" value="<?php echo $show['username'] ?>"><br>
    <input name="id" type="hidden" value="<?php echo $show['_id'] ?>">
    <input type="submit" name="submit" value="submit"/>
</form>
</body>
</html>