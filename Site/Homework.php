<? require_once 'components/switch-day-night.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/table-styles.css">
    <link rel='stylesheet' href='<? echo theme($hour); ?>' type='text/css' media='all'>
    <link rel="icon" href="img/logo-fav.png" type="image/png">
    <script src="https://use.fontawesome.com/1630570716.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задачи</title>
</head>
<? require_once 'components/header.php' ?>
<body>
    <div class="main_content" align="center">
<?
echo "<h1>Задача #1</h1>";
$arr1 = [];
$N = 10;
for ($i=1; $i <= $N; $i++){
    $arr1[$i] = mt_rand(0,100);
if ($i % 2 == 0) {
    echo "<b>$arr1[$i]</b>" . '<br>';}
    else echo $arr1[$i] . '<br>';
}
    echo "<h1>Задача #2</h1>";
$arr2 = [
    "Japanese cars" => ["Toyota", "Mazda", "Acura", "Nissan"],
    "German cars"  => ["BMW", "Mercedes-Benz", "Audi", "Opel", "Porsche"],
    "Italian cars"  => ["Alfa-Romeo", "Ferrari", "Lamborghini"]
];

echo "<h2>Автомобили на букву А</h2>";
foreach ($arr2 as $key => $value) {
    foreach ($value as $A) {
        if (mb_substr($A, 0,1) == "A")
            echo "<b>$A</b>" . '<br>';
        else
            echo ' ';
    }
}
    echo "<h1>Задача #3</h1>";
    echo "<h2>Общее количество элементов массива</h2>";
$arr3 = [
    [1,2,3,4,5,6],
    [5,3,5,6],
    [6,1,6,8,2]
];
$num = 0;
foreach($arr3 as $key1) $num += count($key1);
    echo $num  . ' ';
    echo "<h2>Количество элементов массива по отдельности</h2>";
foreach ($arr3 as $key1) {
    echo count($key1) . ' ';
}
?>
    </div>
</body>
<? require_once 'components/footer.php' ?>
</html>