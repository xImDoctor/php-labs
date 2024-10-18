<?php
/*
   ЗАДАЧА
   Отрисовать навигационное меню на странице,
   используя массив в качестве структуры меню
   
   ЗАДАНИЕ 1
   - Создайте массив $leftMenu элементами которого будут являться ассоциативные массивы с ключами 'link' и 'href'
   - Заполните массив соблюдая следующие условия:
       - Значением элемента с ключём 'link' является один из пунктов меню: 'Домой', 'О нас', 'Контакты', 'Таблица умножения', 'Калькулятор'
       - Значением элемента с ключём 'href' будет имя файла, на который указывает ссылка: index.php, about.php, contact.php, table.php, calc.php
   */

$leftMenu = [
    ['link' => 'Домой', 'href' => 'index.php'],
    ['link' => 'О нас', 'href' => 'about.php'],
    ['link' => 'Контакты', 'href' => 'contact.php'],
    ['link' => 'Таблица умножения', 'href' => 'table.php'],
    ['link' => 'Калькулятор', 'href' => 'calc.php'],
];

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Меню</title>
    <style>
        .menu {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <h1>Меню</h1>
    <nav>
        <?php
        /*
           ЗАДАНИЕ 2
           - Отрисуйте вертикальное меню с помощью цикла foreach, 
             передав ему в качестве аргумента массив $leftMenu.
             В итоге должен получиться следующий список: 
              <ul class="menu">
                 <li><a href='index.php'>Домой</a></li>
                 <li><a href='about.php'>О нас</a></li>
                 <li><a href='contact.php'>Контакты</a></li>
                 <li><a href='table.php'>Таблица умножения</a></li>
                 <li><a href='calc.php'>Калькулятор</a></li>
               </ul>
           */
        foreach ($leftMenu as $menu)
            echo "<li><a href={$menu['href']}>{$menu['link']}</a></li>";
        
        ?>
    </nav>
</body>

</html>