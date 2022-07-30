<?php 

$dblocation = 'localhost'; // имя хоста
$database = 's3gh117_site_comment'; // имя базы данных 
$dbuser = 's3gh117_admin'; // имя пользователя
$dbpasswd = 'fixquiloisue1'; // пароль пользователя

// устанавливаем соединение с базой данных 

$link = mysqli_connect($dblocation, $dbuser, $dbpasswd, $database) or die("Не могу подключиться");  
mysqli_select_db($link, $database) or die ('Не могу выбрать БД');

//установка кодировки
$link->set_charset("utf8");

?>