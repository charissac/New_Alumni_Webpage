<?php
session_start();
include_once 'DBConnect.php';


if(isset($_POST['btn-login']))
{
 $email = mysqli_real_escape_string($conn, $_POST['email']);
 $upass = mysqli_real_escape_string($conn, $_POST['pass']);
 $res=mysqli_query($conn, "SELECT * FROM admin WHERE email='$email'");
 $row=mysqli_fetch_array($res);
 if($row['password']==($upass))
 {
  $_SESSION['admin'] = $row['adminID'];
    $_SESSION['adminUserName'] = $row['userName'];
  header("Location: admin.php");
 }
 else
 {
  ?>
        <script>alert('wrong details');</script>
        <?php
 }
 
}


?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login as Admin</title>
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

    <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="favicon.ico">

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
          <span> <a href="#"><i>@</i> info@freehtml5.co</a></span>
          <span> <a href="tel://+12345678910"><i class="icon-mobile3"></i> 123 4567 8910</a></span>
        </div>
      </div>
      <!-- end:top -->
      <header id="fh5co-header-section">
        <div class="container">
          <div class="nav-header">
            <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
            <h1 id="fh5co-logo"><a href="index.html">Render</a></h1>
            <!-- START #fh5co-menu-wrap -->
          <nav id="fh5co-menu-wrap" role="navigation">
            <ul class="sf-menu" id="fh5co-primary-menu">
              <li class="active">
                <a href="loginadmin.php">Login</a>
              </li>
            	<li><a href="register.php">Sign Up Here</a></li>
              <li><a href="homepage.php">Home</a></li>
            </ul>
          </nav>
          </div>
        </div>
      </header>
      
    </div>
    

    <div class="fh5co-hero">
      <div class="fh5co-overlay"></div>
      <div class="fh5co-cover text-center" style="background-image: url(images/background.jpg);">
        <div class="desc animate-box">
<h2>Login as Admin</h2>
<form method="post">
<table align="center" width="0%" border="0">
<tr>
<td><font face="verdana"><input type="text" style="color: #C0C0C0;" name="email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><font face="verdana"><input type="password" style="color: #C0C0C0;" name="pass" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><font face="verdana"><button type="submit" class="btn btn-primary"  name="btn-login"><font face="verdana">Sign In</button></td>
</tr>
<td><p><font face="verdana"><a href="signIn.php">Log in as alumni</a></font></td></p>


</table>
</form>
        </div>
      </div>

    </div>
    <!-- end:header-top -->
    <div id="fh5co-work-section">
      <div class="container">
        <div class="row">
          <div class="col-md-3 animate-box">
            <h3 class="heading-section">Selected Work</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and </p>
          </div>
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <div class="fh5co-grid animate-box" style="background-image: url(images/work-2.jpg);">
                  <a class="image-popup text-center" href="#">
                    <div class="prod-title">
                      <h3>Don’t Just Stand There</h3>
                      <span>Illustration, Print</span>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-8 col-sm-8">
                <div class="fh5co-grid animate-box" style="background-image: url(images/work-3.jpg);">
                  <a class="image-popup text-center" href="#">
                    <div class="prod-title">
                      <h3>Don’t Just Stand There</h3>
                      <span>Illustration, Print</span>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-8 col-sm-8">
                <div class="fh5co-grid animate-box" style="background-image: url(images/work-4.jpg);">
                  <a class="image-popup text-center" href="#">
                    <div class="prod-title">
                      <h3>Don’t Just Stand There</h3>
                      <span>Illustration, Print</span>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="fh5co-grid animate-box" style="background-image: url(images/work-5.jpg);">
                  <a class="image-popup text-center" href="#">
                    <div class="prod-title">
                      <h3>Don’t Just Stand There</h3>
                      <span>Illustration, Print</span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="fh5co-content-section">
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
              <p>Far far away, behind the word mountains, far f`rom the countries Vokalia and Consonantia, there live the blind texts. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. <br><a href="#">Know More About Us</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- fh5co-content-section -->
    <div id="fh5co-blog-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-12 animate-box">
            <h3 class="heading-section">Latest from Blog</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and </p>
          </div>
          <div class="col-lg-9 col-sm-12">
            <div class="row">
              <div class="col-lg-4 col-md-4">
                <div class="fh5co-blog animate-box" style="background-image: url(images/blog-1.jpg);">
                  <a class="image-popup" href="#">
                    <div class="prod-title">
                      <span>Illustration</span>
                      <h3>45 Minimal Worksspace Rooms for Web Savvys</h3>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                  </a> 
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="fh5co-blog animate-box" style="background-image: url(images/blog-2.jpg);">
                  <a class="image-popup" href="#">
                    <div class="prod-title">
                      <span>Illustration</span>
                      <h3>Don’t Just Stand There</h3>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                  </a> 
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="fh5co-blog animate-box" style="background-image: url(images/blog-3.jpg);">
                  <a class="image-popup" href="#">
                    <div class="prod-title">
                      <span>Illustration</span>
                      <h3>Don’t Just Stand There</h3>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                  </a>
                </div>
              </div>
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