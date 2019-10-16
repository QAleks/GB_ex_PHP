<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8"/>
<title>Учебные задания</title>

</head>
<body>
<h1><u>Задание к уроку №6</u><h1>
<p> Создать фотогалерею. Скрипт должен читать список файлов из определенной папки,  отбирать из них изображения и выводить их на страницу. 
Также на странице должна быть форма добавления файла в галерею. Обработчик этой формы должен копировать загруженный файл в указанную папку 
и возвращаться на страницу галереи. 
</p>
<?php
//echo is_dir(__DIR__ . '\Test');
$path=__DIR__ . '\Test';

if(file_exists($path)){
	$files_in_dir=array_diff(scandir($path), $a=['.','..']);
	$files_in_dir=array_values($files_in_dir);
	echo '<pre>';
	print_r($files_in_dir);
	echo '<pre>';
	//echo 'есть';
}

?>

<form enctype="multipart/form-data" method="post" action="index.php">
<p>Добавление изобрежений </p>
<input type="file" name="add_picture" accept="image/*"  multiple="multiple">  <button type="submit" name="view_picture">Показать изображения</button>



</form>

</body>

</html>