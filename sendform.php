<?php
use PHPMailer\src\PHPMailer;
use PHPMailer\src\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/Exception.php';

$name = trim($_POST['name_user']);
$phone = trim($_POST['tel']);
$hidden = trim($_POST['text']);
$fromMail = 'info@site.ru';
$fromName = 'Поступила заявка с сайта'; 
$emailTo = 'n_332@bk.ru';
$subject - 'Форма обратной связи site.com';
$subject - '=?utf-8?b?'. base64_encode($subject) .'?=';
$headers = "Content-type: text/plain; charset=\"utf-8\"\r\n";
$headers .= "From: ". $fromName ." <". $fromMail ."> \r\n";

$body = "Получено письмо с сайта \n Имя: $name\nТелефон: $phone\n Проблема: $text";

if (strlen($phone) > 0) {

$mail - mail($emailTo, $subject, $body, $headers, .'-f'. $fromMa11 ); 
return;
}

?>