<?php

	if(!isset($_POST['name'],$_POST['email'],$_POST['company'],$_POST['phone'],$_POST['message'])){
		die("error");
	}

	$to = "alxjpdop@gmail.com";
	$subject = "Message from site";

	$message = "
		<html>
		<head>
		<title>Message from site</title>
		</head>
		<body>
		<p>Here is the data user entered</p>
			<table border='1' cellpadding='1'>
				<tr>
					<th>Name</th>
					<th>".$_POST['name']."</th>
				</tr>
				<tr>
					<th>Email</th>
					<th>".$_POST['email']."</th>
				</tr>
				<tr>
					<th>Comapny</th>
					<th>".$_POST['company']."</th>
				</tr>
				<tr>
					<th>Phone</th>
					<th>".$_POST['phone']."</th>
				</tr>
				<tr>
					<th>Message</th>
					<th>".$_POST['message']."</th>
				</tr>
			</table>
		</body>
		</html>
	";

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: <alxjpdop@gmail.com>' . "\r\n";

	mail($to,$subject,$message,$headers);
	die("success");

?>