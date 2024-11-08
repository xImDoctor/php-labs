<?php
// Открываем сессию
session_start();

// Подключаем код для сохранения информации о странице в сессии
include('savepage.inc.php');
?>
<!doctype html>

<html>
<head>
	<meta charset="utf-8">
	<title>Страница 2</title>
</head>
<body>

<h1>Страница 2</h1>

<?php
// Подключаем меню
include('menu.inc.php');

// Подключаем код для вывода информации обо всех посещенных страницах
include('visited.inc.php');
?>

</body>
</html>