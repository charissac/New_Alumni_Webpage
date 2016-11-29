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
                name.value = "";
                
                var programme = document.getElementById("programme");
                programme.style.display = "none";
                programme.value = "";
                
                var major = document.getElementById("major");
                major.style.display = "none";
                major.value = "";
				
				var year = document.getElementById("year");
                year.style.display = "none";
                year.value = "";
                
                //depends on index selected, show the desired one
                if (val.selectedIndex === 0){
                     document.getElementById("name").style.display = "block";
                }else if(val.selectedIndex === 1){
                     document.getElementById("programme").style.display = "block";
                }else if(val.selectedIndex === 2){                    
                     document.getElementById("major").style.display = "block";
                }
				else if(val.selectedIndex === 3) {                    
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
    

    <div class="fh5co-hero">
      <div class="fh5co-overlay" style="height:100%;z-index:0;"></div>
      <div style="background-image: url(images/background.jpg); height:100%;">
        <div class="desc animate-box" style = "padding-top: 200px;padding-left:10%;padding-right:10%;">
          


<div style = "background: rgba(255, 255, 255, 0.9);">
  <h2 style = "color: #7c795d; font-family: 'Trocchi', serif; font-size: 30px; font-weight: normal; line-height: 48px; margin: 0;text-align: center;">Directory</h2>
  <div align="center">
  
 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 <select name="search" id="search" onchange="CheckSearch(this)">
                <option value="Name">Name</option>
                <option value="Programme">Programme</option>
                <option value="Major">Major</option>
				<option value="Year">Graduate Year</option>
				<option value="All">Search All</option>
                <option value="" hidden selected>Please select what to search</option>
            </select>
            <br><br>
            <input  type="text" name="name" id="name" size ="95" style="display: none" > 

            <select name="programme" id="programme" style="display: none">
                <option value="Bachelor">Bachelor</option>
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
			
			<select name="year" id="year" style="display: none">
							<option value="2016">2016</option>
							 <option value="2015">2015</option>
							 <option value="2014">2014</option>
							 <option value="2013">2013</option>
							 <option value="2012">2012</option>
							 <option value="2011">2011</option>
							 <option value="2010">2010</option>
							 <option value="2009">2009</option>
							 <option value="2008">2008</option>
							 <option value="2007">2007</option>
							 <option value="2006">2006</option>
							 <option value="2005">2005</option>
							 <option value="2004">2004</option>
							 <option value="2006">2006</option>
							 <option value="2003">2003</option>
							 <option value="2002">2002</option>
							 <option value="2001">2001</option>
							 <option value="2000">2000</option>
							 <option value="1999">1999</option>
							 <option value="1998">1998</option>
							 <option value="1997">1997</option>
							 <option value="1996">1996</option>
							 <option value="1995">1995</option>
							 <option value="1994">1994</option>
							 <option value="1993">1993</option>
							 <option value="1992">1992</option>
							 <option value="1991">1991</option>
							 <option value="1990">1990</option>
							 <option value="1989">1989</option>
							 <option value="1988">1988</option>
							 <option value="1987">1987</option>
							 <option value="1986">1986</option>
							 <option value="1985">1985</option>
                <option value="" hidden selected>Please select a year</option>
            </select>
			<br/>
   <input type="submit" name="submit" value="Search"><br/>

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
  <b>Graduate Year</b>
  </td>
 
  </tr>
  </tr>
  
  
<?php
include_once 'DBConnect.php';


if(isset($_POST['submit'])) 
{ 
    $name = $_POST['name'];
  
   
	
	if (isset($_POST['name']) && $_POST['name']!="") {
    echo "Search Item: " .$_POST['name'];
	echo"</p>";
    if (preg_match("/^[  a-zA-Z]+/", $_POST['name'])) {
        $res = mysqli_query($conn, "SELECT userID, fullName, programme, major, graduateYear FROM user WHERE fullName LIKE '" . $name . "%' AND status = '0' ORDER BY fullName ASC" );

        //userRow=mysqli_fetch_array($res);
    }
	}
	else if (isset($_POST['programme']) && $_POST['programme']!="") {
   echo "Search Item: "  .$_POST['programme'];
   echo"</p>";
    $res = mysqli_query($conn, "SELECT userID, fullName, programme, major, graduateYear FROM user WHERE programme LIKE '" . $_POST["programme"] . "' AND status = '0' ORDER BY fullName ASC");
	
	}
	
	 else if (isset($_POST['major']) && $_POST['major']!="") {
    echo "Search Item: "  .$_POST['major'];
	echo"</p>";
    $res = mysqli_query($conn, "SELECT userID, fullName, programme, major, graduateYear FROM user WHERE major LIKE '" . $_POST["major"] . "' AND status = '0' ORDER BY fullName ASC");
	 }
	 
	 else if (isset($_POST['year']) && $_POST['year']!="") {
    echo "Search Item: "  .$_POST['year'];
	echo"</p>";
    $res = mysqli_query($conn, "SELECT userID, fullName, programme, major, graduateYear FROM user WHERE graduateYear LIKE '" . $_POST["year"] . "' AND status = '0' ORDER BY fullName ASC");
	 }
	 
	  else if ($_POST['search']=="All") {
    echo "Search Item: Search All "; 
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
 }
}
?>
</table>
  <br/>   
  <br/>   
   <b> <a href="admin.php">Back to Home</a> </b>
  </form>
  
</div>
</div>
        </div>
      </div>

    </div>
    

	
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
