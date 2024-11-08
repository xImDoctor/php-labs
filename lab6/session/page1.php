<?php
declare(strict_types= 1);

ini_set("session.use_only_cookies", "0");
ini_set("session.use_trans_sid", "1");
// Открываем сессию
session_start();

// Подключаем код для сохранения информации о странице в сессии
include('savepage.inc.php');
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Страница 1</title>
</head>
<body>

<h1>Страница 1</h1>

<?php
// Подключаем меню
include('menu.inc.php');

// Подключаем код для вывода информации обо всех посещенных страницах
include('visited.inc.php');
?>

</body>
</html>