<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $cols = abs((int) $_POST['cols']);
  $rows = abs((int) $_POST['rows']);
  $color = trim(strip_tags($_POST['color']));
} 

?>

<!-- Область основного контента -->
<form action='<?= $_SERVER['REQUEST_URI'] ?>' method="POST">
  <label>Количество колонок: </label>
  <br>
  <input name='cols' type='text' value='<?= $cols ?>'>
  <br>
  <label>Количество строк: </label>
  <br>
  <input name='rows' type='text' value='<?= $rows ?>'>
  <br>
  <label>Цвет: </label>
  <br>
  <input name='color' type='color' value='<?= $color ?>' list="listColors">

  <br>
  <br>
  <input type='submit' value='Создать'>
</form>
<br>
<!-- Таблица -->

<table border='1' width='200'>
  <?php
  drawTable($cols, $rows, $color);
  ?>
</table>
<!-- Таблица -->
<!-- Область основного контента -->