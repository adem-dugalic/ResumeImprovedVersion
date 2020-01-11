<?php
   require '../PHPMailer-master/PHPMailerAutoload.php';
	$name =  $_POST['name'];
	$surname =  $_POST['surname'];
	$phone =  $_POST['phone'];
  $email = $_POST['email'];
  $mailSub = "Question from resume";
  $mailMsg = $_POST['message'];

    $mail = new PHPMailer();
    $mail ->IsSmtp();
     $mail ->SMTPDebug = 0;
     $mail ->SMTPAuth = true;
     $mail ->SMTPSecure = 'ssl';
     $mail ->Host = "smtp.gmail.com";
     $mail ->Port = 465; // or 587
     $mail ->IsHTML(true);
     $mail ->Username = "DevIUS.ius@gmail.com";
     $mail ->Password = "**************";
     $mail ->SetFrom("DevIUS.ius@gmail.com");
     $mail ->Subject = $mailSub;
     $mail ->Body = $name." ".$surname."<br>".$phone."<br>".$email."<br><br>".$mailMsg;
     $mail ->AddAddress("dugalice@gmail.com");
     
   if (filter_var($email, FILTER_VALIDATE_EMAIL) && is_numeric($phone)) {
     $mail->Send();
    header('Location: ../index.php');
  }else if(is_numeric($phone)){
    echo '<script type="text/javascript"> alert("$email is not a valid email address") </script> ';
  }else if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo '<script type="text/javascript"> alert("$phone is not a valid number") </script> ';
  }else{
    echo '<script type="text/javascript"> alert("$email and $phone are not a valid") </script> ';
  }

?>