<?php

session_start();
include_once 'DBConnect.php';

if(!isset($_SESSION['user']))
{
 header("Location: index.php");
}
	$res=mysqli_query($conn, "SELECT * FROM user WHERE userID=".$_SESSION['user']);
	$userRow=mysqli_fetch_array($res);
    
	
	if(empty($_POST)) { exit; }
    
    $errors = array();
	
	
	
    //Password validation 
    
    if($_POST["password"] != $_POST["checkpassword"])
        $errors[] = "Password is not the same.";
    if(strlen($_POST["password"]) < 5)
        $errors[] = "Password must be more than 5 characters.";
	
	
 $sql = "UPDATE user SET password = '".$_POST["password"]."'
               WHERE userID =" .$_SESSION['user'];
			    mysqli_query($conn, $sql) or die(mysql_error());
				
				header("Location: alumni.php");

?>


