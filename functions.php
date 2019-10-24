<?php

function upload($link){  //Функция загрузки выбранного файла(в форме на сайте) в папку "upload"(на сервере) и в БД
     if (!empty($_FILES['upload_file']['tmp_name'])){

echo '<pre>';
print_r($_FILES);
echo '</pre>';

    $filename=$_FILES['upload_file']['tmp_name'];
    if (!empty($_POST['file_name'])){

         $new_file_path='upload/' . $_POST['file_name'] . '.jpg';
         $filename=$_POST['file_name'];

         $db_file_name=$_POST['file_name'];
         $db_file_path=$new_file_path;
         save_path($link, $db_file_name, $db_file_path);

      if (move_uploaded_file($filename, $new_file_path)){     
        echo 'Файл загружен с новым именем';
      }
    }
    elseif(empty($_POST['file_name'])){

        $filename=$_FILES['upload_file']['name'];
        $new_file_path='upload/' . $_FILES['upload_file']['name'];
        move_uploaded_file($filename, $new_file_path);
        echo 'Файл загружен с исходным именем';

        $db_file_path=$new_file_path;
        $db_file_name=$filename;
        save_path($link, $db_file_name, $db_file_path);
        
    }
    else echo 'Произошла ошибка, попробуйте снова загрузить файл';    
}
else  echo 'Выберите файл для загрузки';
}

function files_list(){       //Функция для вывода списка файлов в папке "upload"
if(is_dir(__DIR__ . '\upload')){
    //echo 'upload есть';
    //echo '<pre>';
    $dir=scandir(__DIR__ . '\upload');
    $list=array_diff($dir, ['.', '..']);
    //print_r($list); 
    //echo '</pre>';
    return($list=array_values($list));    
}
}
//$res=fopen(__DIR__ . '\upload','r');
//print_r($res);


/*
function save_path($link){ //Если файлы в папке уже были, то мы их считаем и запишем
    $list=files_list();
    foreach ($list as $value){
        $name_temp=explode('.jpg' ,$value);
        $db_file_name=$name_temp[0];
        $db_file_path=$value;
        $insert= "INSERT INTO `db_files_list` (db_file_name, db_file_path) VALUES('$db_file_name', '$db_file_path')";
        $res_insert=mysqli_query($link, $insert);
    }
    if($res_insert){
        echo '<p> Успешная загрузка файла ' . $value . ' в БД</p>';
    }
    else echo '<p>Error</p>';
}
*/

function save_path($link, $db_file_name, $db_file_path){ //запись имени и пути в БД
        $insert= "INSERT INTO `db_files_list` (db_file_name, db_file_path) VALUES('$db_file_name', '$db_file_path')";
        $res_insert=mysqli_query($link, $insert);
    
    if($res_insert){
        echo '<p> Успешная загрузка файла ' . $db_file_name . ' в БД</p>';
    }
    else echo '<p>Error</p>';
}