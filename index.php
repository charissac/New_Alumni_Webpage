
<!DOCTYPE html>

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
      <!-- end:top -->
      <header id="fh5co-header-section">
        <div class="container">
          <div class="nav-header">
            <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
            <h1 id="fh5co-logo" ><a href="index.html" style="color:#800080">FSKTM Alumni</a></h1>
            <!-- START #fh5co-menu-wrap -->
 <nav id="fh5co-menu-wrap" role="navigation">
            <ul class="sf-menu" id="fh5co-primary-menu">
              <li><a href="signIn.php">Sign In</a></li>
              <li><a href="register.php">Sign Up Here</a></li>
              <li><a href="loginadmin.php">Login as admin</a></li>
            </ul>
          </nav>
          </div>
        </div>
      </header>
      
    </div>
    

    <div class="fh5co-hero">
      <div class="fh5co-overlay" style="height:750px;z-index:0;"></div>
      <div style="background-image: url(images/background.jpg); height:750px;">
        <div class="desc animate-box" style = "padding-top: 200px;padding-left:10%;padding-right:10%;">
          



<?php

mysql_connect("localhost", "root", "") or
    die("Could not connect: " . mysql_error());
mysql_select_db("alumnidatabase");

$result = mysql_query("SELECT * FROM photo where status = 'Y'");

while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
echo "<img class='mySlides' height='535px' width='100%' src= '../photo/". $row['1'] . "'/>";

}

?>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
 </script>

        </div>
      </div>

    </div>
    <!-- end:header-top -->
    <div id="fh5co-work-section">
       <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-12 animate-box">
            <h3 class="heading-section">Latest News And Announcements</h3>
            <p><a href="customViewNewsList.php">View All News</a></p>
          </div>
          <div class="col-lg-9 col-sm-12">
            <div class="row">
              <div class="col-lg-4 col-md-4">

<?php

include_once 'DBConnect.php';


$res=mysqli_query($conn, "SELECT c.*,RPAD(c.details,150,'. ') rpadString
FROM
   (
      SELECT @row := @row + 1 AS row, pi.*
  FROM news pi, (SELECT @row:=0) x order by pi.create_date desc
   ) c
where c.row = 1
;");




$newRow=mysqli_fetch_array($res);
?>

<?php


if(!empty($newRow)){
      echo"          <div class='fh5co-blog animate-box' style='background-image: url(../picture/".$newRow[picture].");'>
                  <a class='image-popup' href='customViewNews.php?uid=".$newRow[newsID]."'>
                    <div class='prod-title'>
                      <span>".$newRow[create_date]."</span>
                  <h3>".$newRow[title]."</h3>
                      <p>".$newRow[rpadString]."</p>
                    </div>
                  </a> 
                </div>";
}
    else{
echo"          <div class='fh5co-blog animate-box' style='background-image: url(../picture/".$newRow[picture].");'>
                  <a class='image-popup' href='customViewNews.php?uid=".$newRow[newsID]."'>
                    <div class='prod-title'>
                      <span></span>
                  <h3></h3>
                      <p>Blank</p>
                    </div>
                  </a> 
                </div>";

    }
?>


              </div>
              <div class="col-lg-4 col-md-4">
                <?php

include_once 'DBConnect.php';


$res=mysqli_query($conn, "SELECT c.*,RPAD(c.details,150,'. ') rpadString
FROM
   (
      SELECT @row := @row + 1 AS row, pi.*
  FROM news pi, (SELECT @row:=0) x order by pi.create_date desc
   ) c
where c.row = 2
;");




$newRow=mysqli_fetch_array($res);
?>

<?php

if(!empty($newRow)){
      echo"          <div class='fh5co-blog animate-box' style='background-image: url(../picture/".$newRow[picture].");'>
                  <a class='image-popup' href='customViewNews.php?uid=".$newRow[newsID]."'>
                    <div class='prod-title'>
                      <span>".$newRow[create_date]."</span>
                  <h3>".$newRow[title]."</h3>
                      <p>".$newRow[rpadString]."</p>
                    </div>
                  </a> 
                </div>";

    }
        else{
echo"          <div class='fh5co-blog animate-box' style='background-image: url(../picture/".$newRow[picture].");'>
                  <a class='image-popup' href='customViewNews.php?uid=".$newRow[newsID]."'>
                    <div class='prod-title'>
                      <span></span>
                  <h3></h3>
                      <p>Blank</p>
                    </div>
                  </a> 
                </div>";

    }
?>
              </div>
              <div class="col-lg-4 col-md-4">
                <?php

include_once 'DBConnect.php';


$res=mysqli_query($conn, "SELECT c.*,RPAD(c.details,150,'. ') rpadString
FROM
   (
      SELECT @row := @row + 1 AS row, pi.*
  FROM news pi, (SELECT @row:=0) x order by pi.create_date desc
   ) c
where c.row = 3
;");




$newRow=mysqli_fetch_array($res);
?>

<?php

if(!empty($newRow)){
      echo"          <div class='fh5co-blog animate-box' style='background-image: url(../picture/".$newRow[picture].");'>
                  <a class='image-popup' href='customViewNews.php?uid=".$newRow[newsID]."'>
                    <div class='prod-title'>
                      <span>".$newRow[create_date]."</span>
                  <h3>".$newRow[title]."</h3>
                      <p>".$newRow[rpadString]."</p>
                    </div>
                  </a> 
                </div>";

    }
    else{
echo"          <div class='fh5co-blog animate-box' style='background-image: url(../picture/".$newRow[picture].");'>
                  <a class='image-popup' href='customViewNews.php?uid=".$newRow[newsID]."'>
                    <div class='prod-title'>
                      <span></span>
                  <h3></h3>
                      <p>Blank</p>
                    </div>
                  </a> 
                </div>";

    }
?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



<div id="fh5co-work-section">
       <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-12 animate-box">
            <h3 class="heading-section">Latest Events</h3>
 <p><a href ="#">View All Events</a></p>
          </div>
          <div class="col-lg-9 col-sm-12">
            <div class="row">
              <div class="col-lg-4 col-md-4">
                                <?php

include_once 'DBConnect.php';


$res=mysqli_query($conn, "SELECT c.*,RPAD(c.further_info,150,'. ') rpadString
FROM
   (
      SELECT @row := @row + 1 AS row, pi.*
  FROM events pi, (SELECT @row:=0) x order by pi.create_date desc
   ) c
where c.row = 3
;");




$newRow=mysqli_fetch_array($res);
?>

<?php
      echo"          <div class='fh5co-blog animate-box' style='background-image: url(images/blog-1.jpg);'>
                  <a class='image-popup' href='#'>
                    <div class='prod-title'>
                      <span>Date Start : ".$newRow[start_date]." End : ".$newRow[end_date]."</span>
                  <h3>".$newRow[title]."</h3>
                      <p>".$newRow[rpadString]."</p>
                    </div>
                  </a> 
                </div>"
?>
              </div>
              <div class="col-lg-4 col-md-4">
                                               <?php

include_once 'DBConnect.php';


$res=mysqli_query($conn, "SELECT c.*,RPAD(c.further_info,150,'. ') rpadString
FROM
   (
      SELECT @row := @row + 1 AS row, pi.*
  FROM events pi, (SELECT @row:=0) x order by pi.create_date desc
   ) c
where c.row = 2
;");




$newRow=mysqli_fetch_array($res);
?>

<?php
      echo"          <div class='fh5co-blog animate-box' style='background-image: url(images/blog-2.jpg);'>
                  <a class='image-popup' href='#'>
                    <div class='prod-title'>
                      <span>Date Start : ".$newRow[start_date]." End : ".$newRow[end_date]."</span>
                  <h3>".$newRow[title]."</h3>
                      <p>".$newRow[rpadString]."</p>
                    </div>
                  </a> 
                </div>"
?>
              </div>
              <div class="col-lg-4 col-md-4">
                                               <?php

include_once 'DBConnect.php';


$res=mysqli_query($conn, "SELECT c.*,RPAD(c.further_info,150,'. ') rpadString
FROM
   (
      SELECT @row := @row + 1 AS row, pi.*
  FROM events pi, (SELECT @row:=0) x order by pi.create_date desc
   ) c
where c.row = 3
;");




$newRow=mysqli_fetch_array($res);
?>

<?php
      echo"          <div class='fh5co-blog animate-box' style='background-image: url(images/blog-3.jpg);'>
                  <a class='image-popup' href='#'>
                    <div class='prod-title'>
                      <span>Date Start : ".$newRow[start_date]." End : ".$newRow[end_date]."</span>
                  <h3>".$newRow[title]."</h3>
                      <p>".$newRow[rpadString]."</p>
                    </div>
                  </a> 
                </div>"
?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- fh5co-work-section -->


    </div>

    <div id="fh5co-blog-section">
            <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="fh5co-testimonial text-center animate-box">
              <h2>What Others Think</h2>
              <figure>
                <img src="images/user-1.jpg" alt="user">
              </figure>
              <blockquote>
                <p>“Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after a while.”</p>
              </blockquote>
              <span>Steve Jobs, Apple Inc.</span>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="fh5co-about-us animate-box">
              <h2 class="text-center">About Us</h2>
              <img src="images/about-image.jpg" alt="About Us">
              <p>FSKTM Alumni website provides alumni a platform to communicate each other and with faculty. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- fh5co-blog-section -->
    <footer>
      <div id="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p>Copyright 2016 Free Html5 <a href="#">Render</a>. All Rights Reserved. <br>Made with by <a href="http://freehtml5.co/">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/">Unsplash</a></p>
            </div>
            <div class="col-md-6">
              <ul class="footer-menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
  

  </div>
  <!-- END fh5co-page -->

  </div>
  <!-- END fh5co-wrapper -->

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

