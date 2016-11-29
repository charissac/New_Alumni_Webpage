<?php
if ($_POST['action'] == 'Approve') {

$testimonial_ID = $_POST['testimonial_ID'];

	require_once("DBConnect.php");
	require("/lib/sendgrid-php/sendgrid-php.php");
	 echo "<script type='text/javascript'>alert('Are you sure you want to confirm this?');window.history.back();</script>";

foreach( $testimonial_ID as $key => $n ) {
	
	        $q = "UPDATE testimonial SET status = 0 where testimonial_ID = '".$testimonial_ID[$key]."'";
			$userID = mysqli_query($conn,"SELECT * from testimonial WHERE testimonial_ID = '".$testimonial_ID[$key]."'");
			$userIDRow = mysqli_fetch_array($userID);
			
$res=mysqli_query($conn, "SELECT * FROM user WHERE userID='".$userIDRow['createUserID']."'");
$userRow=mysqli_fetch_array($res);
			
  
	
	//send email notify
	

$from = new SendGrid\Email(null, "fsktmalumni@hotmail.com");
$to = new SendGrid\Email(null, $userRow['email']);
$subject = "Application Approved";
$content = new SendGrid\Content("text/plain", "Dear alumni, your testimonial have been approved. Please login to Alumni website by clicking this link http://localhost/New%20Alumni%20Webpage/signIn.php");
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = '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';
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();

 mysqli_query($conn, $q) or die(mysql_error());

			
}
}

else if ($_POST['action'] == 'Reject') {
	  echo "<script type='text/javascript'>alert('Are you sure you want to reject this?');window.history.back();</script>";
	$testimonial_ID = $_POST['testimonial_ID'];
	$testimonial_ID = $_POST['testimonial_ID'];

	require_once("DBConnect.php");
	require("/lib/sendgrid-php/sendgrid-php.php");

foreach( $testimonial_ID as $key => $n ) {
    	  
	       

	        $q = "delete from testimonial where testimonial_ID = '".$testimonial_ID[$key]."'";
   $userID = mysqli_query($conn,"SELECT * from testimonial WHERE testimonial_ID = '".$testimonial_ID[$key]."'");
			$userIDRow = mysqli_fetch_array($userID);
			
$res=mysqli_query($conn, "SELECT * FROM user WHERE userID='".$userIDRow['createUserID']."'");
$userRow=mysqli_fetch_array($res);
			
 
	
	//send email notify
	

$from = new SendGrid\Email(null, "fsktmalumni@hotmail.com");
$to = new SendGrid\Email(null, $userRow['email']);
$subject = "Application Rejected";
$content = new SendGrid\Content("text/plain", "Dear alumni, your testmonial have been rejected.");
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = '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';
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();

// $q = "delete from testimonial where testimonial_ID = '".$testimonial_ID[$key]."'";

 mysqli_query($conn, $q) or die(mysql_error());
}
}

	
  
 


?>