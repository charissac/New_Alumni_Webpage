<?php
session_start();
if ($_POST['action'] == 'Cancel') {

$userID = $_POST['userID'];

	require_once("DBConnect.php");
	require("/lib/sendgrid-php/sendgrid-php.php");
	echo "<script type='text/javascript'>alert('Are you sure you want to cancel this?')</script>";
	  echo "<script>setTimeout(\"location.href = 'cancelFriendRequest.php';\");</script>";

foreach( $userID as $key => $n ) {
    	  
	       

	        $q = "delete from friend where toUserID = '".$userID[$key]."' AND fromUserID = ".$_SESSION['user'];
   $res=mysqli_query($conn, "SELECT * FROM user WHERE userID='".$userID[$key]."'");
$userRow=mysqli_fetch_array($res);
			
  

 mysqli_query($conn, $q) or die(mysql_error());
			
  
}

}


else if ($_POST['action'] == 'Cancel Friend Request') {

$userID = $_POST['userID'];
echo "<script type='text/javascript'>alert('Are you sure you want to cancel this?')</script>";
	  echo "<script>setTimeout(\"location.href = 'cancelProfileFriendRequest.php';\");</script>";

	require_once("DBConnect.php");
	require("/lib/sendgrid-php/sendgrid-php.php");


	$q = "delete from friend where toUserID = '".$userID."' AND fromUserID = ".$_SESSION['user'];
	$res=mysqli_query($conn, "SELECT * FROM user WHERE userID='".$userID."'");
	$userRow=mysqli_fetch_array($res);
			
  

 mysqli_query($conn, $q) or die(mysql_error());
			
  

}
 header("Location: {$_SERVER['HTTP_REFERER']}");



?>