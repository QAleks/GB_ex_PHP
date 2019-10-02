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

<form action="/index.php" method="post">
<input type="text" name="num1" />
<select name="form_select">
    <option value="plus">+</option>
    <option value="minus">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
  </select>
<input type="text" name="num2" />
<input type="submit" value="Показать ответ" />
<br>
<input type="reset" value="Очистить" />

</form>
<?php

$a1=$_POST["num1"];
$a2=$_POST["num2"];

//echo var_dump($a1) . '<br>';
//echo var_dump($a2) . '<br>';
//echo $a1+$a2;

if (is_numeric($a1) && is_numeric($a2)) {

if ($_POST["form_select"]=="plus"){
	echo 'Сумма чисел = ';
	echo $a1+$a2;	
}

elseif ($_POST["form_select"]=="minus"){
	echo 'Разность = ';
	echo $a1-$a2;
}

elseif ($_POST["form_select"]=="*"){
	echo 'Результат умножения чисел = ';
	echo $a1*$a2;	
}

elseif ($_POST["form_select"]=="/"){
	if (0==$a2){echo 'На ноль делить нельзя! Введите другое число';}
	else{
		echo 'Результат деления чисел = ';
	    echo $a1/$a2;
	}
	
}

}
else echo "Допускается ввод только числе!";

?> 

</body>

</html>