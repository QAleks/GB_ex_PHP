<?php
if (!empty($_COOKIE['auth'])){   //открыли главную страницу и проверили, установлена ли кука ("маяк" авторизации). Если кука есть - идем в ЛК, если куки нет - идем на страницу авторизации
    header('Location: lk.php');
	exit;
}
else header('Location: /auth_page.php'); exit;
?>
<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8"/>
<title>Учебные задания</title>

</head>
<body>
<h1><u>Задание к уроку №5</u><h1>
<p> Создать механизм авторизации входа на сайт.  Главная страница выглядит по разному для авторизованного пользователя и гостей. Некая функция кот. определит пользователь гость или зашел на сайт. Гостям показывать форму авторизации. Авторизованным показать информацию: имя и т.д. Предусмотреть возможность выхода с сайта. Информацию о пользователе хранить в массиве кода (имя-пароль)
</p>




</table>

</body>

</html>