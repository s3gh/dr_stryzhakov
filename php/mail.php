<meta http-equiv='refresh' content='3; url=https://stryzhakov.com#form_message'>
<meta charset="UTF-8" />
<link rel="stylesheet" href="../css/php-backform.css"/>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet"/>
<div class="php-txt">
<?php
	if (isset($_POST['name']) && $_POST['name'] != "")//если существует атрибут NAME и он не пустой то создаем переменную для отправки сообщения
		$name = $_POST['name'];
	else die ("Введіть Ваше ім'я");//если же атрибут пустой или не существует то завершаем выполнение скрипта и выдаем ошибку пользователю.

	if (isset($_POST['email']) && $_POST['email'] != "") //тут все точно так же как и в предыдущем случае
		$email = $_POST['email'];
	else die ("Введіть Вашу електронну адресу");

	if (isset($_POST['message']) && $_POST['message'] != "") 
		$body = $_POST['message'];
	else die ("Введіть Ваше запитання");
	
	$address = "s3gh.sa@gmail.com";//адрес куда будет отсылаться сообщение для администратора
	$mes  = "Имя: $name \n";	//в этих строчках мы заполняем текст сообщения. С помощью оператора .= мы просто дополняем текст в переменную
	$mes .= "E-mail: $email \n";
 	$mes .= "Текст: $body"; 
	$send = mail ($address,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");//собственно сам вызов функции отправки сообщения на сервере

	if ($send) //проверяем, отправилось ли сообщение
		echo "Повідомлення відправлено!<br><br>Через 3 секунди Вас буде перенаправлено на головну сторінку";
	else 
		echo "Помилка, повідомлення не відправлено! Можливо, проблеми на сервері";
?>
</div>