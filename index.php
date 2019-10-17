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


<form enctype="multipart/form-data" method="post" action="index.php">
<p>Добавление изобрежений </p>
<input type="file" name="add_picture" accept="image/*"  multiple="multiple"><button type="submit" name="view_picture" value="1">Показать изображения</button><br>
<button type="submit" name="send" value="test">Загрузить</button> 
</form>

<?php


//echo '<pre>';
//print_r($_FILES);
//echo '<pre><br>';

if(!empty($_FILES['add_picture']['name'])){
	//echo ($_FILES['add_picture']['name']);
	if(move_uploaded_file(($_FILES['add_picture']['tmp_name']), 'Test/' . $_FILES['add_picture']['name'])){
	echo '<br>Файл успешно загружен';
}else{
	echo '<br>Файл загружен не был';
}
	
}
$path=__DIR__ . '\Test';
if(file_exists($path)){
$files_in_dir=array_diff(scandir($path), $a=['.','..']);
$files_in_dir=array_values($files_in_dir);
}


//echo is_dir(__DIR__ . '\Test');
//var_dump($_POST['view_picture']);
if(!empty($_POST['view_picture'])){
	foreach($files_in_dir as $key=>$value){
			//echo ($key+1) . ') ';
			echo '<img width = "200" height="200" src="./Test/' . $value . '">';
		    //echo '<br>---------------------------------------------------------------------<br>';
	}
	
}


	echo '<p> <u>Список файлов в папке Test:</u> </p>' ;
	foreach($files_in_dir as $key=>$value){
			echo ($key+1) . ') ' . $value;
			//echo '<img width = "200" height="200" src="./Test/' . $value . '">';
			echo '<br>---------------------------------------------------------------------<br>';
	}

?>

<!--<img src="./Test/4bf5837a7faf.jpg">-->
</body>

</html>