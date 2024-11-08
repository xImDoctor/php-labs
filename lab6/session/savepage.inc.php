<?php
declare(strict_types=1);
// Код для всех страниц - сохранение информации о посещенных страницах
/*
ЗАДАНИЕ 1
- Создайте в сессии либо 
	- массив для хранения всех посещенных страниц и сохраните в качестве его очередного элемента путь к текущей странице. 
	- строку с уникальным разделителем и последовательно её дополняйте

*/

if (!isset($_SESSION['visitedPages']))
    $_SESSION['visitedPages'] = [];


$currentPage = basename($_SERVER['PHP_SELF']);

if (!in_array($currentPage, $_SESSION['visitedPages']))
    $_SESSION['visitedPages'][] = $currentPage;