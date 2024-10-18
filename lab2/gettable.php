<?php
/*
   ЗАДАНИЕ 1
   - Опишите функцию getTable()
   - Задайте для функции три аргумента: $cols, $rows, $color

   ЗАДАНИЕ 2
   - Откройте файл table.php
   - Скопируйте код, который отрисовывает таблицу умножения
   - Вставьте скопированный код в тело функции getTable()
   - Измените код таким образом, чтобы таблица отрисовывалась в зависимости от входящих параметров $cols, $rows и $color
   - Добавьте в объявлние функции описание типов аргументов
   */

function getTable(int $cols = 10, int $rows = 10, string $color = 'yellow'): int
{
    //подсчёт количества вызовов
    static $count = 0;
    ++$count;

    echo '<table>';

    echo '<tr>';
    echo '<th style="background-color:' . $color . ';">*</th>';
    for ($i = 1; $i <= $cols; $i++)
        echo '<th style="background-color:' . $color . ';">', $i, '</th>';
    echo '</tr>';

    for ($i = 1; $i <= $rows; $i++) {
        echo '<tr>';

        echo '<th style="background-color:' . $color . ';">', $i, '</th>';
        for ($j = 1; $j <= $cols; $j++)
            echo '<td>', $i * $j, '</td>';
        echo '</tr>';
    }

    echo '</table>';

    return $count;
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица умножения</title>
    <style>
        table {
            border: 2px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid black;
        }

        th {
            background-color: yellow;
        }
    </style>
</head>

<body>
    <h1>Таблица умножения</h1>
    <?php
    /*
       ЗАДАНИЕ 3
       - Отрисуйте таблицу умножения вызывая функцию getTable() с различными параметрами
       - Создайте локальную статическую переменную $count для подсчёта числа вызовов функции getTable()
       - Функция getTable() должна возвращать значение переменной $count
       */
    /*
       ЗАДАНИЕ 4
       - Измените входящие параметры функции getTable() на параметры по умолчанию
       - Добавьте описание функции getTable() с помощью стандарта PHPDoc https://ru.wikipedia.org/wiki/PHPDoc
       */
    /*
       ЗАДАНИЕ 5
       - Отрисуйте таблицу умножения вызывая функцию getTable() без параметров
       - Отрисуйте таблицу умножения вызывая функцию getTable() с одним параметром
       - Отрисуйте таблицу умножения вызывая функцию getTable() с двумя параметрами
       - Используя статическую переменную $count выведите общее число вызовов функции getTable()
       */

    $count = getTable();
    echo "Функция вызвана $count раз(а).<br><br>";

    $count = getTable(5);
    echo "Функция вызвана $count раз(а).<br><br>";

    $count = getTable(5, 5);
    echo "Функция вызвана $count раз(а).<br><br>";

    $count = getTable(5, 5, 'lightblue');
    echo "Функция вызвана $count раз(а).<br><br>";
    ?>
</body>

</html>