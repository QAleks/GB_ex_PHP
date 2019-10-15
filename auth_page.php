<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Страница авторизации</title>
</head>
<body>

<form name="auth_form" action="auth_page.php" method="post">
Введите Login:<br>
<input type="text" name="login"><br>
Введите пароль:<br>
<input type="text" name="password">
<input type="submit" name="enter" value="Вход">


<?php if (!empty($_POST['login'])){
$login=$_POST['login'];
}
if (!empty($_POST['password'])){
	$password=$_POST['password'];
}
//var_dump($password);
//var_dump($login);
?>



</body>
</html>




<?php
