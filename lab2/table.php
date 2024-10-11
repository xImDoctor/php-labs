<?php
/*
   ЗАДАНИЕ 1
   - Создайте две целочисленные переменные $cols и $rows
   - Присвойте созданным переменным произвольные значения в диапазоне от 1 до 10
   */
$cols = 10;
$rows = 10;
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
			text-align: center;
		}

		th {
			background-color: yellow;
		}
	</style>
</head>

<body>
	<h1>Таблица умножения</h1>
	<table>
		<?php
		/*
		   ЗАДАНИЕ 2
		   - Используя циклы отрисуйте таблицу умножения в виде HTML-таблицы на следующих условиях
			   - Число столбцов должно быть равно значению переменной $cols
			   - Число строк должно быть равно значению переменной $rows
			   -  Ячейки на пересечении столбцов и строк должны содержать значения, являющиеся произведением порядковых номеров столбца и строки
		   - Рекомендуется использовать цикл for	
		   */

		echo '<tr>';
		for ($i = 1; $i <= $cols; $i++)
			echo '<th>', $i, '</th>';
		echo '</tr>';

		for ($i = 2; $i <= $rows; $i++) {

			echo '<tr>';
			echo '<th>', $i, '</th>';

			for ($j = 2; $j <= $cols; $j++)
				echo '<td>', $i * $j, '</td>';

			echo '</tr>';
		}

		/*
			ЗАДАНИЕ 3
			- Значения в ячейках первой строки и первого столбца должны быть отрисованы полужирным шрифтом и выровнены по центру ячейки
			- Фоновый цвет ячеек первой строки и первого столбца должен быть отличным от фонового цвета таблицы
			*/
		?>
	</table>
</body>

</html>