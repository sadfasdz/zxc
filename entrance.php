<?php
session_start();
if ($_SESSION['user']){
    header('Location:../index.php');
}
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
<header class = "header">
    <div class="conteiner">
        <div class="modal" id="myModal">
            <form class="modal-form" action="core/admin-in.php" method="post" id="modal-content">
                <span class="close" id="close">&times;</span>
                <div class="form__data">
                    <input type="text" name="surname" placeholder="Введите логин" class="form__add" required >
                    <input type="password" name="pass" placeholder="Введите пароль" class="form__add" required >
                    <div class="captcha">
                        <input id="captcha" class="input__captcha form__add" name="captcha" placeholder="Введите число" required>
                        <img class="captcha" src="core/captcha.php"/>
                    </div>
                    <button class="btn" type="submit">Войти</button>
                   
                </div>
            </form>
        </div>
<?php 
if($_SESSION['msg']){
    echo ' <div class="msg btn-ent">' . $_SESSION['msg'] . '</div>';
}
unset($_SESSION['msg']);
?>
        <div class="btn-entrance">
        <button class="btn-ent" id="btn-open">Личный кабинет</button>
        </div>
        <div class="title">
            <h1>
Что такое ГАЛОКАМЕРА?
            </h1>
            <p>
                Галокамера — это комната, в которой создаются условия соляной пещеры или спелеошахты. Стены и пол комнаты покрыты каменной солью, которая действует как ионизатор и улучшает качество воздуха.
            </p>
        </div>
    </div>

</header>

<main class="main">
<div class="conteiner">
<div class="info">
    <div class="info__title">
        Как соляная комната влияет на организм?
    </div>
    <div class="info__plus">
        <div class="body">
                Восстанавливаются функции бронхов и улучшаются системы внешнего дыхания
        </div>
        <div class="body">
            Восстанавливаются функции бронхов и улучшаются системы внешнего дыхания
        </div>
        <div class="body">
            Улучшается обмен веществ и ускоряется вывод токсинов
        </div>
        <div class="body">
            Улучшаются процессы в нервной системе
        </div>
        <div class="body">
            Нормализуется белковый и углеводный обмен
        </div>
        <div class="body">
            Восстанавливаются функции бронхов и улучшаются системы внешнего дыхания
        </div>
    </div>
</div>
</div>
</main>

<footer class="footer">
    <div class="conteiner">
        <ul class="data_footer">
            <li><div  class="danye_footer__silka">ГАЛОКАМЕРА </div></li>
            <li><div class="danye_footer__silka">8 (812) 123-45-67</div></li>
            <li>
                <ul class="danye_footer-web ">
                    <li><a href="#" class="danye_footer-web__web"><img src="img/Vector.png" /></a></li>
                    <li><a href="#" class="danye_foote-web__web"><img src="/img/2.png" height="14" width="24"/></a></li>
                    <li><a href="#" class="danye_footer-web__web"><img src="/img/Vector (1).png" height="20" width="12"/></a></li>
                </ul>
            <li><div class="danye_footer__silka">© le-corte.ru</div></li>
        </ul>
    </div>
</footer>



<script src="javaScript/mainJS.js">
</script>
</body>
</html>
