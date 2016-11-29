<?php
include_once 'DBConnect.php';

	$sql = "DELETE  FROM researchcollaboration WHERE researchID =" .$_POST["researchID"];
	mysqli_query($conn, $sql) or die(mysql_error());
		
	
header("Location: researchTitleListAdmin.php");

?>