<?php
	$email = $_POST['email'];
	$name =  $_POST['name'];
	$surname =  $_POST['surname'];
	$phone =  $_POST['phone'];
	$message =  $_POST['message'];
	$subject = "Resume email";

	mail($email,$subject,$message);


?>