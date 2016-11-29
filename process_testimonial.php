<?php

session_start();
    
	
	require_once("DBConnect.php");
	
			$userName  = $_SESSION['userName'];
			$userID = $_SESSION['userID'];
	$q = "insert into testimonial(title,description,userID,created_by,create_date) values('".$_POST["title"]."','".$_POST["description"]."',".$userID."','".$userName."',NOW() )";
		
		
	
	mysqli_query($conn, $q) or die(mysql_error());
	
	$testimonialID =  mysqli_insert_id ($conn);
	
	$res=mysqli_query($conn, "SELECT * FROM testimonial WHERE testimonialID=" .$testimonialID);
	$userRow=mysqli_fetch_array($res);
	
	
	
	

    header("Location: testimonialList.php");
	
	


?>