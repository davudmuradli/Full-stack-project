<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include('head.php');
require('checklogin.php');
?>
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/finalwork3/classes/database.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/finalwork3/classes/users.php';
$connection = new mysqli("localhost","root","","test");
if(isset($_POST['search'])){
    $searchkey = $_POST['search'];
    $sql = "SELECT * FROM employees WHERE `Name Surname` LIKE '%$searchkey%' ";
}else{
    $sql = "SELECT * FROM employees";
    $searchkey = " ";
}

$result = mysqli_query($connection,$sql);

?>

    <form action="" method="post">
        <label>Search</label>
        <input type="text" name="search" value="<?php echo $searchkey;?>">
        <input type="submit">
    </form>
    <?php while ($row = mysqli_fetch_object($result)) { ?>
        <tr>
            <td><?php echo $row->namesurname?></td>
            <td><?php echo $row->adress?></td>
            <td><?php echo $row->salary?></td>
        </tr>
    <?php }?>

</body>
</html>