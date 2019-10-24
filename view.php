<?php
include 'functions.php';
?>
<p><a href="index.php">Возврат на страницу загрузки файлов</a></p>
<form method="POST" action="view.php">
<p><button input type="submit" name="view_img">Показать изображения из БД</button></p>
<button input type="submit" name="view_files">Вывести список файлов</button>
<button input type="submit" name="no_view_files">Скрыть список </button>
</form>
<?php

if (isset($_POST['view_files'])){
    echo 'Список файлов: <br>';
    $list=files_list();
    foreach($list as $key=>$value){      
        echo ($key+1) . ') ' . $value . '<br>';
    }
}