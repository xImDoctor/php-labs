<?php
/*
ЗАДАНИЕ 1
- Проверьте, была ли корректно отправлена форма
- Если она была отправлена, отфильтруйте полученные значения
- В зависимости от оператора производите различные математические действия
- В случае деления, проверьте, делитель на равенство с нулем (на ноль делить нельзя)
- Сохраните полученный результат вычисления в переменной
*/
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Калькулятор</title>
</head>

<body>

    <h1>Калькулятор</h1>

    <?php
    /*
    ЗАДАНИЕ 2
    - Если результат существует, выведите его
    */
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <p><label for="num1">Число 1</label><br>
            <input type="text" name="num1" id="num1" required>
        </p>

        <p><label for="operator">Оператор</label><br>
            <select name="operator" id="operator">
                <option value="+" selected>+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
        </p>

        <p><label for="num2">Число 2</label><br>
            <input type="text" name="num2" id="num2" required>
        </p>

        <button type="submit">Считать!</button>

    </form>

</body>

</html>