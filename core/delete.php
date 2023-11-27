<?php
session_start();
$connect = mysqli_connect('localhost','root', '','vkr_test');

if(isset(htmlspecialchars($_GET['id']))){
    $id = htmlspecialchars($_GET['id']);

    $query =  mysqli_query($connect, "DELETE FROM `test` WHERE `test`.`id` = '$id'");

}


header('Location: ../database.php');


