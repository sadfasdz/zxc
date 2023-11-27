
<?php
session_start();

if (!$_SESSION['user']){
    header('Location: entrance.php');

}
$connect = mysqli_connect('localhost','root', '','vkr_test');

$id =  $_GET['id'];

$result = mysqli_query($connect, "SELECT * FROM `test` WHERE `id` = '$id'");

$test = mysqli_fetch_assoc($result);

?>



