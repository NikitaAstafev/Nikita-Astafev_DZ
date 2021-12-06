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
                    <?php
                    $filename = "users.txt";
                    define("FIRST",1);
                    if(empty($_POST))
                    {
                        ?>
                            <form method=post>
                            <p>АВТОРИЗАЦИЯ</p>
                                <p><input type="text" name="name" placeholder="Логин" style="font-family: MyFont;" class="custom_input"></p>
                                <p><input type="password" name="pass" placeholder="Пароль" style="font-family: MyFont;" class="custom_input"></p>
                                <p><input type="submit" value="Войти" style="font-family: MyFont;" class="custom_submit"></p>
                                <p>Еще нет учетной записи? <a href="registration.php">Регистрация</a></p>
                            </form>
                        <?php
                    }
                    else
                    {
                    $arr = file($filename);
                    $i = 0;
                    $temp = array();
                    foreach($arr as $line)
                    {
                        $data = explode("--",$line);
                        $temp['name'][$i]    =$data[0];
                        $temp['password'][$i] = $data[1];
                        $i++;
                    }
                    if(!in_array($_POST['name'],$temp['name']))
                    {
                        exit("<p>Такого пользователя не существует</p> <p><a href='authorization.php'>Назад</a></p>");
                    }
                    $index = array_search($_POST['name'],$temp['name']);
                    if(md5($_POST['pass']) != $temp['password'][$index])
                    {
                        exit("<p>Введен неверный пароль</p> <p><a href='authorization.php'>Назад</a></p>");
                    }
                    ?>
                    <form method="post">
                        <p><img src="img/user.png" alt="404 user" width="100"></p>
                        <h1><?= $_POST['name']; ?></h1>
                        <p>Добро пожаловать!</p>
                    </form>
                <?php
                }
                ?>

                </form>
        </div>
    </div>
</div>
</body>
<? require_once 'components/footer.php' ?>
</html>