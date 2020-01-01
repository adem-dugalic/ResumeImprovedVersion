<?php
	$name =  $_POST['name'];
	$surname =  $_POST['surname'];
	$phone =  $_POST['phone'];


    $mailto = $_POST['email'];
    $mailSub = "Adem Mail";
    $mailMsg = $_POST['message'];
   require '../PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "DevIUS.ius@gmail.com";
   $mail ->Password = "DevIUS123456789%";
   $mail ->SetFrom("DevIUS.ius@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);
   
   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "Mail Sent";
   }



?>