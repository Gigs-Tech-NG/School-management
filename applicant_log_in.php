<?php 
session_start();
?><!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 05:35:23 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Depotter | Applicant dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">
    <!-- Normalize csss -->
    <link rel="stylesheet" href="csss/normalize.css">
    <!-- Main csss -->
    <link rel="stylesheet" href="csss/main.css">
    <!-- Bootstrap csss -->
    <link rel="stylesheet" href="csss/bootstrap.min.css">
    <!-- Fontawesome csss -->
    <link rel="stylesheet" href="csss/all.min.css">
    <!-- Flaticon csss -->
    <link rel="stylesheet" href="fonts/flaticon.css">
    <!-- Animate csss -->
    <link rel="stylesheet" href="csss/animate.min.css">
    <!-- Custom csss -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernize jsss -->
    <script src="jsss/modernizr-3.6.0.min.js"></script>
</head>

<body>
    <!-- Preloader Start Here -->
    <!---div id="preloader"></div--->
    <!-- Preloader End Here -->
    <!-- Login Page Start Here -->
    <div class="login-page-wrap">
        <div class="login-page-content">
            <div class="login-box">
                <div class="item-logo">
                    <img src="images/depotter_logo.png" alt="logo">
                </div>
       
    <?php
    $erromessage="";
    include"config.php";
    if (isset($_POST['submit']))  {

$email = mysqli_real_escape_string($connection,$_POST['email']);
   
   $select_querry="SELECT * FROM application
     WHERE email='$email'";
   $result=mysqli_query($connection,$select_querry);
   
   if(!$result){
	   die("failed").mysqli_connect_error();
   }
   while($row= mysqli_fetch_array($result)){
	   $emailNo=mysqli_real_escape_string($connection,$row['email']);
		$ids=$row['appId'];
   }if($email == $emailNo){
	   $_SESSION['applicant']="true";
	    $_SESSION['email']=$email;
	   
  echo "<script> location.href='applicantdashboard.php'; </script>";
   }
   else{
	 echo "UNAUTHORISED";

   }
   
   
}

if(isset($_SESSION['email'])){
     echo "<script> location.href='applicantdashboard.php'; </script>";
} 
?>
 
                <form action="" method="POST"class="login-form">
                    <div class="form-group">
                        <label>E-Mail</label>
                        <input type="text" placeholder="Enter email" name="email" class="form-control" required=""/>
                        <i class="far fa-envelope"></i>
                    </div>
                    <!--div class="form-group">
                        <label>Password</label>
                        <input type="text" placeholder="Enter password" class="form-control">
                        <i class="fas fa-lock"></i>
                    </div-->
                    <div class="form-group d-flex align-items-center justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember-me">
                            <label for="remember-me" class="form-check-label">Remember Me</label>
                        </div>
                        <!--a href="#" class="forgot-btn">Forgot Password?</a-->
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="login-btn" name="submit">Login</button>
                    </div>
                </form>
                <!--div class="login-social">
                    <p>or sign in with</p>
                    <ul>
                        <li><a href="#" class="bg-fb"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="bg-twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="bg-gplus"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#" class="bg-git"><i class="fab fa-github"></i></a></li>
                    </ul>
                </div-->
            </div>
            <!--div class="sign-up">Don't have an account ? <a href="#">Signup now!</a></div-->
        </div>
    </div>
    <!-- Login Page End Here -->
    <!-- jquery-->
    <script src="jsss/jquery-3.3.1.min.js"></script>
    <!-- Plugins jsss -->
    <script src="jsss/plugins.js"></script>
    <!-- Popper jsss -->
    <script src="jsss/popper.min.js"></script>
    <!-- Bootstrap jsss -->
    <script src="jsss/bootstrap.min.js"></script>
    <!-- Scroll Up jsss -->
    <script src="jsss/jquery.scrollUp.min.js"></script>
    <!-- Custom jsss -->
    <script src="jsss/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 05:35:23 GMT -->
</html>