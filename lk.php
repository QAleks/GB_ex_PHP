<?php include 'functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title> Заголовок страницы! </title>
</head>
<body>
<h1> Добро пожаловать </h1>
<p>Вы авторизовались, <?php echo $login?></p>

<form action="lk.php" method="post">
<button type="submit" name="exit">Выход</button>
</form>
<?php
logout();
?>

</body>

</html>
<?php
