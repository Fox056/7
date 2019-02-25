<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$call = $_POST['call'];
$website = $_POST['website'];
$priority = $_POST['priority'];
$type = $_POST['type'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone \n Call Back: $call \n Website: $website \n Priority: $priority \n Type: $type \n Message: $message";
$recipient = "YOUREMAIL@HERE.COM";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
//создаем объект DateTime с текущей датой
$date = date_create();
//определяем имя файла
$file_name = "title/" . date_format($date, 'YmdHis.u') . ".txt";
// Открыть текстовый файл
$f = fopen($file_name, "w");
// Записать текст
fwrite($f, $_POST["textblock"]);
// Закрыть текстовый файл
fclose($f);
// Открыть файл для чтения и прочитать строку
$f = fopen("title/textfile.txt", "r");
// Читать текст
echo fgets($f);
fclose($f);

?>
