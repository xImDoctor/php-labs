<?php
declare(strict_types=1);

$login = ' User ';
$password = 'megaP@ssw0rd';
$name = 'иван';
$email = 'ivan@petrov.ru';
$code = '<?=$login?>';

/**
 * Проверка сложности пароля.
 * Пароль должен содержать минимум:
 * - одну заглавную букву,
 * - одну строчную букву,
 * - одну цифру,
 * - длина пароля не менее 8 символов.
 * 
 * @param string $password - пароль для проверки,
 * @return bool возвращает true, если пароль соответствует требованиям.
 */
function checkPasswordDifficulty(string $password): bool
{
    return preg_match('/[A-Z]/', $password) && preg_match('/[a-z]/', $password) && preg_match('/\d/', $password) && strlen($password) >= 8;
}

?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Использование функций обработки строк</title>
</head>

<body>

    <?php
    /*
       ЗАДАНИЕ 2
       - Используя строковые функции, удалите пробельные символы в начале и конце переменной $login, а также сделайте все символы строчными (малыми)
       - Проверьте значение переменной $password на сложность: пароль должен содержать минимум одну заглавную латинскую букву, одну строчную и одну цифру, а длина должна быть не меньше 8 символов. Оформите полученный код в виде пользовательской функции.
       - Используя строковые функции, сделайте первый символ значения переменной $name прописной (большой)
       - Используя функцию фильтрации переменных проверьте корректность значения $email
       - Используя строковые функции выведите значение переменной $code в браузер в том же виде как она задана в коде
       */

    $login = strtolower(trim($login));
    $passIsValid = checkPasswordDifficulty($password) ? 'Пароль сложный' : 'Пароль простой';
    $name = mb_convert_case($name, MB_CASE_TITLE, 'UTF-8');
    $emailValid = filter_var($email, FILTER_VALIDATE_EMAIL) ? 'email корректный' : 'email некорректный';
    ?>
    
    <!-- Вывод значений на экран -->
    <p>Логин после обработки: <?= $login ?></p>
    <p>Проверка пароля: <?= $passIsValid ?></p>
    <p>Имя после обработки: <?= $name ?></p>
    <p>Проверка email: <?= $emailValid ?></p>
    <p>Переменная code: <?= htmlspecialchars($code) ?></p>
</body>

</html>