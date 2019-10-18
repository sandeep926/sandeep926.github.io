<?php
$to = "sandeepchauhan2268@gmail.com";
$subject = "response from website";
$message = "I am very thankful to you";
$headers = "From: sandeep926.github.io";

if(mail($to, $subject, $message, $headers)){
	echo "Mail send successfully";
	else{
	echo "Can not send mail";
	}
}
?>