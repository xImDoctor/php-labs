<!DOCTYPE html>
<html>

<head>
  <title>Контакты</title>
  <meta charset="utf-8">
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
    <h1>Обратная связь</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <h3>Адрес</h3>
    <address>123456 Москва, Малый Американский переулок 21</address>
    <h3>Задайте вопрос</h3>
    <form action='' method='post'>
      <label>Тема письма: </label>
      <br>
      <input name='subject' type='text' size="50">
      <br>
      <label>Содержание: </label>
      <br>
      <textarea name='body' cols="50" rows="10"></textarea>
      <br>
      <br>
      <input type='submit' value='Отправить'>
    </form>
    <!-- Область основного контента -->
  </section>
  <nav>
    <h2>Навигация по сайту</h2>
    <!-- Меню -->
    <ul>
      <li><a href='index.php'>Домой</a>
      </li>
      <li><a href='about.php'>О нас</a>
      </li>
      <li><a href='contact.php'>Контакты</a>
      </li>
      <li><a href='table.php'>Таблица умножения</a>
      </li>
      <li><a href='calc.php'>Калькулятор</a>
      </li>
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