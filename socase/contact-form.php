<?php

    //-----------------------------------------------------
	//-----------change address to xxx@yourdomainname ----------------------
	$address= "support@vibranttheme.com";
	//-----------------------------------------------------
	//-----------------------------------------------------

	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = "subject text";
	$message_content = $_POST["message"];
	if(!isset($name) || !isset($email) || !isset($message_content)){
		echo "Please fill all required field!";
		exit;
	}
	$headers = "From: $name <$email>\r\n";
	$headers .= "Reply-To: $subject <$email>\r\n";

	$message = "--$mime_boundary \r\n";
	
	$message .= "You have an email from your web site: \r\n";
	$message .= "Name: $name \r\n";
	$message .= "Email: $email \r\n";
	$message .= "Subject: $subject \r\n";
	$message .= "Message: $message_content \r\n";
	$message .= "--$mime_boundary--\r\n";
	$mail_sent = mail($address, $subject, $message, $headers);
	if($mail_sent)
	{	
		echo $name. ": Thanks for contact.";
	}
