<?php
namespace MyProject\Classes;

require_once 'User.php';

class SuperUser extends User
{
    /**
     * Роль суперпользователя.
     * @var string
     */
    public $role;

    /**
     * Конструктор класса SuperUser.
     * 
     * @param string $name Имя пользователя.
     * @param string $login Логин пользователя.
     * @param string $password Пароль пользователя.
     * @param string $role Роль суперпользователя.
     */
    public function __construct($name, $login, $password, $role)
    {
        parent::__construct($name, $login, $password);
        $this->role = $role;
    }

    /**
     * Выводит информацию о суперпользователе, включая его роль.
     *
     * @return void
     */
    public function showInfo()
    {
        parent::showInfo();
        echo "Role: $this->role\n";
    }
}
