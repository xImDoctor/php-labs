<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $cols = abs((int) $_POST['cols']);
  $rows = abs((int) $_POST['rows']);
  $color = trim(strip_tags($_POST['color']));

  $_SESSION['color'] = $color; // Сохранение выбранного цвета в сессии
} else
  $color = $_SESSION['color'] ?? '#ffff00'; //цвет из сессии

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
  <input name='color' type='color' value='<?= htmlspecialchars($color) ?>' list="listColors">
  <datalist id="listColors">
    <option>#ff0000</option>/>
    <option>#00ff00</option>
    <option>#0000ff</option>
  </datalist>
  <br>
  <br>
  <input type='submit' value='Создать'>
</form>
<br>
<!-- Таблица -->

<table class="mult-table">
  <?php
  drawTable($cols, $rows, $color);
  ?>
</table>
<!-- Таблица -->
<!-- Область основного контента -->