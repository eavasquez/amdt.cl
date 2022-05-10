<?php 

$name = $_POST['name'];
$mail = $_POST['email'];
$subject = $_POST['subject'];
$empresa = $_POST['message'];

$header = 'from: '.$mail."\r\n";
$header .= "X-Mailer:PHP/".phpversion()."\r\n";
$header .= "Mime-Version:1.0 \r\n";
$header .= "content-Type:text/plain";

$message = "este message fue enviado por: ".$name."\r\n";
$message .= "Su e-mail es: ".$mail."\r\n";
$message .= "Asunto: ".$subject."\r\n";
$message .= "Mensaje: ".$_POST['message']."\r\n";
$message .= "enviado el: ".date('d/m/Y',time());


$para = 'contacto@amdt.cl';
$asunto = 'Mensaje desde AMDT.CL';

if(mail($para,$asunto,utf8_decode($message),$header))
echo "<script type='text/javascript'>alert('Tu message ha sido enviado exitosamente');</script>";

 ?>