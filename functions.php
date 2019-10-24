<?php
$link=@mysqli_connect('127.0.0.1', 'root','','Lesson7_db') or die('Ошибка соединения с БД');
mysqli_set_charset($link, "utf8");
echo '<pre>';
print_r($link);
//var_dump(mysqli_connect_error());
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

function files_list(){
if(is_dir(__DIR__ . '\upload')){
    //echo 'upload есть';
    //echo '<pre>';
    $dir=scandir(__DIR__ . '\upload');
    $list=array_diff($dir, ['.', '..']);
    return($list=array_values($list));
    //print_r($list);   
    //echo '</pre>';
}
}
//$res=fopen(__DIR__ . '\upload','r');
//print_r($res);


function add_sql($link){
    $insert= "INSERT INTO `db_files_list` (db_file_name, db_file_path) VALUES('WindOfChange-Scorpions', 'myz')";
    $res_insert=mysqli_query($link, $insert);
    if($res_insert){
        echo 'Успешная загрузка';
    }
    else echo 'Error';
}




