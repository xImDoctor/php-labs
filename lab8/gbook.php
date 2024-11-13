<?php
declare(strict_types=1);

/* ЗАДАНИЕ 1
- Подключитесь к серверу MySQL, выберите базу данных
- Установите кодировку по умолчанию для текущего соединения
- Проверьте, была ли корректным образом отправлена форма
- Если она была отправлена: отфильтруйте полученные данные 
  с помощью функций trim(), htmlspecialchars() и mysqli_real_escape_string(),
  сформируйте SQL-оператор на вставку данных в таблицу msgs и выполните его с помощью функции mysqli_query(). 
  После этого с помощью функции header() выполните перезапрос страницы, 
  чтобы избавиться от информации, переданной через форму
*/

require_once 'config.php'; //db data
$connection = mysqli_connect(HOST, USER, PASSWORD, DB);


if (!$connection)
  die("Ошибка подключения: " . mysqli_connect_error());

mysqli_set_charset($connection, "utf8");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = trim(htmlspecialchars(mysqli_real_escape_string($connection, $_POST['name'] ?? '')));
  $email = trim(htmlspecialchars(mysqli_real_escape_string($connection, $_POST['email'] ?? '')));
  $msg = trim(htmlspecialchars(mysqli_real_escape_string($connection, $_POST['msg'] ?? '')));

  // msgs insertion
  $query = "INSERT INTO msgs (name, email, msg) VALUES ('$name', '$email', '$msg')";

  if (mysqli_query($connection, $query)) {
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
  } else 
    echo "Ошибка: " . mysqli_error($connection);
}

// del check
if (isset($_GET['delete_id'])) {

  $delete_id = (int) $_GET['delete_id'];
  $delquery = "DELETE FROM msgs WHERE id = $delete_id";
  if (mysqli_query($connection, $delquery)) {
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();

  } else 
    echo "Ошибка удаления: " . mysqli_error($connection);
}

/*
ЗАДАНИЕ 3
- Проверьте, был ли запрос методом GET на удаление записи
- Если он был: отфильтруйте полученные данные,
  сформируйте SQL-оператор на удаление записи и выполните его.
  После этого выполните перезапрос страницы, чтобы избавиться от информации, переданной методом GET
*/

?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Гостевая книга</title>
</head>

<body>

  <h1>Гостевая книга</h1>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

    Ваше имя:<br>
    <input type="text" name="name"><br>
    Ваш E-mail:<br>
    <input type="email" name="email"><br>
    Сообщение:<br>
    <textarea name="msg" cols="50" rows="5"></textarea><br>
    <br>
    <input type="submit" value="Добавить!">

  </form>

  <?php
  /*
  ЗАДАНИЕ 2
  - Сформируйте SQL-оператор на выборку всех данных из таблицы
    msgs в обратном порядке и выполните его. Результат выборки
    сохраните в переменной.
  - Закройте соединение с БД
  -	С помощью функции mysqli_num_rows() получите количество рядов результата выборки и выведите его на экран
  - В цикле функцией mysqli_fetch_assoc() получите очередной ряд результата выборки в виде ассоциативного массива.
    Таким образом, используя этот цикл, выведите на экран все сообщения, а также информацию
    об авторе каждого сообщения. После каджого сообщения сформируйте ссылку для удаления этой
    записи. Информацию об идентификаторе удаляемого сообщения передавайте методом GET.
  */

  // msgs query
  $query = "SELECT * FROM msgs ORDER BY id DESC";
  $result = mysqli_query($connection, $query);

  if ($result) {
    echo "<h2>Сообщения</h2>";
    $count = mysqli_num_rows($result);
    echo "<p>Всего сообщений: $count</p>";

    while ($row = mysqli_fetch_assoc($result)) {

      echo "<div>";
      echo "<p><strong>{$row['name']}</strong> ({$row['email']})</p>";
      echo "<p>{$row['msg']}</p>";
      echo "<a href='?delete_id={$row['id']}'>Удалить</a></div><hr>";

    }
  } else
    echo "<p>Ошибка при выборке данных: " . mysqli_error($connection) . "</p>";

  mysqli_close($connection);
  ?>

</body>

</html>