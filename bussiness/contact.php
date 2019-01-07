<?php
$name   	= $_POST['Name'];	
$subject	= $_POST['Subject'];
$mail		= $_POST['Email'];
$message	= $_POST['Message'];




mail('sergdios09@gmail.com', $subject, $message);

?>
