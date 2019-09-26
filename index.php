<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8"/>
<title>Учебные задания</title>

</head>
<body>
<h1>Задание к уроку №2.1<h1>
<p> Составить рекурсивную функцию вычисления чисел Фибоначчи, проверьте ее работу </p>

<?php

?> 

<h1>Задание к уроку №2.2<h1>
<p> Напишите функцию, которая вычисляет доход по вкладу. В качестве аргумента принимается сумма вклада, срок в месяцах, годовой процент. Возвращается сумма вклада по окончанию срока.</p>
<?php

?>



<h1>Задание к уроку №2.3<h1>
<p> Написать функцию, которая принимает на вход два аргумента - число (1..31) и номер месяца (1..12). Возвращает правильно сформированную дату на русском языке. Например: “1 января” или “9 мая”. </p>

<?php
function date_var($day,$month){
	if (  ($day<1) xor ($day>=32) xor ($month<1) || ($month>12)){
		$error_text = 'Проверьте правильное значение вводимого дня и месяца';
		return $error_text;
	}
	
	else{
		 
		switch($month){
			case ($month == 1):
			$str_month = ' января';
			break;
			case ($month == 2):
			$str_month = ' февраля';
			break;
			case ($month == 3):
			$str_month = ' марта';
			break;
			case ($month == 4):
			$str_month = ' апреля';
			break;
			case ($month == 5):
			$str_month = ' мая';
			break;
			case ($month == 6):
			$str_month = ' июня';
			break;
			case ($month == 7):
			$str_month = ' июля';
			break;
			case ($month == 8):
			$str_month = ' августа';
			break;
			case ($month == 9):
			$str_month = ' сентября';
			break;
			case ($month == 10):
			$str_month = ' октября';
			break;
			case ($month == 11):
			$str_month = ' ноября';
			break;
			case ($month == 12):
			$str_month = ' декабря';
			break;
		}
		return $day . $str_month;
	 	
		
	}

}
echo date_var(0,5);
?> 



</body>

</html>
