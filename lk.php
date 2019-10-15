<?php include 'functions.php';
logout();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title> Заголовок страницы! </title>
</head>
<body>
<h1> Добро пожаловать </h1>
<p>Вы авторизовались, <?php echo $_COOKIE['login']?></p>

<form action="lk.php" method="post">
<button type="submit" name="exit">Выход</button>
</form>

</body>

</html>
<?php

