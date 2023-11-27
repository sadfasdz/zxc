<?php


session_start();


$surname = $_POST['surname'];
$name = $_POST['name'];
$patronymic = $_POST['patronymic'];
$phon = $_POST['phon'];
$city = $_POST['city'];
$totalV = $_POST['totalV'];
$totalL = $totalV;
$rec = $_POST['rec'];
$kons = $_POST['kons'];
$tarif = $_POST['tarif'];
$salt = "пальма";
$password = $_POST['phon'];
$pass = md5($salt.$password);
$connect =  mysqli_connect('localhost','root', '','vkr_test');

 mysqli_query($connect, "INSERT INTO `test` ( `surname`, `name`, `patronymic`, `phon`, `city`, `totalA`, `totalV`, `totalL`, `rec`, `kons`, `tarif`, `user`, `pass`) 
VALUES ('$surname', '$name', '$patronymic', '$phon', '$city', '1', '$totalV', '$totalL', '$rec', '$kons', '$tarif', 'pathient','$pass')");



 header('Location: ../database.php') ;