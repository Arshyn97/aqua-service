<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
//$name = $_POST['name'];
//$phone = $_POST['phone'];
//$email_address = $_POST['email'];
//$message = $_POST['message'];
	
// Create the email and send the message
$to      = 'sales.aquaservice@gmail.com';
$subject = 'Письмо с сайта аквасервис.kz';
$name = $_POST['name'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
$message = $_POST['message'];
$all=
"Имя: “.$name.”\r
".
"Телефон: “.$phone.”\r
".
"Почта: “.$email_address.”\r
".
"Сообщение: “.$message.”\r
";
$headers = array(
    'From' => 'info@xn--80aafbotj5che.kz',
    'Reply-To' => 'info@xn--80aafbotj5che.kz',
    'X-Mailer' => 'PHP/' . phpversion()
);

mail($to, $subject, $all, $headers);
return true;			
?>