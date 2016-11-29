<?php
if ($_POST['action'] == 'Approve') {

$userID = $_POST['userID'];
echo $_POST['userID'];
	require_once("DBConnect.php");
	require("/lib/sendgrid-php/sendgrid-php.php");
	 echo "<script type='text/javascript'>alert('Are you sure you want to confirm this?');window.history.back();</script>";

foreach( $userID as $key => $n ) {
    	  
	       
//UPDATE table_name
//SET column1=value1,column2=value2,...
//WHERE some_column=some_value;

//$res = mysql_query("SELECT email FROM user where userID = '".$userID[$key]."'");
	        $q = "UPDATE user SET status = 0 where userID = '".$userID[$key]."'";
			
$res=mysqli_query($conn, "SELECT * FROM user WHERE userID='".$userID[$key]."'");
$userRow=mysqli_fetch_array($res);
			
  //  mysqli_query($conn, $q) or die(mysql_error());
	
	//send email notify
	

$from = new SendGrid\Email(null, "fsktmalumni@hotmail.com");
$to = new SendGrid\Email(null, $userRow['email']);
$subject = "Application Approved";
$content = new SendGrid\Content("text/plain", "Dear alumni, your account have been approved. You can now login to the FCSIT UM Alumni website by clicking this link http://localhost/New%20Alumni%20Webpage/signIn.php");
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
	$userID = $_POST['userID'];

	require_once("DBConnect.php");
	require("/lib/sendgrid-php/sendgrid-php.php");

foreach( $userID as $key => $n ) {
    	  
	       

	        $q = "delete from user where userID = '".$userID[$key]."'";
   $res=mysqli_query($conn, "SELECT * FROM user WHERE userID='".$userID[$key]."'");
$userRow=mysqli_fetch_array($res);
			
  //  mysqli_query($conn, $q) or die(mysql_error());
	
	//send email notify
	

$from = new SendGrid\Email(null, "fsktmalumni@hotmail.com");
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
}

	
  
    //header("Location: approvingAlumni.php");


?>