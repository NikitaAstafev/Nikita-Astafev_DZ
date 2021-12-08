<?
session_start();
if (!isset($_SESSION['color'])) {
    $_SESSION['color'] = $_POST['colors'];
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
    <title>Brook Site</title>
</head>
<? require_once 'components/header.php' ?>
<body style="background-color: <? echo $_SESSION['color']; ?>">
    <div class="main_content" align="center">
        <p>Выберите цвет фона</p>
        <form action="colors.php" method="post">
            <select name="colors">
                <option>Red</option>
                <option>Blue</option>
                <option>Green</option>
                <option>Orange</option>
            </select>
            <input type="submit" value="Применить">
        </form>
    </div>
</body>
<? require_once 'components/footer.php' ?>
</html>
