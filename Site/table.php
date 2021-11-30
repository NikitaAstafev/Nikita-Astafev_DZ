<? require_once 'components/switch-day-night.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/table-styles.css">
    <link rel='stylesheet' href='<? echo $style; ?>' type='text/css' media='all'>
    <link rel="icon" href="img/logo-fav.png" type="image/png">
    <script src="https://use.fontawesome.com/1630570716.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица Менделеева</title>
</head>
<? require_once 'components/header.php' ?>
<body>
<div class="main_content">
    <table align="center">
        <div class="caption-table">Таблица Менделеева</div>
        <tr>
            <td rowspan="2">Периоды</td>
            <td rowspan="2">Ряды</td>
            <td colspan="4">Группы элементов</td>
        </tr>
        <tr>
            <td>I</td>
            <td>II</td>
            <td>III</td>
            <td>IV</td>
        </tr>
        <tr>
            <td>I</td>
            <td>1</td>
            <td>
                <a href="https://ru.wikipedia.org/wiki/Водород" style="color:black">
                    <div class="element1">
                    <div class="symbol">H</div>
                    <div class="number">1</div>
                    <br>
                    <div class="weight">1,00797</div>
                    <br>
                    <div class="name">Водород</div>
                    </div>
                </a>
            </td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>II</td>
            <td>2</td>
            <td>
                <a href="https://ru.wikipedia.org/wiki/Литий" style="color:black">
                    <div class="element1">
                    <div class="symbol">Li</div>
                    <div class="number">3</div>
                    <br>
                    <div class="weight">6,939</div>
                    <br>
                    <div class="name">Литий</div>
                    </div>
                </a>
            </td>
            <td>
                <a href="https://ru.wikipedia.org/wiki/Бериллий" style="color:black">
                    <div class="element1">
                    <div class="symbol">Be</div>
                    <div class="number">4</div>
                    <br>
                    <div class="weight">9,0122</div>
                    <br>
                    <div class="name">Бериллий</div>
                    </div>
                </a>
            </td>
            <td>
                <a href="https://ru.wikipedia.org/wiki/Бор" style="color:black">
                    <div class="element2">
                    <div class="symbol">B</div>
                    <div class="number">5</div>
                    <br>
                    <div class="weight">10,811</div>
                    <br>
                    <div class="name">Бор</div>
                    </div>
                </a>
            </td>
            <td>
                <a href="https://ru.wikipedia.org/wiki/Углерод" style="color:black">
                    <div class="element2">
                    <div class="symbol">С</div>
                    <div class="number">6</div>
                    <br>
                    <div class="weight">12,01115</div>
                    <br>
                    <div class="name">Углерод</div>
                    </div>
                </a>
            </td>
        </tr>
        <tr>
            <td>III</td>
            <td>3</td>
            <td>
                <a href="https://ru.wikipedia.org/wiki/Натрий" style="color:black">
                    <div class="element1">
                    <div class="symbol">Na</div>
                    <div class="number">11</div>
                    <br>
                    <div class="weight">22,9898</div>
                    <br>
                    <div class="name">Натрий</div>
                    </div>
                </a>
            </td>
            <td>
                <a href="https://ru.wikipedia.org/wiki/Магний" style="color:black">
                    <div class="element1">
                    <div class="symbol">Mg</div>
                    <div class="number">12</div>
                    <br>
                    <div class="weight">24,312</div>
                    <br>
                    <div class="name">Магний</div>
                    </div>
                </a>
            </td>
            <td>
                <a href="https://ru.wikipedia.org/wiki/Алюминий" style="color:black">
                    <div class="element2">
                    <div class="symbol">Al</div>
                    <div class="number">13</div>
                    <br>
                    <div class="weight">26,9815</div>
                    <br>
                    <div class="name">Алюминий</div>
                    </div>
                </a>
            </td>
            <td>
                <a href="https://ru.wikipedia.org/wiki/Кремний" style="color:black">
                    <div class="element2">
                    <div class="symbol">Si</div>
                    <div class="number">14</div>
                    <br>
                    <div class="weight">28,086</div>
                    <br>
                    <div class="name">Кремний</div>
                    </div>
                </a>
            </td>
        </tr>
        <tr>
            <td >IV</td>
            <td>4</td>
            <td>
                <a href="https://ru.wikipedia.org/wiki/Калий" style="color:black">
                    <div class="element1">
                    <div class="symbol">K</div>
                    <div class="number">19</div>
                    <br>
                    <div class="weight">39,102</div>
                    <br>
                    <div class="name">Калий</div>
                    </div>
                </a>
            </td>
            <td>
                <a href="https://ru.wikipedia.org/wiki/Кальций" style="color:black">
                <div class="element1">
                    <div class="symbol">Ca</div>
                    <div class="number">20</div>
                    <br>
                    <div class="weight">40,08</div>
                    <br>
                    <div class="name">Кальций</div>
                </div>
                </a>
            </td>
            <td>
                <a href="https://ru.wikipedia.org/wiki/Скандий" style="color:black">
                    <div class="element3">
                    <div class="symbol2">Cs</div>
                    <div class="number2">21</div>
                    <br>
                    <div class="weight2">44,956</div>
                    <br>
                    <div class="name2">Скандий</div>
                    </div>
                </a>
            </td>
            <td>
                <a href="https://ru.wikipedia.org/wiki/Титан" style="color:black">
                    <div class="element3">
                    <div class="symbol2">Ti</div>
                    <div class="number2">22</div>
                    <br>
                    <div class="weight2">47,90</div>
                    <br>
                    <div class="name2">Титан</div>
                    </div>
                </a>
            </td>
        </tr>
    </table>
</div>
</body>
<? require_once 'components/footer.php' ?>
</html>