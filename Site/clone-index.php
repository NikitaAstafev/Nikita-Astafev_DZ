<? require_once 'components/switch-day-night.php' ?>
<? require_once 'components/functions.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='<? echo theme($hour); ?>' type='text/css' media='all'>
    <link rel="icon" href="img/logo-fav.png" type="image/png">
    <script src="https://use.fontawesome.com/1630570716.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clone Main Page</title>
</head>
<? require_once 'components/header.php' ?>
<body>
    <div class="main_content">
        <div class="about-me">
            <div class="photo"><img src="img/photo.jpg" alt=" 404 photo" width="350"></div>
            <div class="top">
<?
$str1="Астафьев Никита Игоревич";
echo $str1;
?>
            </div>
            <div class="left">
<?
$str2="Обо мне: <br>
Закончил магистратуру в МГТУ им. Г.И. Носова по специальности: Электроника и наноэлектроника. <br>
Из хобби наверное можно выделить что люблю поиграть на ПК, порисовать в таких программах как CorelDraw, PS, SAI, вот как пример одна из работ:<br>";
$arr[0] = mb_substr($str2, 0,14);
$arr[1] = mb_substr($str2,14);
echo '<text style="color: #55AAFF">'. $arr[0] . '</text>' . ' ';
echo $arr[1];
echo '<img src="img/img.png" alt=" 404 img" width="350">' . '<br>';
$str3="Работал графическим дизайнером в компании МагПленка, Полимеры магнитки и так же фрилансил по графике. <br>
Сейчас нацелен успешно пройти учебный курс и трудоустроиться в вашу компанию.";
echo $str3;
?>
            </div>
            <div class="right">
<? $str4="Отзыв: <br>
Первая неделя занятий была очень продуктивная, узнал немало нового, да и подтянул старые знания. <br>
Занятия очень интересные, на них не заскучаешь, все достаточно подробно и ясно объясняют. <br>
Темп занятий меня устраивает, но иногда очень долго разбираем то что у кого то не получается, а так все супер! <br>
Сложностей пока ни с чем не возникло и надеюсь в дальнейшем их не будет!";
for ($i=0; $i <= 200; $i++){
    if ($i % 2 == 0) {
        echo str_in_arr($str4)[$i] . ' '  ;
    }
    else echo '<text style="color: #55AAFF">'. str_in_arr($str4)[$i] . '</text>' . ' ' ;
}
?>
            </div>
        </div>
<?
$str5 = "NAVI G2 GAMBIT HEROIC";
$arr6 = array_merge(str_in_arr($str1), str_in_arr($str2), str_in_arr($str3), str_in_arr($str4), str_in_arr($str5));
$str6 = implode(' ', $arr6);
$today = time();
$bday = strtotime("1995-09-28");
?>
        <section class="container-flex">
            <div class="anim">
                <div class="flex-item"><img src="img/navi.png" alt="404"></div>
                <div class="flex-item"><? echo str_in_arr($str5)[0];?></div>
            </div>
            <div class="anim">
                <div class="flex-item"><img src="img/g2.png" alt="404"></div>
                <div class="flex-item"><? echo str_in_arr($str5)[1];?></div>
            </div>
            <div class="anim">
                <div class="flex-item"><img src="img/gambit.png" alt="404"></div>
                <div class="flex-item"><? echo str_in_arr($str5)[2];?></div>
            </div>
            <div class="anim">
                <div class="flex-item"><img src="img/heroic.png" alt="404"></div>
                <div class="flex-item"><? echo str_in_arr($str5)[3];?></div>
            </div>
        </section>
        <div align="center" style="font-size: 25px;">
<?
echo 'Количество слов на странице: ' . count_word($arr6) .'<br>';
echo 'Количество гласных букв: '. vowels($str6) .'<br>';
echo 'Дата рождения: 28.09.1995 ' . 'Текущая дата: ' . date('d.m.Y') . '<br>' ;
echo 'Количество дней: ' . floor(days($today,$bday) / (60 * 60 * 24));
?>
        </div>
    </div>
</body>
<? require_once 'components/footer.php' ?>
</html>