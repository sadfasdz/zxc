<?php
session_start();
?>


<?php





$connect = mysqli_connect('localhost','root', '','vkr_test');


$id = $_POST['id'];
$surname = $_POST['surname'];
$name = $_POST['name'];
$patronymic = $_POST['patronymic'];
$phon = $_POST['phon'];
$kons = ($_POST['kons']);
$time = $_POST['time'];
$rec = $_POST['rec'];
//$totalV = $_POST['totalV'];
//$totalL = $totalV;

mysqli_query($connect, "UPDATE `test` SET `surname` = '$surname',`name`='$name', `patronymic` = '$patronymic', `phon`='$phon', `kons`='$kons', `time`='$time' , `rec`='$rec' WHERE   `test`.`id` = '$id'");

//,`totalA` = (`totalA`+1),`totalV` = '$totalV',`totalL` = '$totalL'

header('Location: ../database.php') ;
// echo $_POST['time'];