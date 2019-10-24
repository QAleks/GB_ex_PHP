<?php

$link=@mysqli_connect('127.0.0.1', 'root','','Lesson7_db') or die('Ошибка соединения с БД');
mysqli_set_charset($link, "utf8");
//echo '<pre>';
//print_r($link);
//var_dump(mysqli_connect_error());
//echo '</pre>';