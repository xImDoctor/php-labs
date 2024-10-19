<?php
/*
  ЗАДАНИЕ 1
  - В папке сайта создайте папку под названием inc
  - В текстовом редакторе создайте новый файл
  - Перенесите в файл php-блок с функцией getTable()
  - Перенесите в файл функцию getMenu()
  - Сохраните файл под именем lib.inc.php в папке inc
  - В файле table.php в блоке <!--Таблица --> (там, где ранее отрисовывалась таблица) отрисуйте таблицу умножения вызывая функцию getTable() с произвольными параметрами
  - В файле index.php в блоке <!--Меню --> (там, где ранее отрисовывалось меню) отрисуйте меню навигации вызвав функцию getMenu()с необходимыми параметрами
  - В текстовом редакторе создайте новый файл и создайте в нем php-блок
  - Перенесите в файл весь php-код, необходимый для работы функций getTable() и getMenu() (значения параметров функций)
  - Сохраните файл под именем data.inc.php в папке inc
  - В текстовом редакторе создайте новый файл
  - Перенесите в файл всё, что находится внутри блока <!--Верхняя часть страницы --> из файла index.php
  - Сохраните файл под именем top.inc.php в папке inc
  - В текстовом редакторе создайте новый файл
  - Перенесите в файл всё, что находится внутри блока <!--Навигация --> из файла index.php
  - Сохраните файл под именем menu.inc.php в папке inc
  - В текстовом редакторе создайте новый файл
  - Перенесите в файл всё, что находится внутри блока <!--Нижняя часть страницы --> из файла index.php
  - Сохраните файл под именем bottom.inc.php в папке inc
  - В текстовом редакторе создайте новый файл
  - Перенесите в файл всё, что находится внутри блока <!--Область основного контента --> из файла index.php
  - Сохраните файл под именем index.inc.php в папке inc


  ЗАДАНИЕ 2
  - В текстовом редакторе откройте файл index.php
  - В самом верху файла подключите файлы lib.inc.php и data.inc.php из папки inc
  - В блоке <!--Верхняя часть страницы --> подключите файл top.inc.php из папки inc
  - В блоке <!--Навигация --> подключите файл menu.inc.phpиз папки inc
  - В блоке <!--Область основного контента --> подключите файл index.inc.php из папки inc
  - В блоке <!--Нижняя часть страницы --> подключите файл bottom.inc.php из папки inc
  - Сохраните файл index.php
  - Посмотрите результат в браузере
  */


include 'inc/lib.inc.php';
include 'inc/data.inc.php';

?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Сайт нашей школы</title>
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
    <h1>Добро пожаловать на наш сайт!</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <h3>Зачем мы ходим в школу?</h3>
    <p>
      У нас каждую минуту что-то происходит и кипит жизнь. Проходят уроки и шумят перемены, кто-то отвечает у доски,
      кто-то отчаянно зубрит перед контрольной пройденный материал, кому-то ставят «пятерку» за сочинение, кого-то
      ругают за непрочитанную книгу, на школьной спортивной площадке ребята играют в футбол, а девочки – в волейбол,
      некоторые готовятся к соревнованиям, другие участвуют в репетициях праздников…
    </p>
    <h3>Что такое ЕГЭ?</h3>
    <p>
      Аббревиатура ЕГЭ расшифровывается как "Единый Государственный Экзамен". Почему "единый"? ЕГЭ одновременно является
      и вступительным экзаменом в ВУЗ и итоговой оценкой каждого выпускника школы. К тому же на всей территории России
      используются однотипные задания и единая система оценки.
    </p>
    <p>
      Результаты ЕГЭ оцениваются по 100-балльной и пятибалльной системам и заносятся в свидетельство о результатах
      единого государственного экзамена. Срок действия данного документа истекает 31 декабря года, следующего за годом
      его выдачи, поэтому у абитуриентов есть возможность поступать в ВУЗы со свидетельством ЕГЭ в течение двух лет.
    </p>
    <!-- Область основного контента -->
  </section>
  <nav>
    <!-- Навигация -->
    <h2>Навигация по сайту</h2>
    <!-- Меню -->
    <?php

    getMenu($menu);
    ?>
    <!-- Меню -->
    <!-- Навигация -->
  </nav>
  <footer>
    <!-- Нижняя часть страницы -->
    &copy; Супер Мега Веб-мастер, 2000 &ndash; 20xx
    <!-- Нижняя часть страницы -->
  </footer>
</body>

</html>