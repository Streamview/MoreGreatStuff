<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
	$success = false;
	$message = "";
	$errors = array();
	
	if (empty($_POST['name'])) {
		$errors[] = "Name must not be empty";
	} else if (empty($_POST['email'])) {
		$errors[] = "Email must not be empty";
	} else if (empty($_POST['message'])) {
		$errors[] = "Message must now be empty";
	} else {
		$to = "Ken New <info@MoreGreatStuff.ca>"; //"ramone@ramone.localhost.com"; //
		$subject = "Contact From MoreGreatStuf.ca";
		$message = $_POST['message'];
		$headers = "";
		
		$headers = "From: {$_POST['name']} <{$_POST['email']}>" . "\r\n" .
			"Reply-To: {$_POST['name']} <{$_POST['email']}>" . "\r\n" .
			"X-Mailer: PHP/" . phpversion();
		
		
		if (mail($to, $subject, $message, $headers)) {
			$success = true;
			$message = "Enquiry successfully sent. We will get in contact with you soon.";
		} else {
			$errors[] = "Unable to send mail at this time. Please try again";
		}
	}
	
	echo json_encode(array(
		"success" => $success,
		"message" => $message,
		"errors" => $errors
	));
	exit;
}