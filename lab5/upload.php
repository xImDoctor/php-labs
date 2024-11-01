<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Загрузка файла на сервер</title>
</head>

<body>
    <div>
        <?php
        /*
        ЗАДАНИЕ
        - Проверьте, отправлялся ли файл на сервер
        - В случае, если файл был отправлен, выведите: имя файла, размер, имя временного файла, тип, код ошибки
        - Для проверки типа файла используйте функцию mime_content_type() из модуля Fileinfo
        - Если загружен файл типа "image/jpeg", то с помощью функции move_uploaded_file() переместите его в каталог upload. В качестве имени файла используйте его MD5-хеш.

        */
        ?>

    </div>
    <form enctype="multipart/form-data" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <p>
            <input type="hidden" name="MAX_FILE_SIZE" value="1024000">
            <input type="file" name="fupload"><br>
            <button type="submit">Загрузить</button>
        </p>
    </form>
</body>

</html>