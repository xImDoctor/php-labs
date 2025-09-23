<?php
declare(strict_types=1);

/*
ЗАДАНИЕ 1
- Установите константу для хранения имени файла
- Проверьте, отправлялась ли форма и корректно ли отправлены данные из формы
- В случае, если форма была отправлена, отфильтруйте полученные значения 
  с помощью функций trim(), htmlspecialchars()
- Сформируйте строку для записи с файл
- Откройте соединение с файлом и запишите в него сформированную строку
- Используя функцию header() выполните перезапрос текущей страницы 
  (чтобы избавиться от данных, отправленных методом POST)
*/

define('FILENAME', 'users.txt');


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['fname'], $_POST['lname'])) {
  // фильтруем полученные значения
  $fname = trim(htmlspecialchars($_POST['fname']));
  $lname = trim(htmlspecialchars($_POST['lname']));


  $line = "$fname $lname\n";
  file_put_contents(FILENAME, $line, FILE_APPEND);

  // Перезапрос текущей страницы, чтобы избавиться от данных POST
  header("Location: " . $_SERVER['PHP_SELF']);
  exit;
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Работа с файлами</title>
</head>

<body>

  <h1>Заполните форму</h1>

  <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">

    Имя: <input type="text" name="fname" required><br>
    Фамилия: <input type="text" name="lname" required><br>

    <br>

    <input type="submit" value="Отправить!">

  </form>

  <?php
  /*
  ЗАДАНИЕ 2
  - Проверьте, существует ли файл с информацией о пользователях
  - Если файл существует, получите все содержимое файла в виде массива строк 
    с помощью функции file()
  - В цикле выведите все строки данного файла с порядковым номером строки
  - После этого выведите размер файла в байтах.
  */

  if (file_exists(FILENAME)) {

    $lines = file(FILENAME, FILE_IGNORE_NEW_LINES);

    foreach ($lines as $lineNumber => $line)
      echo ($lineNumber + 1) . '. ' . htmlspecialchars($line) . "<br>";
  

    echo "<br>Размер файла: " . filesize(FILENAME) . ' байт.';
  }
  ?>

</body>

</html>