<?php
session_start();   // открытие сессии.

if($_GET['do'] == 'logout'){
 unset($_SESSION['admin']);   // выход админа
 session_destroy();
}

if(!$_SESSION['admin']){   // «если в массиве $_SESSION не существует элемента admin — будем выполнять блок действий, заключенный в операторные скобки».
 header("Location: enter.php");  // проверка, авторизован ли пользователь
 exit;            //После функции header() обязательно завершаем выполнение скрипта при помощи функции exit(). 
}




?>

<a href="admin.php?do=logout">Выход</a>