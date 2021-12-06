<? require_once 'components/switch-day-night.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <link rel='stylesheet' href='<?echo theme($hour); ?>' type='text/css' media='all'>
        <link rel="icon" href="img/logo-fav.png" type="image/png">
        <script src="https://use.fontawesome.com/1630570716.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Регистрация</title>
</head>

<? require_once 'components/header.php' ?>
<body >
<div style="height: 100vh;">
    <div class="auth-reg">
        <div class="child-auth-reg">
            <form  method="post">
                <p>РЕГИСТРАЦИЯ</p>
                <p><input type="text" name="name" placeholder="Логин" style="font-family: MyFont;" class="custom_input"></p>
                <p><input type="password" name="pass" placeholder="Пароль" style="font-family: MyFont;" class="custom_input"></p>
                <p><input type="submit" value="Зарегистрироваться" style="font-family: MyFont;" class="custom_submit"></p>
                <p>Уже есть учетная запись? <a href="authorization.php">Авторизация</a></p>
                <?php
                $_POST['name'] = trim($_POST['name']);
                $_POST['pass'] = trim($_POST['pass']);
                if(empty($_POST['name'])) exit();
                if(empty($_POST['name'])) exit('<p>Поле "Логин" не заполнено<p>');
                if(empty($_POST['pass'])) exit('<p>Поле "Пароль" не заполнено<p>');
                $filename = "users.txt";
                $arr = file($filename);
                foreach($arr as $line)
                {
                    $data = explode("--",$line);
                    $temp[] = $data[0];
                }
                if(in_array($_POST['name'], $temp))
                {
                    exit("<p>Пользователь с таким именем уже зарегистрирован<p>");
                }
                $fd = fopen($filename, "a");
                if(!$fd) exit("Ошибка при открытии файла данных");
                $str = $_POST['name']."--".
                    md5($_POST['pass'])."--"."\r\n";
                fwrite($fd,$str);
                fclose($fd);
                ?>
            </form>
        </div>
    </div>
</div>
</body>
<? require_once 'components/footer.php' ?>
</html>
