<?php
//ЗАДАНИЕ 1
//массивы bmw, toyota, opel
$bmw = [
    'model' => "x5",
	'speed, km/h' => 120, 
	'doors' => 5,
	'year' => '2006'
];

$toyota = [
	'model' => 'Carina',
	'speed, km/h' => 130,
	'doors' => 4,
	'year' => '2007'
];

$opel = [
	'model' => 'Corsa',
	'speed, km/h' => 140,
	'doors' => 5,
	'year' => '2007'
];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Массивы</title>
</head>
<body>
	<h1>Массивы</h1>
	<?php
	/*
	ЗАДАНИЕ 2
	- С помощью подстановки в строку выведите значения всех трёх массивов в виде: name - model - speed - doors -year,  например: bmw - x5 - 120 - 5 - 2006
	*/
    echo "BMW - {$bmw['model']} - {$bmw['speed, km/h']} - {$bmw['doors']} - {$bmw['year']}<br>";
	echo "Toyota - {$toyota['model']} - {$toyota['speed, km/h']} - {$toyota['doors']} - {$toyota['year']}<br>";
	echo "Opel - {$opel['model']} - {$opel['speed, km/h']} - {$opel['doors']} - {$opel['year']}<br>";
	?>

</body>
</html>