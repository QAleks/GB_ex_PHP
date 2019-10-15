<?php 
include 'functions.php';
 if (!empty($_POST['login'])){
 $login=$_POST['login'];
}
if (!empty($_POST['password'])){
	$password=$_POST['password'];
}
//var_dump($password);
//var_dump($login);
check_auth_user($login, $password);
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Страница авторизации</title>
</head>
<body>
<p>
<form name="auth_form" action="auth_page.php" method="post">
Введите Login:<br>
<input type="text" name="login"><br>
Введите пароль:<br>
<input type="text" name="password">
<input type="submit" name="enter" value="Вход">
</form>
</p>


</body>
</html>
<?php
