<?

echo $_POST['imahuman'];

if($_POST['imahuman'] == "namuh"){
	$name = $_POST['sc_fullname'];
	$email = $_POST['sc_emailaddress'];
	$message = $_POST['sc_comments'];

	$to = "adam@adamwgd.com";
	$subject = "Contact from Slayex.com";
	$body = "Full Name: ".$name."\n";
	$body .= "Email Address: ".$email."\n";
	$body .= "Comments: ".$message;
	$headers = "From: $email";
	
	mail($to,$subject,$body,$headers);
}

?>