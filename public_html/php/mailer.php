<?php

//require all composer dependencies
require_once(dirname(__DIR__,2) . "/vendor/autoload.php");

//require mail-config.php
require_once("mail-config.php");

//verify users reCAPTCHA input
$recaptcha = new \ReCaptcha\ReCaptcha($secret);
$resp = $recaptcha->verify($_POST["g-recaptcha-response"], $_SERVER["REMOTE_ADDR"]);

try{
	//if there's a reCAPTCHA error, throw an exception
	if(!$resp->isSuccess()) {
		throw(new Exception("reCAPTCHA error!"));
	}

	//sanitize the inputs from the form
	$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
	$subject = filter_input(INPUT_POST, "subject", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	$message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

	//create Swift Message
	$swiftMessage = new Swift_Message();

	//Attach the sender to the message
	$swiftMessage->setFrom([$email => $name]);

	//attach the recipients to the message
	$recipients = $MAIL_RECIPIENTS;
	$swiftMessage->setTo($recipients);

	//attach the subject line to the message
	$swiftMessage->setSubject($subject);

	//attach the actual message to the message
	$swiftMessage->setBody($message, "text/html");
	$swiftMessage->addPart(html_entity_decode($message), "text/plain");

	//send the message via SMTP
	$smtp = new Swift_SmtpTransport("localhost", 25);
	$mailer = new Swift_Mailer($smtp);
	$numSent = $mailer->send($swiftMessage, $failedRecipients);

	//the send method returns the number of recipients that accepted the email
	if($numSent !== count($recipients)){
		throw(new RuntimeException("Unable to send email"));
	}

	//report a successful send
	echo "<div class=\"alert alert-success\" role=\"alert\">Email sent successfully!</div>";
} catch(Exception $exception){
	echo "<div class=\"alert alert-danger\" role=\"alert\">Uh oh, Unable to send email: " . $exception->getMessage() . "</div>";
}