<?php

if (isset($_POST['submit'])) {
	$name= $_POST['name'];
	$email= $_POST['email'];
	$subject= $_POST['subject'];
	$message= $_POST['message'];

	$mailTo = "margarita.groisman@gatech.edu"

	$headers = "From: ".$email;
	$txt = "You have recieved an e-mail from".$name.".\n\n".$message;

	mail($mailTo, $subject, $txt, $header);

	//header("Location: index.p");

}
