
<?php
session_start();

if (!$_SESSION['user']){
    header('Location: entrance.php');
}else{
    if ($_SESSION['user']['user'] === 'doctor'){
        header('Location: database.php');
    }
    if($_SESSION['user']['user'] === 'pathient'){
        header('Location: pathientCabinet.php');
    }
}
print_r($_SESSION['user']['user']);
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


<div>
    <p><?php print_r($_SESSION['user']['id'])?></p>
    <p><?php print_r($_SESSION['user']['name'])?></p>
</div>

<div class="conteiner">
    <div class="con">
    <div class="links">

        <a href="form.php" class="link btn">
            Добавить
        </a>

        <a href="database.php" class="link btn">
            посмотреть бд
        </a>
    </div>
    </div>
        <a href="core/logout.php" class="log_link back">
            выход
        </a>

</div>
</body>
</html>