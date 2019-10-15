<?php

function check_auth_user($login, $password){  //Проверяем есть логин, пароль в "БД"  , т.е. пользователь "Гость" или "Зашел на сайт"?!
	$users=['Василий'=>123, 'admin'=>111];  //  "БД" с 1 пользователем и администратором
	if (isset($users[$login])&&($password==$users[$login])){
		echo '<br>Добро пожаловать, ' . $login;  
		return true;
	}
}


function IsUser(){                              // Если пользователь гость покажем страницу авторизации
	if(!check_auth_user($login, $password)){
		header("Location: auth_page.php");
	}
	else header("Location: index.php");
}

