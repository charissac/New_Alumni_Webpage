<?php
header('Cache-Control: no cache'); //no cache
session_cache_limiter('private_no_expire');
session_start();
?>
<!DOCTYPE html>


 <script type="text/javascript">
           function CheckSearch(val) {
                //hide all elements
                var name = document.getElementById("name");
                name.style.display = "none";
                //name.value = "";
                
                var programme = document.getElementById("programme");
                programme.style.display = "none";
                //programme.value = "";
                
                var major = document.getElementById("major");
                major.style.display = "none";
                //major.value = "";
				
				var year = document.getElementById("year");
                year.style.display = "none";
                //year.value = "";
                
                //depends on index selected, show the desired one
                if (val.selectedIndex === 1){
                     document.getElementById("name").style.display = "block";
                }else if(val.selectedIndex === 2){
                     document.getElementById("programme").style.display = "block";
                }else if(val.selectedIndex === 3){                    
                     document.getElementById("major").style.display = "block";
                }
				else if(val.selectedIndex === 4) {                    
                     document.getElementById("year").style.display = "block";
                }
            }
			
        </script> 
 
 <style type="text/css">
  label {
	  float: left;
	   width:25%;
display:inline-block;	
padding-left: 80px;	
}

#programme{
 width:580px;   
 font-family: Arial; font-size: 15pt; 
}

   #programme option{
  width:580px;   
  font-family: Arial; font-size: 15pt; 
}

#major{
 width:580px;   
 font-family: Arial; font-size: 15pt; 
}

   #major option{
  width:580px;   
  font-family: Arial; font-size: 15pt; 
}

#year{
 width:580px;   
 font-family: Arial; font-size: 15pt; 
}

   #year option{
  width:580px;   
  font-family: Arial; font-size: 15pt; 
}
#search{
 width:580px;  
font-family: Arial; font-size: 15pt; 
}

   #search option{
  width:580px;   
  font-family: Arial; font-size: 15pt; 
}

td{font-family: Arial; font-size: 15pt;}


    </style>

<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>UM Alumni</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
  <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
  <meta name="author" content="FREEHTML5.CO" />

  <!-- 
  //////////////////////////////////////////////////////

  FREE HTML5 TEMPLATE 
  DESIGNED & DEVELOPED by FREEHTML5.CO
    
  Website:    http://freehtml5.co/
  Email:      info@freehtml5.co
  Twitter:    http://twitter.com/fh5co
  Facebook:     https://www.facebook.com/fh5co

  //////////////////////////////////////////////////////
   -->



  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- Superfish -->
  <link rel="stylesheet" href="css/superfish.css">

  <link rel="stylesheet" href="css/style.css">


  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->
<STYLE TYPE="text/css">

td{font-family: Arial; font-size: 15pt;}

</STYLE>
  </head>
  <body>
    <div id="fh5co-wrapper">
    <div id="fh5co-page">
    <div id="fh5co-header">
      <div class="top">
        <div class="container">
<?php

include_once 'DBConnect.php';

if(!isset($_SESSION['admin']))
{
 header("Location: loginadmin.php");
}
$res=mysqli_query($conn, "SELECT * FROM admin WHERE adminID=".$_SESSION['admin']);
$adminRow=mysqli_fetch_array($res);

$search = $programme = $major = $year = $name ="";

if(isset($_POST['submit'])) {
	
	$search = $_POST['search'];
    $name = $_POST['name'];
	$programme = $_POST['programme'];
	$major = $_POST['major'];
	$year = $_POST['year'];
}
?>

          <span> Welcome back, admin - <?php echo $adminRow['userName']; ?></span>
          <span><a href="Logout.php?logout=1">Log Out</a></span>
        </div>
      </div>
      <!-- end:top -->
      <header id="fh5co-header-section">
        <div class="container">
          <div class="nav-header">
            <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
            <h1 id="fh5co-logo" ><a href="index.html" style="color:#800080">FSKTM Alumni</a></h1>
            <!-- START #fh5co-menu-wrap -->
 <nav id="fh5co-menu-wrap" role="navigation">
            <ul class="sf-menu" id="fh5co-primary-menu">
              <li><a href="admin.php">Home</a></li>

                  <li>
                    <a href="#" class="fh5co-sub-ddown">News & Event</a>
                      <ul class="fh5co-sub-menu">
                      <li><a target="_blank">News & Announcement</a>
                      <ul class="fh5co-sub-menu">
                      <li><a href="photoadmin.php" target="_blank">Upload Photo</a></li>
                      <li><a href="news.php" target="_blank">View News</a></li>

                      </ul>
                      </li>
                      <li><a href="#" target="_blank">Events</a></li>
                    </ul>
                  </li>
                   
                <li><a href="admin.php">Job Area</a>
                <ul class="fh5co-sub-menu">
                  <li><a href="joblist.php">View All Jobs</a></li>
                  <li><a href="joblistalumni.php">View My Job List</a></li>
                  <li><a href="createjob.php">Post Job Advertisement</a></li>
                </ul>
              </li>
                <li><a href="admin.php">Manage Alumni</a>
                <ul class="fh5co-sub-menu">
					<li><a href="approvingAlumni.php">Approve Alumni</a></li>
                  <li><a href="directoryAdmin.php"> Directory</a></li>
                  <li><a href="admin.php">Testimonial</a></li>
                  <li><a href="admin.php">FYP Research</a></li>
                  <li><a href="admin.php">Generate Account</a></li>
                </ul>
              </li>
                <li><a href="admin.php">Report</a>
                <ul class="fh5co-sub-menu">
                  <li><a href="admin.php">Manage Survey</a></li>
                  <li><a href="admin.php">Analysis Report</a></li>

                </ul>
              </li>
            
            </ul>
          </nav>
          </div>
        </div>
      </header>
      
    </div>
    

   <div class="fh5co-hero" style="height:100%;">
      <div class="fh5co-overlay" style="height:100%;z-index:0;"></div>
      <div style="background-image: url(images/background.jpg); background-size: cover;">
        <div class="desc animate-box" style = "padding-top: 200px;padding-left:10%;padding-right:10%;">


<div style = "background: rgba(255, 255, 255, 0.9);">
  <h2 style = "color: #7c795d; font-family: 'Trocchi', serif; font-size: 30px; font-weight: normal; line-height: 48px; margin: 0;text-align: center;">Directory</h2>
  <div align="center">
  
  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
 <select name="search" id="search" onchange="CheckSearch(this)">
				<?php
					echo '<option value="" hidden>Please select what to search</option>';
					if($search == "Name"){
						echo '<option value="Name" selected="selected">Name</option>';
					}
					else{
						echo '<option value="Name">Name</option>';
					}
					if($search == "Programme"){
						echo '<option value="Programme" selected="selected">Programme</option>';
					}
					else{
						echo '<option value="Programme">Programme</option>';
					}
					if($search == "Major"){
						echo '<option value="Major" selected="selected">Major</option>';
					}
					else{
						echo '<option value="Major">Major</option>';
					}
					if($search == "Year"){
						echo '<option value="Year" selected="selected">Intake Year</option>';
					}
					else{
						echo '<option value="Year">Intake Year</option>';
					}
					
					if($search == "All"){
						echo '<option value="All" selected="selected">Search All</option>';
					}
					
					else{
						echo '<option value="All">Search All</option>';
					}
					
				?>
               
            </select>
            <br><br>
            <input  type="text" name="name" id="name" size ="95" style="display: none" value="<?php echo $name;?>"> 

            <select name="programme" id="programme" style="display: none">
				<?php
					echo '<option value="" hidden>Please select a programme</option>';
					if($programme == "Bachelor"){
						echo '<option value="Bachelor" selected="selected">Bachelor</option>';
					}
					else{
						echo '<option value="Bachelor">Bachelor</option>';
					}
					if($programme == "Master"){
						echo '<option value="Master" selected="selected">Master</option>';
					}
					else{
						echo '<option value="Master">Master</option>';
					}
					if($programme == "Doctorate"){
						echo '<option value="Doctorate" selected="selected">Doctorate</option>';
					}
					else{
						echo '<option value="Doctorate">Doctorate</option>';
					}
				?>
               
            </select>

            <select name="major" id="major" style="display: none">
				<?php
					echo '<option value="" hidden>Please select a major</option>';
					if($major == "Artifical Intelligence"){
						echo '<option value="Artifical Intelligence" selected="selected">Artifical Intelligence</option>';
					}
					else{
						echo '<option value="Artifical Intelligence">Artifical Intelligence</option>';
					}
					if($major == "Computer System and Network"){
						echo '<option value="Computer System and Network" selected="selected">Computer System and Network</option>';
					}
					else{
						echo '<option value="Computer System and Network">Computer System and Network</option>';
					}
					if($major == "Information System"){
						echo '<option value="Information System" selected="selected">Information System</option>';
					}
					else{
						echo '<option value="Information System">Information System</option>';
					}
					if($major == "Software Engineering"){
						echo '<option value="Software Engineering" selected="selected">Software Engineering</option>';
					}
					else{
						echo '<option value="Software Engineering">Software Engineering</option>';
					}
					if($major == "Information Techonology"){
						echo '<option value="Information Techonology" selected="selected">Information Techonology</option>';
					}
					else{
						echo '<option value="Information Techonology">Information Techonology</option>';
					}
				?>
                
            </select>
			
			<select name="year" id="year" style="display: none">
				<option value="" hidden selected="selected">Please select a year</option>
				<?php
					for($currentYear = 2012; $currentYear > 1984; $currentYear--){
						$currentYear1 = $currentYear + 1;
						if($year == $currentYear){
							echo "<option value='$currentYear'/'$currentYear1' selected='selected'>$currentYear/$currentYear1</option>";
						}
						else{
							echo "<option value='$currentYear'/'$currentYear1'>$currentYear/$currentYear1</option>";
						}
					}
				
				?>
							
							
                
            </select>
			<br/>
			 <p style="text-align: center;"><input class="btn btn-primary" type="submit" name="submit" value="Search"/> <font face="verdana">

<br/>
<table style = "width:80%" border = "1">
  <col width = "10%">
  <col width = "30%">
  <col width = "25%">
  <col width = "15%">
  <col width = "20%">
  
  <tr>
  <td>
  <b>Number</b>
  </td>
    <td>
   <b>Full Name</b>
  </td>
    <td>
  <b>Programme</b>
  </td>
   <td>
  <b>Major</b>
  </td>
      <td>
  <b>Intake Year</b>
  </td>
 
  </tr>
  </tr>
  
  
<?php
include_once 'DBConnect.php';


if(isset($_POST['submit'])) 
{ 
  //  $name = $_POST['name'];
  
   
	
	if($search == "Name"){
		echo "Search Item: " .$_POST['name'];
		echo"</p>";
		$res = mysqli_query($conn, "SELECT userID, fullName, programme, major, graduateYear FROM user WHERE fullName LIKE '" . $name . "%' AND (status = '0') ORDER BY fullName ASC" );
	}
	else if($search == "Programme"){
		echo "Search Item: "  .$_POST['programme'];
		echo"</p>";
		$res = mysqli_query($conn, "SELECT userID, fullName, programme, major, graduateYear FROM user WHERE programme LIKE '" . $_POST["programme"] . "' AND (status = '0')  ORDER BY fullName ASC");
	}
	else if($search == "Major"){
		echo "Search Item: "  .$_POST['major'];
		echo"</p>";
		$res = mysqli_query($conn, "SELECT userID, fullName, programme, major, graduateYear FROM user WHERE major LIKE '" . $_POST["major"] . "' AND (status = '0') ORDER BY fullName ASC");
	}
	else if($search == "Year"){
		echo "Search Item: "  .$_POST['year'];
		echo"</p>";
		$res = mysqli_query($conn, "SELECT userID, fullName, programme, major, graduateYear FROM user WHERE graduateYear LIKE '" . $_POST["year"] . "' AND status = '0' ORDER BY fullName ASC");
	}
	
	else if($search == "All"){
		echo "Search Item: Search All";
		echo"</p>";
		$res = mysqli_query($conn, "SELECT userID, fullName, programme, major, graduateYear FROM user WHERE status = '0' ORDER BY fullName ASC");
	}
	
	$number = 1;
 if (isset($res) && mysqli_num_rows($res) > 0) {	
 
    while ($row = mysqli_fetch_array($res, MYSQL_NUM)) {

echo "  <tr>
	<tr><td>".$number.".</td> 
		<td> <a href='viewProfileAdmin.php?uid=".$row['0']."'> ".$row['1']." </a> </td>
		<td>".$row['2']."</td>
		<td>  ".$row['3']."  </td> 
		<td>  ".$row['4']."  </td> 
		
		</tr>";

$number = $number + 1;
	}
	//echo '</table>';
 }
 
 else {
	 echo"</p>";
echo "No Results Found.";	
echo"</p>";
	//echo '</table>';
	echo"</p>";
	
 }
}
?>

  <br/>   
  <br/> 
  
</table> 
 <br/>   
  <br/> 
 <p style="text-align: center;"><a class="btn btn-primary" href="admin.php"><font face="verdana"><b>Back to Home</b></a> </p>
 <br/>   
  <br/> 

 </form>
  
</div>
</div>
        </div>
      </div>

    </div>
    
<script>
	CheckSearch(document.getElementById("search"));
</script>
	
  <!-- jQuery -->


  <script src="js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="js/jquery.waypoints.min.js"></script>
  <!-- Superfish -->
  <script src="js/hoverIntent.js"></script>
  <script src="js/superfish.js"></script>

  <!-- Main JS (Do not remove) -->
  <script src="js/main.js"></script>

  </body>
</html>
