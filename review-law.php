<?php 
include_once 'db.php';

if (isset($_POST['add'])) {

// преобразуем специальные символы в текст

$name = htmlspecialchars($_POST['username']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

// заносим данные из формы в переменные и проверяем на ошибки

$name = strip_tags(trim($_POST['username']));
$email = strip_tags(trim($_POST['email']));
$message = strip_tags(trim($_POST['message']));
$date = $_POST['date'];

// заносим дату и время отзыва
$date = date('Y-m-d H:i');

// проверка введенных данных

if($name != '' AND $message != ''){ 

// отправка данных в бд

mysqli_query($link, " INSERT INTO law (username, email, message, date) VALUES ('$name', '$email', '$message', '$date')");

// закрываем сеанс 

mysqli_close($link);

//редирект 

header ("location: lawlessness.php");
   }
}

include_once 'lawlessness.php';
?>