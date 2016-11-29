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
                document.getElementById("picture").width = "300";
                document.getElementById("picture").width = "300";
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

input[type="file"] {
   
    vertical-align: left;
	
	}




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

$getUID = $_GET['rid'];
$researchRes=mysqli_query($conn, "SELECT * FROM researchcollaboration WHERE researchID=".$getUID);
$researchRow=mysqli_fetch_array($researchRes);
?>
?>

        <span> Welcome back, admin - <?php echo $adminRow['userName']; ?></span>
          <span> <a href="Logout.php?logout=1">Log Out</a></span>
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
				  
				   <li><a href="admin.php">Manage Alumni</a>
                <ul class="fh5co-sub-menu">
					<li><a href="approvingAlumni.php">Approve Alumni</a></li>
                  <li><a href="directoryAdmin.php"> Alumni Directory</a></li>
                 <li><a target="_blank">Testimonial</a>
                      <ul class="fh5co-sub-menu">
                      <li><a href="testimonialListAdmin.php">Testimonial List</a></li>
                      <li><a href="approveTestimonial.php" >Approve Testimonial</a></li>
                      </ul>
                  <li><a target="_blank">Research Collaboration</a>
                <ul class="fh5co-sub-menu">
				   <li><a href="researchTitleListAdmin.php">Title List</a>
				   <li><a href="researchMyTitleListAdmin.php">Admin Title List</a>
				   <li><a href="researchCreateAdmin.php">Propose Title</a>
				   </li>
				    
                </ul>
                  <li><a href="admin.php">Generate Account</a></li>
                </ul>
              </li>
                   
                <li><a href="admin.php">Job Area</a>
                <ul class="fh5co-sub-menu">
                  <li><a href="joblist.php">View All Jobs</a></li>
                  <li><a href="joblistalumni.php">View My Job List</a></li>
                  <li><a href="createjob.php">Post Job Advertisement</a></li>
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
  <h2 style = "color: #7c795d; font-family: 'Trocchi', serif; font-size: 30px; font-weight: normal; line-height: 48px; margin: 0;text-align: center;">Research Title</h2>
  <div align="center">
  
  <form action="process_researchMyView.php" method="post" enctype="multipart/form-data">
   
		<p> <label><font color="purple"><b>*Title: </b></font></label>
			<input type="text" size="70" name="title" value = "<?php echo $researchRow['title'];?>"  ;/>
	   </p>
		
		<p> <label><font color="purple"><b>Description:  </b></font> </label>
			<textarea rows="10" cols="70" name="description" required /> <?php echo $researchRow['description'];?>  </textarea> </p>
		</p>
		
		<p> <label><font color="purple"><b>Attachment: </b></font> </label> 
		
		<?php 
			if ($researchRow['attachment'] == ""){
				echo "No Attachment	";
				
			}  
			else{
				echo "<a href= 'researchAttachment/".$researchRow['attachment']."'  download> Attachment </a>";
			}
		
		?>
		<input type="file" name="attachment">
			
        </p>
		
		<p>	<label><font color="purple"><b>*Contact Email: </b></font> </label> 
            <input type="email" name="contactEmail" size="70"  value = "<?php echo $researchRow['contactEmail'];?>"  ;/>
		</p>
		
		<p>	<label><font color="purple"><b>Contact number: </b></font> </label> 
            <input type="text" name="contactNumber" size="70" value = "<?php echo $researchRow['contactNum'];?>"  ;/>
		</p>
		
		<p>	<label><font color="purple"><b>*Cooperation: </b></font> </label> 
            <input type="text" name="cooperation" size="70"  value = "<?php echo $researchRow['cooperation'];?>"  ;/>
		</p>
		
		<p>  <label><font color="purple"><b>Author: </b></font></label>		
		<input type="text" size="70" name="author"  value = "<?php echo $researchRow['author'];?>" disabled ;/>
		</p>
		
		<p> <label><font color="purple"><b>Date:  </b></font> </label><input type="text" size="70" name="date" value = "<?php echo $researchRow['date'];?>" disabled ;  /></p>
		
		<INPUT TYPE="text" NAME="researchID"  value="<?php echo $researchRow['researchID']; ?>" style="display: none">
			
		 <input class="btn btn-primary" name="action"  type="submit" value="Submit"  /> <font face='verdana'> 
		<input class="btn btn-primary"    name="action"   type="submit"  value = "Delete" onclick= "return confirm('Are you sure want to delete this?')" /> <font face="verdana"></br>					
	<!--<input class="btn btn-primary"    name="action"   type="submit"  value = "Save" onclick= "return confirm('Are you sure want to save this? You still can edit after save then submit for admin approval.')" /> <font face="verdana"></br>
	-->
	<br/>
	<br/>
                    
               
             
                
                 </form>

<br> <p style="text-align: center;"><input class="btn btn-primary"value="Back" onclick="history.back(-1)" /><font face="verdana"></br>
 
 <br/>
  
</div>
</div>
        </div>
      </div>

    </div>
   

<?php
/*
include_once 'DBConnect.php';
 

//if ($_POST["content"] != ""){
	if(isset($_POST['action'])) {
	
		if ($_POST['action'] == 'Submit'){
	
			$sql = "UPDATE researchcollaboration SET title = '".$_POST["title"]."',  description = '".$_POST["description"]."', contactEmail = '".$_POST["description"]."',
					contactNum = ".$_POST["contactNumber"]."', cooperation = '".$_POST["cooperation"]."'
					WHERE researchID =" .$researchRow['researchID'];
			mysqli_query($conn, $sql) or die(mysql_error());
	
	
			//Attachment
			$fnm = $researchRow['researchID'];
			move_uploaded_file($_FILES["attachment"]["tmp_name"], __DIR__."/researchAttachment/" . $fnm);
			
			echo "<script type='text/javascript'>alert('You have successfully edited your title.')</script>";
		}
	
	}
	
	else {
		$sql = "DELETE  FROM researchcollaboration WHERE researchID =" .$researchRow['researchID'];
		mysqli_query($conn, $sql) or die(mysql_error());
	}
	
*/

?>
   

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