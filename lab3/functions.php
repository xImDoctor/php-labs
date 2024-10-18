<?php
declare(strict_types=1);

$extensions = get_loaded_extensions();

foreach ($extensions as $ext) {
    $functions = get_extension_funcs($ext);

    echo "<h2>Модуль: {$ext}</h2>";
    if ($functions) {
        echo '<ul>';

        foreach ($functions as $func)
            echo "<li>{$func}";

        echo '</ul>';
    } 
    else echo '<p>Нет доступных функций для модуля';
}