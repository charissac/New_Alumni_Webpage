<?php

//session_start();
//if(isset($_SESSION['user'])!="")
//{
 //header("Location: home.php");
//d}

    if(empty($_POST)) { exit; }
    
    $errors = array();
	
	//Email validation
	//if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
	//$errors[]="Email is a not valid";
//}
    
    //Password validation 
    
    if($_POST["password"] != $_POST["checkpassword"])
        $errors[] = "Password is not the same.";
    if(strlen($_POST["password"]) < 5)
        $errors[] = "Password must be more than 5 characters.";
	
	//Programme validation
	if(!isset($_POST['programme'])) 
{
	$errorMessage .= "<li>You did not select your programme!</li>";
}
   //Major Validation
   if(!isset($_POST['major'])) 
{
	$errorMessage .= "<li>You did not select your major!</li>";
	
}
    
    // Profile photo validation 
     if(file_exists($_FILES["profilephoto"]['tmp_name']) || is_uploaded_file($_FILES["profilephoto"]['tmp_name']))
	 {	 
   if($_FILES["profilephoto"]["error"] != 0)
        $errors[] = "Error uploading file. Please try again.";
    $ext = strtolower(substr($_FILES["profilephoto"]["name"], -4));
    if($ext != ".jpg")
      $errors[] = "Upload jpg only";
  }
        
    //Show errors
    
    if( ! empty($errors))
    {
        echo "<b>Error(s):</b><hr />";
        foreach($errors as $e) {
            echo "<li>".$e."</li>";
        }
        exit;
    }
	
	//Photo
//	if(empty($_FILES["profilephoto"]["name"])){
	//	$fnm = null;
	//}
	//else{
		
    //$fnm = time() . "_" . $_FILES["profilephoto"]["name"];
	//	move_uploaded_file($_FILES["profilephoto"]["tmp_name"], __DIR__."/uploads/" . $fnm);
	//move_uploaded_file($_FILES["profilephoto"]["tmp_name"],"/uploads/".$fnm);
    //move_uploaded_file($_FILES["profilephoto"]["tmp_name"], "uploads/".$fnm);
	
    //}
    require_once("DBConnect.php");
	
	$check="SELECT * FROM user WHERE email = '".$_POST["email"]."'";
$rs = mysqli_query($conn,$check);
$data = mysqli_fetch_array($rs, MYSQLI_NUM);
if($data[0] > 1) {
     echo "<script type='text/javascript'>alert('User already exists.'); window.history.back();</script>";
	//header("Location: index.php");
}	
	
	else{
	
    $q = "insert into user(password, email, userName, programme, major, graduateYear, matricNum, phoneNum, address, fullName, occupation,status) values('".$_POST["password"]."','".$_POST["email"]."','".$_POST["username"]."','".$_POST["programme"]."', '".$_POST["major"]."', '".$_POST["graduateyear"]."', '".$_POST["matricnumber"]."','".$_POST["phonenumber"]."', '".$_POST["address"]."', '".$_POST["fullname"]."', '".$_POST["occupation"]."','1')";
    mysqli_query($conn, $q) or die(mysql_error());
	
	
    session_start();
    $res =  mysqli_insert_id ($conn);
	
	//$res=mysqli_query($conn, "SELECT * FROM user WHERE userID=".$_SESSION['user']);
	//$userRow=mysqli_fetch_array($res);
	
	//Photo
	if(empty($_FILES["profilephoto"]["name"])){
		$fnm = null;
	}
	else{
		
    $fnm = $res;
		move_uploaded_file($_FILES["profilephoto"]["tmp_name"], __DIR__."/uploads/" . $fnm);
	//move_uploaded_file($_FILES["profilephoto"]["tmp_name"],"/uploads/".$fnm);
    //move_uploaded_file($_FILES["profilephoto"]["tmp_name"], "uploads/".$fnm);
	
    }
	
	$pic = "UPDATE user SET profilepicture = '".$fnm."'
               WHERE userID =" .$res;
	 mysqli_query($conn, $pic) or die(mysql_error());
	 
	 //File
	  $evidence = $res;
		move_uploaded_file($_FILES["evidence"]["tmp_name"], __DIR__."/evidence/" .  $evidence);
		
		$evidence1 = "UPDATE user SET evidence = '".$evidence."'
               WHERE userID =" .$res;
	 mysqli_query($conn, $evidence1) or die(mysql_error());
	 
	 
	clearstatcache();
	 echo "<script type='text/javascript'>alert('Registration Successful! Please wait for approval of admin to verify your application.')</script>";
	 echo "<script>setTimeout(\"location.href = 'index.php';\");</script>";
   // header("Location: index.php");
	}

	
	
?>



