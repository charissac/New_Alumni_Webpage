<?php
session_start();
include_once 'DBConnect.php';
 

//if ($_POST["content"] != ""){
	if(isset($_POST['action'])) {
	
		if ($_POST['action'] == 'Submit'){
			echo"submit";
	
			$sql = "UPDATE researchcollaboration SET title = '".$_POST["title"]."',  description = '".$_POST["description"]."', contactEmail = '".$_POST["contactEmail"]."',contactNum = '".$_POST["contactNumber"]."', cooperation = '".$_POST["cooperation"]."'
					WHERE researchID =" .$_POST["researchID"];
			mysqli_query($conn, $sql) or die(mysql_error());
	
	
			//Attachment
			$fnm = $_POST["researchID"];
			move_uploaded_file($_FILES["attachment"]["tmp_name"], __DIR__."/researchAttachment/" . $fnm);
			
			echo "<script type='text/javascript'>alert('You have successfully edited your title.')</script>";
		}
	
	
	
		else {
			
			$sql = "DELETE  FROM researchcollaboration WHERE researchID =" .$_POST["researchID"];
			mysqli_query($conn, $sql) or die(mysql_error());
		}
	}
	
	if (isset($_SESSION['user'])){
		//echo "Not admin";
		header("Location: researchMyTitleList.php");
		//header("Location: researchMyTitleListAdmin.php");
		
	}
	else if (isset($_SESSION['admin'])){
		//echo "admin";
		header("Location: researchMyTitleListAdmin.php");
	}

?>