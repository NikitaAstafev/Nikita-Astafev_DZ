<? require_once 'components/switch-day-night.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='<?echo theme($hour); ?>' type='text/css' media='all'>
    <link rel="icon" href="img/logo-fav.png" type="image/png">
    <script src="https://use.fontawesome.com/1630570716.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Анкета</title>
</head>
<? require_once 'components/header.php' ?>
<body>
<div class="main_content" align="center">
<?
$str='1. Считаете ли Вы, что у многих ваших знакомых хороший характер?!
2. Раздражают ли Вас мелкие повседневные обязанности?!
3. Верите ли Вы, что ваши друзья преданы Вам?!
4. Неприятно ли Вам, когда незнакомый человек делает Вам замечание?!
5. Способны ли Вы ударить собаку или кошку?!
6. Часто ли Вы принимаете лекарства?!
7. Часто ли Вы меняете магазин, в который ходите за продуктами?!
8. Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись?!
9. Тяготят ли Вас общественные обязанности?!
10. Способны ли Вы ждать более 5 минут, не проявляя беспокойства?!
11. Часто ли Вам приходят в голову мысли о Вашей невезучести?!
12. Сохранилась ли у Вас фигура по сравнению с прошлым?!
13. Можете ли Вы с улыбкой воспринимать подтрунивание друзей?!
14. Нравится ли Вам семейная жизнь?!
15. Злопамятны ли Вы?!
16. Находите ли Вы, что стоит погода, типичная для данного времени года?!
17. Случается ли Вам с утра быть в плохом настроении?!
18. Раздражает ли Вас современная живопись?!
19. Надоедает ли Вам присутствие чужих детей в доме более одного часа?!';
$arr=explode('!', $str);
?>
<?
function result() {
    echo '<h1>Результат анкетирования</h1>';
    echo '<h3>' . $_POST['fio'] . '</h3>';
    $RightAnswer = 0;
    $result = Array (
        Array (
            "num"  => 7,
            "text" => "Вашим друзьям можно посочувствовать"
        ),
        Array (
            "num"  => 15,
            "text" => "Вы не лишены недостатков, но с вами можно ладить"
        ),
        Array (
            "num"  => 16,
            "text" => "У Вас покладистый характер"
        )
    );
    for ( $i = 1; $i <= 16; $i++ )
        !$_POST[$i] || $RightAnswer++;

    ?>
    <p>Вы набрали  <?php echo $RightAnswer; ?> баллов</p>
    <?php
        foreach ( $result as $val )
            if ( $RightAnswer <= $val [ 'num' ] ) {
                echo $val [ 'text' ];
                break;
            }
    ?>
<form method="post">
        <p>
            <input type="submit" value="Пройти еще раз">
        </p>
</form>
</div>
</body>
<? require_once 'components/footer.php' ?>
</html>
    <?php
    exit;
}
empty ( $_POST [ 'submit' ] ) || result ();
?>
<form name="test" action="" method="post">
        <h1>Анкета</h1>
        <p>Введите Ваше имя</p>
        <p>
            <input type="text" name="fio">
        </p>
        <p>
        <p><? echo $arr[0]; ?></p>
            <input type="radio" name="1" value="0" checked> Да
            <input type="radio" name="1" value="1"> Нет
        </p>
        <p><? echo $arr[1]; ?></p>
            <input type="radio" name="2" value="0" checked> Да
            <input type="radio" name="2" value="1"> Нет
        </p>
        <p><? echo $arr[2]; ?></p>
            <input type="radio" name="3" value="1" checked> Да
            <input type="radio" name="3" value="0"> Нет
        </p>
        <p><? echo $arr[3]; ?></p>
            <input type="radio" name="4" value="0" checked> Да
            <input type="radio" name="4" value="1"> Нет
        </p>
        <p><? echo $arr[4]; ?></p>
            <input type="radio" name="5" value="0" checked> Да
            <input type="radio" name="5" value="1"> Нет
        </p>
        <p><? echo $arr[5]; ?></p>
            <input type="radio" name="6" value="0" checked> Да
            <input type="radio" name="6" value="1"> Нет
        </p>
        <p><? echo $arr[6]; ?></p>
            <input type="radio" name="7" value="0" checked> Да
            <input type="radio" name="7" value="1"> Нет
        </p>
        <p><? echo $arr[7]; ?></p>
            <input type="radio" name="8" value="0" checked> Да
            <input type="radio" name="8" value="1"> Нет
        </p>
        <p><? echo $arr[8]; ?></p>
            <input type="radio" name="9" value="1" checked> Да
            <input type="radio" name="9" value="0"> Нет
        </p>
        <p><? echo $arr[9]; ?></p>
            <input type="radio" name="10" value="1" checked> Да
            <input type="radio" name="10" value="0"> Нет
        </p>
        <p><? echo $arr[10]; ?></p>
            <input type="radio" name="11" value="0" checked> Да
            <input type="radio" name="11" value="1"> Нет
        </p>
        <p><? echo $arr[11]; ?></p>
            <input type="radio" name="12" value="0" checked> Да
            <input type="radio" name="12" value="1"> Нет
        </p>
        <p><? echo $arr[12]; ?></p>
            <input type="radio" name="13" value="1" checked> Да
            <input type="radio" name="13" value="0"> Нет
        </p>
        <p><? echo $arr[13]; ?></p>
            <input type="radio" name="14" value="1" checked> Да
            <input type="radio" name="14" value="0"> Нет
        </p>
        <p><? echo $arr[14]; ?></p>
            <input type="radio" name="15" value="0" checked> Да
            <input type="radio" name="15" value="1"> Нет
        </p>
        <p><? echo $arr[15]; ?></p>
            <input type="radio" name="16" value="0" checked> Да
            <input type="radio" name="16" value="1"> Нет
        </p>
        <p><? echo $arr[16]; ?></p>
            <input type="radio" name="17" value="0" checked> Да
            <input type="radio" name="17" value="1"> Нет
        </p>
        <p><? echo $arr[17]; ?></p>
            <input type="radio" name="18" value="0" checked> Да
            <input type="radio" name="18" value="1"> Нет
        </p>
        <p><? echo $arr[18]; ?></p>
            <input type="radio" name="19" value="1" checked> Да
            <input type="radio" name="19" value="0"> Нет
        </p>
        <input type="submit" name="submit" value="Проверить">
    </form>
</div>
</body>
<? require_once 'components/footer.php' ?>
</html>