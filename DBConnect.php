<?php
$conn = new mysqli("localhost", "root", "");

if(!mysqli_connect("localhost","root",""))
{
   die('Connection problem: '.mysqli_error($conn));
}
if(!mysqli_select_db( $conn, "alumnidatabase"))
{  die('Database selection problem: '.mysqli_error($conn));
}


			
			
?>