<?php
session_start();
if ($_POST['action'] == 'Approve') {

$userID = $_POST['userID'];
require("/lib/sendgrid-php/sendgrid-php.php");
	 echo "<script type='text/javascript'>alert('Are you sure you want to confirm this?')</script>";
	  echo "<script>setTimeout(\"location.href = 'approveFriendPendingProfile.php';\");</script>";

	require_once("DBConnect.php");
	require("/lib/sendgrid-php/sendgrid-php.php");


    	  
	       
	        $q = "UPDATE friend SET status = 0 where fromUserID = '".$userID."' AND toUserID = ".$_SESSION['user'];
			
$res=mysqli_query($conn, "SELECT * FROM user WHERE userID='".$userID."'");
$userRow=mysqli_fetch_array($res);
			
  //  mysqli_query($conn, $q) or die(mysql_error());
	
	//send email notify
	

//$from = new SendGrid\Email(null, "charissa930520@hotmail.com");
//$to = new SendGrid\Email(null, $userRow['email']);
//$subject = "Application Approved";
//$content = new SendGrid\Content("text/plain", "Dear alumni, your account have been approved. You can now login to the FCSIT UM Alumni website by clicking this link http://localhost/New%20Alumni%20Webpage/signIn.php");
//$mail = new SendGrid\Mail($from, $subject, $to, $content);

//$apiKey = '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';
//$sg = new \SendGrid($apiKey);

//$response = $sg->client->mail()->send()->post($mail);
//echo $response->statusCode();
//echo $response->headers();
//echo $response->body();

 mysqli_query($conn, $q) or die(mysql_error());

			

}

else if ($_POST['action'] == 'Reject') {
	$userID = $_POST['userID'];
	echo "<script type='text/javascript'>alert('Are you sure you want to reject this?')</script>";
	  echo "<script>setTimeout(\"location.href = 'approveFriendPendingProfile.php';\");</script>";

	require_once("DBConnect.php");
	require("/lib/sendgrid-php/sendgrid-php.php");
	
	        $q = "delete from friend where fromUserID = '".$userID."' AND toUserID = ".$_SESSION['user'];
   $res=mysqli_query($conn, "SELECT * FROM user WHERE userID='".$userID."'");
$userRow=mysqli_fetch_array($res);
			
  //  mysqli_query($conn, $q) or die(mysql_error());
	
	//send email notify
	

//$from = new SendGrid\Email(null, "charissa930520@hotmail.com");
//$to = new SendGrid\Email(null, $userRow['email']);
//$subject = "Application Rejected";
//$content = new SendGrid\Content("text/plain", "Dear alumni, your application have been rejected.");
//$mail = new SendGrid\Mail($from, $subject, $to, $content);

//$apiKey = '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';
//$sg = new \SendGrid($apiKey);

//$response = $sg->client->mail()->send()->post($mail);
//echo $response->statusCode();
//echo $response->headers();
//echo $response->body();

 mysqli_query($conn, $q) or die(mysql_error());

}

	
  header("Location: {$_SERVER['HTTP_REFERER']}");



?>