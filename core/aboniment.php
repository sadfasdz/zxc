<?php

session_start();


$connect = mysqli_connect('localhost', 'root', '', 'vkr_test');



$id = $_POST['id'];
$totalV = $_POST['totalV'];
$result = mysqli_query($connect, "UPDATE `test` SET `totalA` = (`totalA`+1), `totalV` = '$totalV',`totalL` = '$totalV'  WHERE `test`.`id` = '$id'");



header('Location: ../database.php') ;
