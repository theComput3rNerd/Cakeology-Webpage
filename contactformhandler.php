<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $=POST['message'];
	
	
	$email_from = 'cakeology.com';
	
	$email_subject = "New Form Cakeology. Website";
	
	$email_body = "User Name: $name.\n";
					"User Email: $visitor_email.\n";
						"User Message: $message.\n";
	
	
	$to = "bespokecakes@gmail.com";
	
	$headers = "From: $emal_from \r\n";
	
	$headers = "Reply-To: $visitor_email \r\n";
	
	mail($to,$email_subject,$email_body,$headers);
	
	header("Location: Location: contactus.html");
	
	
?>

