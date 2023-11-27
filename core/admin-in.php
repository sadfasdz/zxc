<?php

session_start();


$connect =  mysqli_connect('localhost','root', '','vkr_test');

$surname = ($_POST['surname']) ? $connect->real_escape_string(trim($_POST['surname'])) : '';
$salt = "пальма";
$pass = ($_POST['pass']) ? $connect->real_escape_string(trim($_POST['pass'])) : '';
// $password = md5($salt.$pass);
$password = $pass;
$captcha = ($_POST['captcha']) ? $connect->real_escape_string(trim($_POST['captcha'])) : ''; 
$capnum = $_SESSION['CODE'];

if($check_user = mysqli_query($connect,"SELECT * FROM `test` WHERE `surname` = '$surname' AND `pass` = '$password' AND `user` = 'admin' AND '$capnum'='$captcha'")) {

    if (mysqli_num_rows($check_user) > 0) {
        $user = mysqli_fetch_assoc($check_user);


        $_SESSION['user'] = [
            "id" => $user['id'],
           "user" =>$user['user']
        ];


        header('Location: ../index.php');

    }
}
if ($check_user = mysqli_query($connect,"SELECT * FROM `test` WHERE `surname` = '$surname' AND `pass` = '$password' AND `user` = 'pathient' AND '$capnum'='$captcha'")) {

    if (mysqli_num_rows($check_user) > 0) {
        $user = mysqli_fetch_assoc($check_user);


        $_SESSION['user'] = [
            "id" => $user['id'],
           "user" =>$user['user']
        ];


        header('Location: ../pathientCabinet.php');

    }

}if ($check_user = mysqli_query($connect,"SELECT * FROM `test` WHERE `surname` = '$surname' AND `pass` = '$password' AND `user` = 'doctor' AND '$capnum'='$captcha'")) {

    if (mysqli_num_rows($check_user) > 0) {
        $user = mysqli_fetch_assoc($check_user);


        $_SESSION['user'] = [
            "id" => $user['id'],
           "user" =>$user['user']
            ];


        header('Location: ../database.php');

    }else { 
        $_SESSION['msg'] = 'неверный логин или пароль';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    
}
