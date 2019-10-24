<?php
include 'functions.php';
?>
<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8"/>
<title>Учебные задания</title>

</head>
<body>
<h1><u>Задание к уроку №7</u><h1>
<p> Скрипт должен читать список файлов из таблицы базы данных и выводить их на страницу. 
В таблице хранятся пути до файлов. В Форме добавления файла в галарею добавить поле "Название" (оно тоже должно
сохраняться в БД и выводиться в галерее.
</p>

<form method="post" action="index.php" enctype="multipart/form-data">

<fieldset>

<input type="file"  name="upload_file" >
<p><input type="text" name="file_name"></p>
</fieldset>

<input type="submit" name="upload_form">

<p><a href="view.php">Перейти на страницу вывода файлов</a></p>

</form>


<?php
echo '<pre>';
//print_r($link);
//print_r($_SERVER);
//var_dump($_FILES);
echo '</pre>';


if (!empty($_FILES['upload_file']['tmp_name'])){
    //echo "Зашли в условие";
    upload();
}

add_sql($link);
?>

</body>

</html>