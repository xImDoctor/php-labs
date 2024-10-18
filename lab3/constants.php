<?php
declare(strict_types=1);

$constants = get_defined_constants();

echo '<table border="1" cellpadding="5">';
echo '<tr><th>Имя константы</th><th>Значение</th></tr>';
foreach ($constants as $name => $value)
    echo "<tr><td>{$name}</td><td>{$value}</td></tr>";

echo '</table>';
