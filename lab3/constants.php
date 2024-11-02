<?php
declare(strict_types=1);

$constants = get_defined_constants();

echo '<!DOCTYPE html>';
echo '<html lang="ru">';
echo '<head>';
echo '<title>Константы</title>';
echo '<link rel="stylesheet" href="constants.css">';
echo '</head>';

echo '<body>';
echo '<table>';
echo '<tr><th>Имя константы</th><th>Значение</th></tr>';
foreach ($constants as $name => $value)
    echo "<tr><td>{$name}</td><td>{$value}</td></tr>";

echo '</table>';
echo '</body>';
echo '</html>';

//inline стили убрать
//формат даты добавить
//пустой action убрать