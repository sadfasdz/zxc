<?php


session_start();


$connect = mysqli_connect('localhost','root', '','vkr_test');

if(isset($_GET['id'])){
    $id = $_GET['id'];


    $query =  mysqli_query($connect, "UPDATE `test` SET `totalL` = (`totalL`-1) WHERE `test`.`id` = '$id'");


    header('Location: ../database.php') ;

}