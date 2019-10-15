<?php
function check_auth_user($login, $password){  //Проверяем есть логин, пароль в "БД"  , т.е. пользователь "Гость" или "Зашел на сайт"?!
	$users=['Василий'=>123, 'admin'=>111];  //  "БД" с 1 пользователем и администратором
	if (isset($users[$login])&&($password==$users[$login])){
		setcookie('auth',1, time()+3600*24);
		setcookie('login',$login,time()+3600);
		header('Location: lk.php');
        exit;		
	}
	else echo "Не верно введены login или пароль";
}


function logout(){
	if(isset($_POST['exit'])){
		setcookie('auth',"", time()-3600);
		setcookie('login',"",time()-3600);
		header('Location: auth_page.php');
		exit;
	}
}



