<?php 
session_start();
$bd=['admin'=>'123'];

	
?>
<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8"/>
<title>Учебные задания</title>

</head>
<body>
<h1><u>Задание к уроку №5</u><h1>
<p> Создать механизм авторизации входа на сайт.  Главная страница выглядит по разному для авторизованного пользователя и гостей. Некая функция кот. определит пользователь гость или зашел на сайт. Гостям показывать форму авторизации. Авторизованным показать информацию: имя и т.д. Предусмотреть возможность выхода с сайта. Информацию о пользователе хранить в массиве кода (имя-пароль)
</p>

<form name="auth_form" action="index.php" method="post">
Введите Login:<br>
<input type="text" name="login"><br>
Введите пароль:<br>
<input type="text" name="password">
<input type="submit" name="enter" value="Вход">

<?php

if (!empty($_POST['login'])){
$login=$_POST['login'];
}

if (!empty($_POST['password'])){
	$password=$_POST['password'];
}
//var_dump($pass);
//var_dump($login);


function check_auth_user($login, $password){  //Проверяем есть логин, пароль в "БД"
	$users=['Василий'=>123, 'admin'=>111];  //  "БД" с 1 пользователем и администратором
	if (isset($users[$login])&&($password==$users[$login])){
		echo '<br>Добро пожаловать, ' . $login;
		return true;
	}
	else{
		if(!empty($_POST['password'])$$){
	
echo '<br>Вы ввели неверный login или пароль!';	
	} 
}
}
check_auth_user($login,$password);


echo '<br><br>';
$str1= ' тра-та-та, мы везем с собой кота - кошку забеяку - и собаку';
$arr=explode("-",$str1);
echo '<pre>';
print_r($arr);
echo '</pre>';

// ТАБЛИЦА УМНОЖЕНИЯ
?>
<h3><u>Доп. задание (с другого курса)</u><h3>
<p> Сделать вывод таблицы умножения </p>

<table align="center" width="100%" border="2">
<?php
for ($i=1; $i<=9; $i++){
	echo '<tr>';
	for($k=0; $k<=9; $k++){
		
		$rez=$i*$k;
		echo '<td>' . "$i * $k = " . $rez . '</td>';
	}
	echo '</tr>';
}
?> 
</table>

</body>

</html>