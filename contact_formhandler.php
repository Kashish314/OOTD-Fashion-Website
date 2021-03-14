<?php
 $name= $_POST['name'];
 $visitor_email= $_POST['email'];
 $message=$_POST['message'];


$email_from ="ootd@gmail.com";
$email_subject="New Form Submission";
$email_body="Username: $name.\n".
			"User Email: $visitor_email.\n".
			"User Message:$message.\n";
			
$to="ootd@gmail";
$headers=" From: $email_from\r\n";
$headers=" Reply To: $visitor_email\r\n";
mail($to,$mail_subject,$email_body,$header);
header("Location:contact.html");

?>