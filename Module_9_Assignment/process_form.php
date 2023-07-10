<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Get the form data
	$name = trim($_POST["name"]);
	$email = trim($_POST["email"]);
	$subject = trim($_POST["subject"]);
	$message = trim($_POST["message"]);

	// Set the recipient email address
	$to = "habid9138@gmail.com";

	// Set the email subject and message
	$email_subject = "New Contact Form Submission: $subject";
	$email_body = "You have received a new message from your website contact form.\n\n" . 
				"Name: $name\nEmail: $email\n\nSubject: $subject\n\nMessage: $message\n";

	// Set the email headers
	$headers = "From: $name <$email>\r\nReply-To: $email\r\n";

	// Send the email
	if (mail($to, $email_subject, $email_body, $headers)) {
		// Send the success message
		echo "<script type='text/javascript'>alert('Thank you for contacting us!')</script>";
	} 
	header("Location: https://github.com/Sabbir-Hasan303/Module_9_Assignment/index.html");
	exit;
}
?>
