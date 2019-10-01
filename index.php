<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8"/>
<title>Учебные задания</title>

</head>
<body>
<h1><u>Задание к уроку №4</u><h1>
<p> Создайть простейший калькулятор. Он должен состоять из двух полей для ввода чисел, а между ними - select для выбора операции. По нажатию на кнопку “=” должно вычисляться значения выражения
(проверка деления на ноль)
</p>

<form action="/index.php" method "post">
<input type="text" name="Введичи число №1" />
<select name="form_select">
    <option value="Сложение">+</option>
    <option value="Вычитание">-</option>
    <option value="Умножение">*</option>
    <option value="Деление">/</option>
  </select>
<input type="text" name="Введичи число №2" />
<input type="submit" value="Ответ" />
<br>
<input type="reset" name="Очистить" />


</form>
<?php



?> 


</body>

</html>