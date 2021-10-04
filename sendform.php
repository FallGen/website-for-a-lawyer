<?php
//1 этап: получение данных
$name = trim($_POST['name_user']);
$phone = trim($_POST['tel']);
$text = trim($_POST['problem_text']);

//2 этап: обработка данных
$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$text = htmlspecialchars($text);

$name = urldecode($name);
$phone = urldecode($phone);
$text = urldecode($text);

$name = trim($name);
$phone = trim($phone);
$text = trim($text);

//3 этап: отправка данных на почту
if(mail("n_332@bk.ru",
		"новое письмо с сайта",
		"имя: ".$name."\n".
		"телефон: ".$phone."\n".
		"проблема: ".$text,
		"From: no-reply@mydomain.ru \r\n")
) {
	echo ('письмо успешно отправлено!');
}
else {
	echo ('обращение не отправлено, проверьте данные');
}											
?>
