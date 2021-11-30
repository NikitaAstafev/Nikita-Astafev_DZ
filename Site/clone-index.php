<? require_once 'components/switch-day-night.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='<? echo $style; ?>' type='text/css' media='all'>
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
$arr1=explode( ' ', $str1);
echo $str1;
?>
            </div>
            <div class="left">
<?
$str2="Обо мне: <br>
Закончил магистратуру в МГТУ им. Г.И. Носова по специальности: Электроника и наноэлектроника. <br>
Из хобби наверное можно выделить что люблю поиграть на ПК, порисовать в таких программах как CorelDraw, PS, SAI, вот как пример одна из работ:<br>";
$arr2=explode( ' ', $str2);
$arr22=explode( ' ', $str2);
$arr22[0] = mb_substr($str2, 0,14);
$arr22[1] = mb_substr($str2,14);
echo '<text style="color: #55AAFF">'. $arr22[0] . '</text>' . ' ';
echo $arr22[1] = mb_substr($str2,14);
echo '<img src="img/img.png" alt=" 404 img" width="350">' . '<br>';
$str3="Работал графическим дизайнером в компании МагПленка, Полимеры магнитки и так же фрилансил по графике. <br>
Сейчас нацелен успешно пройти учебный курс и трудоустроиться в вашу компанию.";
$arr3=explode(' ', $str3);
echo $str3;
?>
            </div>
            <div class="right">
<? $str4="Отзыв: <br>
Первая неделя занятий была очень продуктивная, узнал немало нового, да и подтянул старые знания. <br>
Занятия очень интересные, на них не заскучаешь, все достаточно подробно и ясно объясняют. <br>
Темп занятий меня устраивает, но иногда очень долго разбираем то что у кого то не получается, а так все супер! <br>
Сложностей пока ни с чем не возникло и надеюсь в дальнейшем их не будет!";
$arr4=explode( ' ', $str4);
for ($i=0; $i <= 200; $i++){
    if ($i % 2 == 0) {
        echo $arr4[$i] . ' '  ;
    }
    else echo '<text style="color: #55AAFF">'. $arr4[$i] . '</text>' . ' ' ;
}
?>
<?
$today = time();
$bday = strtotime("1995-09-28");
$days = $today - $bday;

?>
            </div>
        </div>
<?
$arr5 = ['NAVI', 'G2', 'GAMBIT', 'HEROIC'];
$arr6 = array_merge($arr1, $arr2, $arr3, $arr4, $arr5);
$str5 = implode(' ',$arr6);
$n = '~(?<vowels>[аеёиоуыэюяaeiouy])~iu';
preg_match_all($n, $str5 , $a);
$vowels = count(array_filter($a['vowels']));
?>
        <section class="container-flex">
            <div class="anim">
                <div class="flex-item"><img src="img/navi.png" alt="404"></div>
                <div class="flex-item"><? echo $arr5[0];?></div>
            </div>
            <div class="anim">
                <div class="flex-item"><img src="img/g2.png" alt="404"></div>
                <div class="flex-item"><? echo $arr5[1];?></div>
            </div>
            <div class="anim">
                <div class="flex-item"><img src="img/gambit.png" alt="404"></div>
                <div class="flex-item"><? echo $arr5[2];?></div>
            </div>
            <div class="anim">
                <div class="flex-item"><img src="img/heroic.png" alt="404"></div>
                <div class="flex-item"><? echo $arr5[3];?></div>
            </div>
        </section>
        <div align="center" style="font-size: 25px;">
<?
echo 'Количество слов на странице:' . ' ' . count($arr6) .'<br>';
echo 'Количество гласных букв: '. $vowels .'<br>';
echo 'Дата рождение: 28.09.1995 '. ' ' . 'Текущая дата: ' . ' ' .  date('d.m.Y') . '<br>' ;
echo 'Количество дней: ' . floor($days / (60 * 60 * 24));
?>
        </div>
    </div>
</body>
<? require_once 'components/footer.php' ?>
</html>