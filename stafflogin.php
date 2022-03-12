<?php
session_start();
?>

<!doctype html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/bootstrap/login-form-20/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Jun 2021 07:08:44 GMT -->
<head>
<title>Depotter|| Re-define lost hope</title>
<meta charset="utf-8">
 <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
        <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;display=swap" rel="stylesheet">
  <?php require("includes/bkheader.php");?> <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../../stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css1/A.style.css.pagespeed.cf.eQk9-CoeFP.css">
	<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    	 
</head>
<style>
    .zoomA {
 
  /* ease | ease-in | ease-out | linear */
  transition: transform ease-in-out 0.3s;
}
.zoomA:hover {
  transform: scale(1.2);
}
</style>
<body class="img js-fullheight" style="background-image:url(images/depoter.JPG);]">
<section class="ftco-section">
<div class="container-fluid" style="margin-top:-2%; border:1px solid #e7e7e7;
      min-width: 300px; 
       position:relative;
      box-shadow:0px 4px 6px #ecf5ff; 
      border-radius:15px 15px 15px 15px;  
      margin-bottom: 5%; 
      transition: transformopacity0.3s;width:90%">
<div class="row justify-content-center">
<div class="col-md-6 text-center mb-5">
     <div class="zoomA">
<h2 class="heading-section" style="margin-top:-11%"><img src="images/logo.png" width="20%" height=""></h2></div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-md-6 col-lg-4">
<div class="login-wrap p-0">
<h3 class="mb-4 text-center" style="font-weight:600;margin-top:-5%">STAFF LOGIN</h3>
 <h5 style="text-align:center;color:#fbceb5;margin-top:-5%">
                                                   <?php 
                                                   if(!empty($erromessage)){
                                                       echo $erromessage ;
                                                   }
                                                   ?>
                                                       
                                                       </h5>
 <form  data-toggle="validator" method="POST"  action="#">
                                                           <div class="form-group">
     <i class="fa fa-user "  style="margin-top:5%;position:absolute;margin-left:5%;color:black"></i>
                                                                <input type="text" class="form-control" style="text-indent: 23px;border-color: #f6f9f3;" placeholder="Username" class="form-control" name="Username" required>
                                                            </div>     
                                                            <div class="form-group">
                                                                  <i class="fa fa-lock" aria-hidden="true" style="margin-top:5%;position:absolute;margin-left:5%;color:black"></i>
                                                                <input id="password-field" type="password"  style="text-indent: 23px;border-color: #f6f9f3;" class="form-control" placeholder="Password" class="form-control" name="password" required>
                                                           <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" style="color:#fbceb5"></span>
                                                            </div>
                                                            
                                                        
                                                                <div class="form-group">
<input  type="submit" class="form-control btn btn-primary submit px-3" style="background-color:#e41f05" name='login' value="Sign In">
</div>
<div class="form-group d-md-flex">
<div class="w-50">
<label class="checkbox-wrap checkbox-primary">Remember Me
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</div>
<div class="w-50 text-md-right">
<a href="forgetting.php" style="color: #fff">Forgot Password?</a>
</div>
</div>
                                                        </form>
                                                        
                                                    </div>


<!--<p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
<div class="social d-flex text-center">
<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a-------->
</div>
</div>
</div>

</section>
<script src="js1/jquery.min.js"></script>
<script src="js1/popper.js%2bbootstrap.min.js%2bmain.js.pagespeed.jc.9eD6_Mep8S.js"></script><script>eval(mod_pagespeed_T07FyiNNgg);</script>
<script>eval(mod_pagespeed_zB8NXha7lA);</script>
<script>eval(mod_pagespeed_xfgCyuItiV);</script>
<script defer src="../../../../static.cloudflareinsights.com/beacon.min.js"
data-cf-beacon='{"rayId":"664c5db41fa2c500","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.5.2","si":10}'></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/bootstrap/login-form-20/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Jun 2021 07:08:50 GMT -->
</html>
