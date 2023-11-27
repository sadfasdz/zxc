<?php
session_start();
?>


<?php





$connect = mysqli_connect('localhost','root', '','vkr_test');

$id = $_POST['id'];

    $salt = "пальма";
    
    $pass = md5 ($salt.$_POST['pass']);

    mysqli_query($connect, "UPDATE `test` SET `pass` = '$pass' WHERE  `test`.`id` = '$id'");

header('Location: ../pathientCabinet.php');