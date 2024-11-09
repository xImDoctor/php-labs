<?php
namespace MyProject\Classes;

class User
{
    /**
     * Имя пользователя.
     * @var string
     */
    public $name;

    /**
     * Логин пользователя.
     * @var string
     */
    public $login;

    /**
     * Пароль пользователя.
     * @var string
     */
    private $password;

    /**
     * Конструктор класса User.
     *
     * @param string $name Имя пользователя.
     * @param string $login Логин пользователя.
     * @param string $password Пароль пользователя.
     */
    public function __construct($name, $login, $password)
    {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
    }

    /**
     * Выводит информацию о пользователе.
     *
     * @return void
     */
    public function showInfo()
    {
        echo "User Name: $this->name, Login: $this->login\n";
    }

    /**
     * Деструктор класса User.
     * Выводит сообщение об удалении пользователя.
     */
    public function __destruct()
    {
        echo "Пользователь $this->login удален.\n";
    }
}
