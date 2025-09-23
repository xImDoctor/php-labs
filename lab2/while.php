<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Цикл while</title>
</head>
<body>
	<h1>Цикл while</h1>
	<?php
	/*
	ЗАДАНИЕ
	- Создайте переменную $var и присвойте ей строковое значение HELLO
	- Используя цикл while выведите значение переменной $var в столбик так, 
	  чтобы на выходе в браузере получилось:
	H
	E
	L
	L
	O
	*/
    $var = 'HELLO';
    $i = 0;
    while ($i < strlen($var)) {
        echo $var[$i] . '<br>';
        $i++;
    }
	?> 
</body>
</html>