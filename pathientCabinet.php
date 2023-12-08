<?php
session_start();

if (!$_SESSION['user']){
    header('Location: entrance.php');
}else{
    if ($_SESSION['user']['user'] === 'admin'){
    header('Location: update.php');
}
    if($_SESSION['user']['user'] === 'doctor'){
    header('Location: update.php');
}
}

$s = $_SESSION ['user']['id'];


$connect = mysqli_connect('localhost','root', '','vkr_test');

$snp = mysqli_query( $connect, "SELECT * FROM `test` WHERE  `id` = '$s'");
$SNP = mysqli_fetch_assoc($snp);
$data = ($SNP);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="header__cab">
    <div class="logaut">    
        <div class="SNP">
            <div class="SNP__n">
                <?php echo htmlspecialchars($SNP['surname']) ?>
            </div>
            <div class="SNP__n">
                <?php echo htmlspecialchars($SNP['name']) ?>
            </div>
            <div class="SNP__n">
                <?php echo htmlspecialchars($SNP['patronymic']) ?>
            </div>
        </div>
        <a href="core/logout.php" class="log_link back">
            выход
        </a>
    </div>
</div>
<div class="conteiner conteiner__cab">


    <div class="repass">
        <div class="SNP__n">
            Статистика
        </div>
        <button id="btn-open" class="btn repass">изменить пароль</button>
        <div class="modal" id="myModal">
            <form class="modal-form" action="core/updatePassP.php" method="post" id="modal-content">
                <span class="close" id="close">&times;</span>
                <div class="form__data">
                    <input type="hidden" name="id" value="<?=$SNP['id']?>">
                    <input type="text" name="pass" placeholder="Введите новый пароль" class="form__add" required>
                    <button class="btn" type="submit">изменить</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="body__db">

    <table class="db">
        <tr class="head">
            <th>количество приобретенных аб.</th>
            <th>количество посещений по аб.</th>
            <th>осталось посещений по аб.</th>
            <th>доп.процедуры</th>
            <!-- <th>консультации врача</th> -->
            <th>тариф</th>
        </tr>
            <tr class="tr">
                <td class="wrap"><?php echo htmlspecialchars($data['totalA']); ?></td>
                <td class="wrap"><?php echo htmlspecialchars($data['totalV']); ?></td>
                <td class="wrap"><?php echo htmlspecialchars($data['totalL']); ?></td>
                <td class="wrap"><?php echo htmlspecialchars($data['rec']); ?></td>
                <!-- <td class="wrap">
                  <?php// echo htmlspecialchars($data['kons'] . "\r\n" . $data['time']); ?>
              </td> -->
                <td class="wrap"><?php echo htmlspecialchars($data['tarif']); ?></td>
            </tr>
    </table>
</div>

<script src="javaScript/mainJS.js"></script>
</body>
</html>
