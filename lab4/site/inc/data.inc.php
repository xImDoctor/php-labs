<?php
declare(strict_types=1);

$cols = $_GET['cols'] ?? 5;
$rows = $_GET['rows'] ?? 5;
$color = $_GET['color'] ?? 'yellow';


$menu = [
    ['link' => 'Домой', 'href' => 'index.php'],
    ['link' => 'О нас', 'href' => 'index.php?id=about'],
    ['link' => 'Контакты', 'href' => 'index.php?id=contact'],
    ['link' => 'Таблица умножения', 'href' => 'index.php?id=table'],
    ['link' => 'Калькулятор', 'href' => 'index.php?id=calc'],
];