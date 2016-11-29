<?php

$userID = $_POST['userID'];

	require_once("DBConnect.php");
	require("/lib/sendgrid-php/sendgrid-php.php");

foreach( $userID as $key => $n ) {
    	  
	       

	        $q = "delete from user where userID = '".$userID[$key]."'";
   $res=mysqli_query($conn, "SELECT * FROM user WHERE userID='".$userID[$key]."'");
$userRow=mysqli_fetch_array($res);
			
  //  mysqli_query($conn, $q) or die(mysql_error());
	
	//send email notify
	

$from = new SendGrid\Email(null, "charissa930520@hotmail.com");
$to = new SendGrid\Email(null, $userRow['email']);
$subject = "Application Rejected";
$content = new SendGrid\Content("text/plain", "Dear alumni, your application have been rejected.");
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = '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';
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();

 mysqli_query($conn, $q) or die(mysql_error());

			
}
	
    
    header("Location: approveAlumni.php");


?>