<?php
require 'vendor/autoload.php';
$connection = new MongoDB\Client("mongodb://127.0.0.1/");
$db = $connection->demoadd;
$show = $db->emp->find();

?>

<html>
<title>Tersting  file</title>
<head>

</head>
<body>
<form method="post" action="adduser.php">
    First Name: <input type="text" name="firstname"><br>
    Last Name: <input type="text" name="lastname"><br>
    User Name: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="SUBMIT">

</form>
<br>
<br>
<table border="1">
    <tr>
        <td>First Name</td>
        <td>Last Name</td>
        <td>User Name</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <?php
    foreach ($show as $row){
        ?>
        <tr>
            <td><?php echo $row['firstname'] ?></td>
            <td><?php echo $row['lastname'] ?></td>
            <td><?php echo $row['username'] ?></td>
            <td><a href="update.php?id=<?php echo $row['_id']; ?>">Edit</a> </td>
            <td><a href="delete.php?id=<?php echo $row['_id']; ?>">Delete</a> </td><br>
        </tr>
    <?php } ?>
</table >
</body>
</html>