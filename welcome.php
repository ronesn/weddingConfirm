<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="shortcut icon" type="image/x-icon" href="includes/images/favicon.ico">
	</head>
<body>
	<?php header('Content-Type: text/html; charset=utf-8'); ?>
	<?php echo $_POST["first"]; ?>,תודה על ההרשמה<br>
	בבקשה תודיע לנו על כל שינויי <br>
	נועם : 054-9332134<br>
	הילה: 054-2242808<br>
	<?php
// The message
$message = "Line 1\r\nLine 2\r\nLine 3";

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail('info@noam-hila.com', 'My Subject', $message);
?>
	<?php 

	//include_once("Mail.php"); 
	$to = "ronesn@noam-hila.com";  
	$subject = "Email from php"; 
	$body = "Hi \n this is a test"; 

	mail($to, $subject, $body); 
	if(mail($to, $subject, $body))
		echo "email sent";
	else 
		echo "email sending fail";
	//echo $_REQUEST["email"]; 
	//$from=$_POST["email"];
	//$message=$_POST["first"].$_POST["last"];
	//mail("noamrones@yahoo.com","My subject",$message,"From: $from\n");
	
	$coming="Coming: ".$_REQUEST['radio']."\n";
	if($_REQUEST['radio']==5){
		$coming="Coming: ".$_REQUEST['fml']."\n";
	}
	$fname="Name: ".$_REQUEST['first']; 
	if($_REQUEST['radio']==2){
		$fname="Name: ".$_REQUEST['first']."&".$_REQUEST['first2'];
	}
	$lname=" ".$_REQUEST['last']."\n";
	$phone="Phone: ".$_REQUEST['phone_2'].$_REQUEST['phone_1']."\n";
	$notes="Notes: ".$_REQUEST['notes']."\n";
	$email=$_REQUEST['email']."\n";

	$to="noamrones@yahoo.com";
	$subject="request for information ";
	$body=$coming.$fname.$lname."Mail: ".$email.$phone.$notes;
	//echo $body;
	$from="ronesn@noam-hila.com";
	if(mail($to,$subject,$body))
	echo ("1");
	if(mail("rones.noam@gmail.com", "Test subject", "Test Message","From: ronesn@noam-hila.com")) 
		echo ("2");
	if(mail("info@noam-hila.com", "Test subject", "Test Message", "From: info@noam-hila.com"))
		echo ("3");
	if (mail($to,$subject,$body,"From: $email"))
	{
		echo("thanks");
	}
	else
	{
		echo("Message delivery failed...\n");
	}
	
	
	//$link = mysql_connect("localhost", "noam", "r7o3n2es") or die (mysql_error());
		//if (!$link) 
			//die('Could not connect: ' . mysql_error());
		//else
			//echo 'Connected successfully';
			
	$coming=$_REQUEST['radio'];
	if($_REQUEST['radio']==5){
		$coming=$_REQUEST['fml'];
	}
	$fname=$_REQUEST['first']; 
	if($_REQUEST['radio']==2){
		$fname=$_REQUEST['first']."&".$_REQUEST['first2'];
	}
	$lname=$_REQUEST['last'];
	$name=$fname." ".$lname;
	//$name=utf8_encode($name);
	$phone=$_REQUEST['phone_2'].$_REQUEST['phone_1'];
	$email=$_REQUEST['email'];
	//$coming=2;
	
	$con=mysqli_connect("localhost","noam", "r7o3n2es","Confirmed");
	// Check connection
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	if(!mysqli_set_charset($con, 'utf8')) {
		echo 'the connection is not in utf8';
		exit();
	}

	$sql=mysqli_query($con,"INSERT INTO `wedding`(Name,Phone,Coming,Email)VALUES('$name','$phone',$coming,'$email');");
	
	if (!mysqli_query($con,$sql)) {
		die('Error: ' . mysqli_error($con));
	}
	echo "1 record added";

	mysqli_close($con);
?>
</body>
</html>