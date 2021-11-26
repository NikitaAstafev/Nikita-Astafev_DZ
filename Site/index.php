<?
date_default_timezone_set('Asia/Yekaterinburg');
$hour=date('H');
if (($hour>=8) && ($hour<20)){
    $style = '/css/styles.css';
    }
else{
    $style = '/css/styles-night.css';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='<? echo $style; ?>' type='text/css' media='all'>
    <link rel="icon" href="/img/logo-fav.png" type="image/png">
    <script src="https://use.fontawesome.com/1630570716.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Site</title>
</head>
<header>
    <div></div>
    <div align="center">
        <a href="/html/table.html" class="logo"></a>
    </div>
    <div></div>
</header>
<body>
    <div class="main_content">
        <div class="about-me">
            <div class="photo"><img src="/img/photo.jpg" alt=" 404 photo" width="350"></div>
            <div class="top">Астафьев Никита Игоревич</div>
            <div class="left">
                Обо мне:
                <br>
                Закончил магистратуру в МГТУ им. Г.И. Носова
                по специальности: Электроника и наноэлектроника.
                <br>
                Из хобби наверное можно выделить что люблю поиграть на ПК, порисовать в таких программах как CorelDraw, PS, SAI, вот как пример одна из работ:
                <br>
                <img src="/img/img.png" alt=" 404 img" width="350">
                <br>
                Работал графическим дизайнером в компании МагПленка, Полимеры магнитки и так же фрилансил по графике.
                <br>
                Сейчас нацелен успешно пройти учебный курс и трудоустроиться в вашу компанию.
            </div>
            <div class="right">
                Отзыв:
                <br>
                Первая неделя занятий была очень продуктивная, узнал немало нового, да и подтянул старые знания.
                <br>
                Занятия очень интересные, на них не заскучаешь, все достаточно подробно и ясно объясняют.
                <br>
                Темп занятий меня устравает, но иногда очень долго разбираем то что у кого то не получается, а так все супер!
                <br>
                Сложностей пока ни с чем не возникло и надеюсь в дальнейшем их не будет!
            </div>
        </div>
        <section class="container-flex">
            <div class="anim">
                <div class="flex-item"><img src="/img/navi.png" alt="404"></div>
                <div class="flex-item">NAVI</div>
            </div>
            <div class="anim">
                <div class="flex-item"><img src="/img/g2.png" alt="404"></div>
                <div class="flex-item">G2</div>
            </div>
            <div class="anim">
                <div class="flex-item"><img src="/img/gambit.png" alt="404"></div>
                <div class="flex-item">GAMBIT</div>
            </div>
            <div class="anim">
                <div class="flex-item"><img src="/img/heroic.png" alt="404"></div>
                <div class="flex-item">HEROIC</div>
            </div>
        </section>
    </div>
</body>
<footer>
    <div class="footer-main">
        <div></div>
        <div></div>
        <div class="social-network">
            <ul class="social-icons">
                <li><a href="https://vk.com/"><i class="fa fa-vk"></i></a></li>
                <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
            </ul>
        </div>
    </div>
</footer>
</html>