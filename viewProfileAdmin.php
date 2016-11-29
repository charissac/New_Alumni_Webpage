<?php
session_start();
?>

<!DOCTYPE html>

<script type="text/javascript">
  function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                document.getElementById("picture").src = e.target.result;
                document.getElementById("picture").width = "200";
                document.getElementById("picture").width = "200";
            };

                reader.readAsDataURL(input.files[0]);
            }
        }
		
		function checkindustry(name){
  if(name=='Others')document.getElementById('div2').innerHTML=' <input type="text" name="industry" />';
  else document.getElementById('div2').innerHTML='';
}
	
 </script>
 
 <style type="text/css">
   label {
	   float:left;
width:25%;
display:inline-block;	
}

#wgtmsr{
 width:200px;   
}

   #wgtmsr option{
  width:200px;   
}

    </style>


<!DOCTYPE html>
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

$getUID = $_GET['uid'];
$res=mysqli_query($conn, "SELECT * FROM user WHERE userID=".$getUID);
$userRow=mysqli_fetch_array($res);

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
  <h2 style = "color: #7c795d; font-family: 'Trocchi', serif; font-size: 30px; font-weight: normal; line-height: 48px; margin: 0;text-align: center;">Profile</h2>
  <div align="center">
  
   


                      
 <?php
                    $image = "uploads/". $userRow['profilepicture'];
					
					 if ($userRow['profilepicture'] !=null){
					$image1 = $image;
		} 
		else{
			
			$image1 = "uploads/noprofilepicture.png";
		}		
		?>
		
                
		<img id="picture" src=<?= $image1 ?> alt="your image" height=300 width=300 />	</p>	
		
							
                      
 <p>  <label><font color="purple"><b>Name: </b></font></label>
	   <input type="text" size="70" name="fullname" value="<?php echo $userRow['fullName']; ?> " disabled ;/>
	   </p>
		<p> <label><font color="purple"><b>Email:  </b></font> </label> 
		<input type="text" size="70" name="email" value="<?php echo $userRow['email']; ?> " disabled ;/>
		</p>
		<p> <label><font color="purple"><b>Programme:  </b></font> </label>
		<input type="text" size="70" name="programme" value="<?php echo $userRow['programme']; ?>  " disabled ;/>
		   </p>
		<p><label> <font color="purple"><b>Major:  </b></font> </label>
		<input type="text" size="70" name="major" value="<?php echo $userRow['major']; ?>  " disabled ;/>
		</p>
		<p><label><font color="purple"><b>Graduate Year:  </b></font> </label>
		<input type="text" size="70" name="graduateYear" value="<?php echo $userRow['graduateYear']; ?> " disabled ;/>
		</p>
		<p><label><font color="purple"><b>Matric Number:  </b></font> </label>
		<input type="text" size="70" name="matricNum" value="<?php echo $userRow['matricNum']; ?> " disabled ;/>
		</p>
		<p><label><font color="purple"><b>Phone Number:  </b></font> </label> <input type="text" size="70" name="phonenumber" value="<?php echo $userRow['phoneNum']; ?>" disabled /></p>
		<p> <label><font color="purple"><b>Address:  </b></font> </label> <textarea rows="3" cols="70" name="address" disabled /> <?php echo $userRow['address'];?> </textarea> </p>
		<p> <label><font color="purple"><b>Occupation:  </b></font> </label><input type="text" size="70" name="occupation" value="<?php echo $userRow['occupation']; ?>" disabled /></p>
		
             
                
                 <br> <p style="text-align: center;"><input class="btn btn-primary"value="Back" onclick="history.back(-1)" /><font face="verdana"></br>


 
 
  
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
