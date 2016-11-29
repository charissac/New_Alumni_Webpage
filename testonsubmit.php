<script type="text/javascript">
            function CheckSearch(val) {
                //hide all elements
                var name = document.getElementById("name");
                name.style.display = "none";
                name.value = "";
                
                var programme = document.getElementById("programme");
                programme.style.display = "none";
                programme.value = "";
                
                var major = document.getElementById("major");
                major.style.display = "none";
                major.value = "";
                
                //depends on index selected, show the desired one
                if (val.selectedIndex === 0){
                     document.getElementById("name").style.display = "block";
                }else if(val.selectedIndex === 1){
                     document.getElementById("programme").style.display = "block";
                }else{                    
                     document.getElementById("major").style.display = "block";
                }
              
            }
         
        </script> 



<?php
include_once 'DBConnect.php';
if(isset($_POST['submit'])) 
{ 
    $name = $_POST['name'];
    echo "User Has submitted the form and entered this name : <b> $name </b>";
    echo "<br>You can use the following form again to enter a new name."; 
	
	if (isset($_POST['name']) && $_POST['name']!="") {
    echo "Search Item:" .$_POST['name'];
    if (preg_match("/^[  a-zA-Z]+/", $_POST['name'])) {
        $res = mysqli_query($conn, "SELECT * FROM user WHERE fullName LIKE '" . $name . "%'");
		echo"abc";
        //userRow=mysqli_fetch_array($res);
    }
	}
	else if (isset($_POST['programme']) && $_POST['programme']!="") {
   echo "Search Item:"  .$_POST['programme'];
    $res = mysqli_query($conn, "SELECT * FROM user WHERE programme LIKE '" . $_POST["programme"] . "'");
	echo"zzz";
	}
	
	 else if (isset($_POST['major']) && $_POST['major']!="") {
    echo "Search Item:"  .$_POST['major'];
    $res = mysqli_query($conn, "SELECT * FROM user WHERE major LIKE '" . $_POST["major"] . "'");
	 }


 if (isset($res) && mysqli_num_rows($res) > 0) {	
 echo"123";
    while ($userRow = mysqli_fetch_array($res)) {

        $userID = $userRow['userID'];
		$userName = $userRow['userName'];
		echo "</br>";
		  echo "<a  href=\"ViewSearchProfile.php?userID=$userID\">" . $userName . "</a>\n";
	}
 }
}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 <select id="search" onchange="CheckSearch(this)">
                <option value="Name">Name</option>
                <option value="Programme">Programme</option>
                <option value="Major">Major</option>
                <option value="" hidden selected>Please select what to search</option>
            </select>
            <br><br>
            <input  type="text" name="name" id="name" style="display: none"> 

            <select name="programme" id="programme" style="display: none">
                <option name="Bachelor">Bachelor</option>
                <option value="Master">Master</option>
                <option value="Doctorate">Doctorate</option>
                <option value="" hidden selected>Please select a programme</option>
            </select>

            <select name="major" id="major" style="display: none">
                <option value="Artifical Intelligence">Artifical Intelligence</option>
                <option value="Computer System and Network">Computer System and Network</option>
                <option value="Information System">Information System</option>
                <option value="Software Engineering">Software Engineering</option>
                <option value="Information Techonology">Information Techonology</option>
                <option value="" hidden selected>Please select a major</option>
            </select>
   <input type="submit" name="submit" value="Submit Form"><br>
</form>