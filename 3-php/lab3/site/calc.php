<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Калькулятор</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <!-- Верхняя часть страницы -->
    <img src="logo.png" width="130" height="80" alt="Наш логотип" class="logo">
    <span class="slogan">приходите к нам учиться</span>
    <!-- Верхняя часть страницы -->
  </header>
  <section>
    <!-- Заголовок -->
    <h1>Калькулятор школьника</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <form action=''>
      <label>Число 1:</label>
      <br>
      <input name='num1' type='text'>
      <br>
      <label>Оператор: </label>
      <br>
      <input name='operator' type='text'>
      <br>
      <label>Число 2: </label>
      <br>
      <input name='num2' type='text'>
      <br>
      <br>
      <input type='submit' value='Считать'>
    </form>
    <!-- Область основного контента -->
  </section>
  <nav>
    <h2>Навигация по сайту</h2>
    <!-- Меню -->
    <ul>
      <li><a href='index.php'>Домой</a></li>
      <li><a href='about.php'>О нас</a></li>
      <li><a href='contact.php'>Контакты</a></li>
      <li><a href='table.php'>Таблица умножения</a></li>
      <li><a href='calc.php'>Калькулятор</a></li>
    </ul>
    <!-- Меню -->
  </nav>
  <footer>
    <!-- Нижняя часть страницы -->
    &copy; Супер Мега Веб-мастер, 2000 &ndash; 20xx
    <!-- Нижняя часть страницы -->
  </footer>
</body>
</html>