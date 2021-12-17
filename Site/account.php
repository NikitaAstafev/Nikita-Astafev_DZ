<?
session_start();
if (!$_SESSION['user']){
    header('Location: authorization.php');
}
?>
<?
if (isset($_POST['fact'])) {
    $value = 'Недавно Вы были на сайте FACT';
    $url = 'https://fact.digital/';
    setcookie('recent', $value, time() + 3600 * 24 * 7);
    header ("Location: $url");
}
if (isset($_POST['bitrix'])) {
    $value = 'Недавно Вы были на сайте BITRIX';
    $url = 'https://www.1c-bitrix.ru/';
    setcookie('recent', $value, time() + 3600 * 24 * 7);
    header ("Location: $url");
}
?>
<? require_once 'components/switch-day-night.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='<?echo theme($hour); ?>' type='text/css' media='all'>
    <link rel="icon" href="img/logo-fav.png" type="image/png">
    <script src="https://use.fontawesome.com/1630570716.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
</head>
<? require_once 'components/header.php' ?>
<body >
<div style="height: 100vh;">
    <div class="auth-reg">
        <div class="child-auth-reg">
            <form>
                <p><img src="img/user.png" alt="404 user" width="100"></p>
                <h1><?= $_SESSION['user']['login'] ?></h1>
                <p>Добро пожаловать!</p>
            </form>
            <? echo '<p style="font-size: 20px;">' . $_COOKIE['recent'] . '</p>';?>
            <form action="account.php" method="post">
                <p>
                    <button type="submit" value="FACT" name="fact" class="custom_button">
                        <img src="img/fact.png" style="border-radius: 0px">
                    </button>
                    <button type="submit" value="BITRIX" name="bitrix" class="custom_button">
                        <img src="img/bitrix.png" style="border-radius: 0px">
                    </button>
                </p>
                <p><a href="components/exit.php" class="logout">Выход</a></p>
            </form>
        </div>
    </div>
</div>
</body>
<? require_once 'components/footer.php' ?>
</html>