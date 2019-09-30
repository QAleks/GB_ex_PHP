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
function dohod($summa, $period_month, $percent){
	$a=(($summa*$percent)/100)/12; //Сумма по проценту за 1 месяц
	$b=$a*$period_month; //сумма по проценту за n-месяцев
	$all_money=$summa+$b; //общая сумма 
	return $all_money;
}	

echo 'Общая сумма = ' . dohod(120000, 10, 10);

?>

<h1>Задание к уроку №2.3<h1>
<p> Написать функцию, которая принимает на вход два аргумента - число (1..31) и номер месяца (1..12). Возвращает правильно сформированную дату на русском языке. Например: “1 января” или “9 мая”. </p>

<?php
function date_var($day,$month){
	if (  ($day>=1) && ($day<=31) and ($month>=1) && ($month<=12)){
		$flag=1;
		$kol_dnei = 1;
		switch($month){
			case ($month == 1):
			$str_month = ' января';
			break;
			case ($month == 2):
			if($day<=28){
			$str_month = ' февраля';
			}
			else $flag=0;
			break;
			case ($month == 3):
			$str_month = ' марта';
			break;
			case ($month == 4):
			if($day<=30){
			$str_month = ' апреля';
			}
			else {
				$kol_dnei = 0;
			}
			break;
			case ($month == 5):
			$str_month = ' мая';
			break;
			case ($month == 6):
			if($day<=30){
			$str_month = ' июня';
			}
			else $kol_dnei = 0;
			break;
			case ($month == 7):
			$str_month = ' июля';
			break;
			case ($month == 8):
			if($day<=30){
			$str_month = ' августа';
			}
			else $kol_dnei = 0;
			break;
			case ($month == 9):
			$str_month = ' сентября';
			break;
			case ($month == 10):
			if($day<=30){
			$str_month = ' октября';
			}
			else $kol_dnei = 0;
			break;
			case ($month == 11):
			$str_month = ' ноября';
			break;
			case ($month == 12):
			if($day<=30){
			$str_month = ' декабря';
			}
			else $kol_dnei = 0;
			break;
			
			}
		
		}
		if (($flag==1)&&($kol_dnei==1)){
		return $day . $str_month;	
	}			
		else{
		 $error_text = 'Проверьте правильное значение вводимого дня и месяца';
		return $error_text;
	    }	
	}	

echo date_var(31,4);
?> 


</body>

</html>