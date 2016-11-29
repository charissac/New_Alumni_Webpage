<?php
session_start();


$toUserID = $_POST['userID'];
echo $_POST['userID'];

	require_once("DBConnect.php");
	require("/lib/sendgrid-php/sendgrid-php.php");
	
	$res=mysqli_query($conn, "SELECT * FROM user WHERE userID=".$_SESSION['user']);
	$fromUserRow=mysqli_fetch_array($res);

$fromUserID = $fromUserRow['userID'];
	


    	  
$sendreq = "INSERT INTO friend (fromUserID, toUserID, status) values ('".$fromUserID."','".$toUserID."', '1')";	       

	       
			
$res1=mysqli_query($conn, "SELECT * FROM user WHERE userID='".$toUserID."'");
$userRow=mysqli_fetch_array($res1);
			
  //  mysqli_query($conn, $q) or die(mysql_error());
	
	//send email notify
	

$from = new SendGrid\Email(null, "admin@fsktmalumni.com");
	$to = new SendGrid\Email(null, $userRow['email']);
	
//$userRow['email']
$subject = "Friend Request";
$content = new SendGrid\Content("text/plain", "Dear alumni, you have a friend request." );
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = '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';
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();

  mysqli_query($conn, $sendreq) or die(mysql_error());

			



 header("Location: {$_SERVER['HTTP_REFERER']}");


?>