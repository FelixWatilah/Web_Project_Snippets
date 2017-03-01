<?php
// fetching values form URL
$name=$_POST['name1'];
$email=$_POST['email1'];
$phone=$_POST['phone1'];
$message=$_POST['messssage1'];

$email=filter_var($email, FILTER_SANITIZE_EMAIL); //sanitizing email
//After sanitization, validation is required
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
	if (!preg_match('/^[0-9]{10}$/', $contact)) {
		echo '<span>* Please fill valid phone number *<span>';
	}else{
		$subject=$name;
		// To send HTML mail, The content-type header must be set
		$headers='MIME-version: 1.0'."\r\n";
		$headers.='content-type: text/html; charset=iso-8859-1'."\r\n";
		$headers.='From:'.$email."\r\n"; //Sender's email
		$headers.='Cc:'.$email."\r\n"; // Carbon copy to sender
		$template='<div style="padding:50px; color:white;">Hello '.$name.',<br />'
		.'<br />Thank you....! For contacting us. <br /><br />'
		.'Name:'.$name.'<br />'
		.'Email:'.$email.'<br />'
		.'Phone No:'.$phone.'</br >'
		.'This is a contact information mail.'
		.'<br />'
		.'We will contact you as soon as possible.</div>';
		$sendmessage='<div style="background-color:#7E7E7E;color:white;">'.$template.'</div>';
		// Message lines should not exceed 70 characters (PHP rule), so wrap it.
		$sendmessage=wordwrap($sendmessage,70);
		// Send mail by PHP mail function
		mail('receiver_email_id@abc.com', $subject, $sendmessage, $headers);
		echo 'Your query has been received, We will contact you soon.';
	}
}else{
	echo '<span>* Invalid Email *</span>';
}
?>