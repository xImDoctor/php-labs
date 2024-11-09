<?php
use MyProject\Classes\User;
use MyProject\Classes\SuperUser;

/**
 * Автозагрузка классов, находящихся в пространстве имен MyProject\Classes.
 *
 * @param string $class Полное имя класса, включая пространство имен.
 * @return void
 */
spl_autoload_register(function ($class) {
    $file = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

// Создание объектов класса User
$user1 = new User("Alice", "alice123", "password1");
$user2 = new User("Bob", "bob123", "password2");
$user3 = new User("Charlie", "charlie123", "password3");

// Вызов метода showInfo для каждого пользователя
$user1->showInfo();
$user2->showInfo();
$user3->showInfo();

// Создание и вызов метода showInfo для объекта класса SuperUser
$user = new SuperUser("Admin", "admin123", "password4", "administrator");
$user->showInfo();
