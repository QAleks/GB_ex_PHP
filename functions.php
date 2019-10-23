<?php
$link=mysqli_connect('127.0.0.1', 'root','','Lesson7_db');
echo '<pre>';
//print_r($link);
echo '</pre>';


function upload(){
    $filename=$_FILES['upload_file']['tmp_name'];
    if (!empty($_POST['file_name'])){
         $new_file_name='upload/' . $_POST['file_name'] . '.jpg';
      if (move_uploaded_file($filename, $new_file_name)){     
        echo 'Файл загружен с новым именем';
      }
    }
    elseif(empty($_POST['file_name'])){
        move_uploaded_file($filename, 'upload/' . $_FILES['upload_file']['name']);
        echo 'Файл загружен с исходным именем';
    }
    else echo 'Произошла ошибка, попробуйте снова загрузить файл';
    

    
}
