<?
session_start();
if ($_SESSION['user']){
    header('Location: account.php');
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
                <form action="components/auth.php" method="post">
                    <p>АВТОРИЗАЦИЯ</p>
                    <p><input type="text" name="login" placeholder="Введите логин" style="font-family: MyFont;" class="custom_input"></p>
                    <p><input type="password" name="password" placeholder="Введите пароль" style="font-family: MyFont;" class="custom_input"></p>
                    <p><button type="submit" style="font-family: MyFont;" class="custom_submit">Войти</button></p>
                    <p>Еще нет учетной записи? <a href="registration.php">Регистрация</a></p>
                    <? if ($_SESSION['message']){
                        echo '<p>' . $_SESSION['message'] .'</p>';
                    }
                    unset($_SESSION['message']);
                    ?>
                </form>
        </div>
    </div>
</div>
</body>
<? require_once 'components/footer.php' ?>
</html>