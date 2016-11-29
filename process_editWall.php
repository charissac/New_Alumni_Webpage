<?php
session_start();
include_once 'DBConnect.php';

$wallID = $_POST['wallID'];
$comment = $_POST["retrievedContent"];

	if ($_POST['action'] == 'Edit') {
		echo "EDIT <br/>";
		echo $_POST["retrievedContent"];
		//echo $_POST['wallID'];
		
		$sql = "UPDATE postwall SET comment = '".$comment."' WHERE postWallID = ".$wallID;
		mysqli_query($conn, $sql) or die(mysql_error());
		}
	
		
		else if ($_POST['action'] == 'Delete') {
			echo "delete <br/>";
				echo $_POST['wallID'];
			$sql = "DELETE FROM postwall where postWallID = ".$wallID;
			 mysqli_query($conn, $sql) or die(mysql_error());
		}

  header("Location: {$_SERVER['HTTP_REFERER']}");



?>