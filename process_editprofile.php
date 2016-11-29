<?php
session_start();
include_once 'DBConnect.php';

if(!isset($_SESSION['user']))
{
 header("Location: index.php");
}
	$res=mysqli_query($conn, "SELECT * FROM user WHERE userID=".$_SESSION['user']);
	$userRow=mysqli_fetch_array($res);
	
	
	
	$fnm = $userRow['userID'];
		move_uploaded_file($_FILES["profilephoto"]["tmp_name"], __DIR__."/uploads/" . $fnm);
		
		
		
	
	 $sql = "UPDATE user SET phoneNum = '".$_POST["phonenumber"]."',  address = '".$_POST["address"]."',occupation = '".$_POST["occupation"]."', profilepicture = '".$fnm."'
               WHERE userID =" .$_SESSION['user'];
			    mysqli_query($conn, $sql) or die(mysql_error());
				
				
				
				header("Location: myProfile.php");

?>


	