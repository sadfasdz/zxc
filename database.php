
<?php
session_start();

if (!$_SESSION['user']){
    header('Location: entrance.php');
}else{
    if ($_SESSION['user']['user'] === 'admin'){
        header('Location: update.php');
    }
    if($_SESSION['user']['user'] === 'pathient'){
        header('Location: update.php');
    }
}


$s = $_SESSION ['user']['id'];


$connect = mysqli_connect('localhost','root', '','vkr_test');

$snp = mysqli_query( $connect, "SELECT * FROM `test` WHERE  `id` = '$s'");
$SNP = mysqli_fetch_assoc($snp);

//?>

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
        <a href="core/logout.php" class="log_link back">
            выход
        </a>
    </div>
    </div>
</div>
<div class="conteiner conteiner__cab">


    
    <div class="repass right">
    <div class="">
        <button id="repass" class="btn repass">изменить пароль</button>
        <div class="modal Modalpass" id="Modalpass">
    <form class="modal-form" action="core/updatePassD.php" method="post">
        <span class="close" id="closeP">&times;</span>
        <div class="form__data">
            <input type="hidden" name="id" value="<?=$SNP['id']?>">
            <input type="text" name="pass" placeholder="Введите новый пароль" class="form__add" required>
            <button class="btn" type="submit">изменить</button>
        </div>
    </form>
        </div>
    </div>
    </div>


    <div class="modal" id="myModal">
        <form class="modal-form" action="core/signup.php" method="post">
            <span class="close" id="close">&times;</span>
            <div class="form__data">
                <input type="text" name="surname" placeholder="Введите фамилию" class="form__add" required>
                <input type="text" name="name" placeholder="Введите имя" class="form__add" required>
                <input type="text" name="patronymic" placeholder="Введите отчество" class="form__add" required>
                <input type="tel" name="phon" placeholder="Введите номер телефона" class="form__add" required>
                <input type="text" name="city" placeholder="Введите город" class="form__add" required>
                <span>абонимент на количество посещенй</span>
                <select name="totalV">
                    <option>15</option>
                    <option>25</option>
                    <option>35</option>
                </select>
                <!-- <input type="text" name="kons" placeholder="Введите кон" class = "form__add">

                
 -->
                <input type="text" name="tarif" placeholder="Введите тариф" class = "form__add">

                <button class="btn" type="submit">добавить</button>
            </div>
        </form>
    </div>
</div>
<div class="search-add">
    <form method="post" class="search-form">
        <input type="text" name="search" class=" search" >
        <button  class="btn" type="submit"">поиск</button>
    </form>

    <button class="btn" id="btn-open" >добавить</button>
</div>
<div class="conteiner__bd">
     <div class="body__db">

            <table class="db">
                <tr class="head">
                    <th>Фамилия</th>
                    <th>Имя</th>
                    <th>Отчество</th>
                    <th>Номер телефона</th>
                    <th>город</th>
                    <th>количество приобретенных аб.</th>
                    <th>количество посещений по аб.</th>
                    <th>осталось посещений по аб.</th>
                    <th>консультации врача</th>
                    <th>доп.процедуры</th>
                    <th>тариф</th>
                </tr>
                <?php
                if (isset($_POST['search'])) {
                    $search = $_POST['search'];
                }
                if($search == ''){
                    $result =  mysqli_query($connect, "SELECT * FROM `test` WHERE `user` = 'pathient'");
                }else{
                $result = mysqli_query($connect, "SELECT * FROM `test` WHERE (`surname` = '$search' OR `name` = '$search' OR `patronymic` = '$search') AND `user` = 'pathient'");
                }
//                $result = mysqli_query($connect, "SELECT * FROM `test` WHERE `phon` = '$search' AND `user` = 'pathient'");
                while($data = mysqli_fetch_array($result))
                {?>
                <tr id="tr" class="tr">
                    <td class="wrap"><?php echo htmlspecialchars($data['surname']); ?></td>
                    <td class="wrap"><?php echo htmlspecialchars($data['name']); ?></td>
                    <td class="wrap"><?php echo htmlspecialchars($data['patronymic']); ?></td>
                    <td class="wrap"><?php echo htmlspecialchars($data['phon']); ?></td>
                    <td class="wrap"><?php echo htmlspecialchars($data['city']); ?></td>
                    <td class="wrap"><?php echo htmlspecialchars($data['totalA']); ?></td>
                    <td class="wrap"><?php echo htmlspecialchars($data['totalV']); ?></td>
                    <td class="wrap"><?php echo htmlspecialchars($data['totalL']); ?></td>
                    <td class="wrap"><?php echo htmlspecialchars($data['kons']."\r\n".$data['time']); ?></td>
                    <td class="wrap"><?php echo htmlspecialchars($data['rec']); ?></td>
                    <td class="wrap"><?php echo htmlspecialchars($data['tarif']); ?></td>

<!--                    <td class="btn btn-up"><a href="update.php?id=--><?//= $data['id'] ?><!--" class="btn">изменить</a></td>-->
                    <td class="td-aqua" ><button class="btnUp open-modal btnStyle" id="btn-openUp">изменить</button>
                        <div class="modal modalUp" id="updateModal">
                            <form class="modal-form" action="core/update-signup.php" method="post">
                                <span class="close modal__close" id="closeUp">&times;</span>
                                <div class="form__data">
                                    <input type="hidden" name="id" value="<?=$data['id']?>">
                                    <input type="text" name="surname" placeholder="Введите фамилию" class="form__add" value="<?=$data['surname']?>"  >
                                    <input type="text" name="name" placeholder="Введите имя" class="form__add" value="<?=$data['name']?>" >
                                    <input type="text" name="patronymic" placeholder="Введите отчество" class="form__add" value="<?=$data['patronymic']?>" >
                                    <input type="tel" name="phon" placeholder="Введите номер телефона" class="form__add" value="<?=$data['phon']?>" >
                                    <input type="date" name="kons" class="form__add" value="<?=$data['kons']?>" >
                                    <input type="time" name="time" class="form__add" value="<?=$data['time']?>" >
                                    <textarea name="rec" placeholder="Введите доп.процедуры" class = "form__add"><?=$data['rec']?></textarea>
                                    <button class="btn" type="submit">Изменить</button>
                                </div>
                            </form>
                        </div>
                    </td>
                    <td class="td-aqua"><a href="core/total.php?id=<?=$data['id']?>">посетил</a></td>

                    <td class="td-aqua"><button class="btnUp btnAb btnStyle" >продлить абонимент</button>
                        <div class="modal modalAb" id="ABModal">
                            <form class="modal-form" action="core/aboniment.php" method="post">
                                <span class="close closeAb" id="closeAB">&times;</span>
                                <div class="form__data">
                                    <input type="hidden" name="id" value="<?=$data['id']?>">
                                    <span>абонимент на количество посещенй</span><select name="totalV">
                                        <option>15</option>
                                        <option>25</option>
                                        <option>35</option>
                                    </select>
                                    <button class="btn" type="submit">продлить</button>
                                </div>
                            </form>
                        </div>
                    </td>
                </tr>
               <?php }?>
            </table>
        </div>
</div>



<script src="javaScript/mainJS.js"></script>
</body>
</html>