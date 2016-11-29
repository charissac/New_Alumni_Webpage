<?php
session_start();
require_once("DBConnect.php");

$res1=mysqli_query($conn, "SELECT * FROM user WHERE userID=".$_SESSION['user']);
$userRow1=mysqli_fetch_array($res1);

$res=mysqli_query($conn, "SELECT * FROM user WHERE userID=".$_POST['userID']);
$userRow=mysqli_fetch_array($res);

require("/lib/sendgrid-php/sendgrid-php.php");


	if(isset($_POST['submit'])) {
		if ($_POST['content'] != ""){
			$q = "insert into postwall(toUserID, toFriendName, fromUserID, fromFriendName, comment, datetime) values('". $_POST['userID'] ."','".$userRow['fullName']."','".$_SESSION['user']."','".$userRow1['fullName']."', '".$_POST['content']."',NOW())";
		
			mysqli_query($conn, $q) or die(mysql_error());
			
			$from = new SendGrid\Email(null, "fsktmalumni@hotmail.com");
			$to = new SendGrid\Email(null, $userRow['email']);
			$subject = "New message at your wall";
			$content = new SendGrid\Content("text/plain", "Dear alumni,you have new message posted at your wall. You may login to alumni page by clicking this link http://localhost/New%20Alumni%20Webpage/signIn.php");
			$mail = new SendGrid\Mail($from, $subject, $to, $content);

			$apiKey = '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';
			$sg = new \SendGrid($apiKey);

			$response = $sg->client->mail()->send()->post($mail);
			echo $response->statusCode();
			echo $response->headers();
			echo $response->body();

 
		}
		else {
			echo '<script language="javascript">';
			echo 'alert("Please fill up the message box.")';
			echo '</script>';
		}
			
	}
		header("Location: {$_SERVER['HTTP_REFERER']}");
?>
		