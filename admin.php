<?php
session_start();   // открытие сессии.

if(!$_SESSION['admin']){   // «если в массиве $_SESSION не существует элемента admin — будем выполнять блок действий, заключенный в операторные скобки».
 header("Location: enter.php");
 exit;            //После функции header() обязательно завершаем выполнение скрипта при помощи функции exit(). 
}
?>