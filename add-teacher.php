<?php
session_start();
    ?>
<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from keenitsolutions.com/products/html/edulearn/edulearn-demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Jun 2021 10:30:43 GMT -->
<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>De Potter College || Re-defining lost hope</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon --> <link rel="stylesheet" href="csss/select2.min.css">
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
        <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">
         <link rel="stylesheet" type="text/css" href="css41/DT_bootstrap.css">
          <?php  require("includes/studentMenu.php");?><script src="jsss/jquery.js" type="text/javascript"></script>
	    <?php  require("includes/studenthead.php");?><script src="jsss/bootstrap.js" type="text/javascript"></script>
	<script type="text/javascript" charset="utf-8" language="javascript" src="jsss/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf-8" language="javascript" src="jsss/DT_bootstrap.js"></script>
    <!-- Normalize csss -->
   </head><body>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
         <!-- Header Menu Area Start Here -->
        <?php include "headers/admin_header.php";?>
       
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
           <?php  include"side_bars/admin_sidebar.php"; ?>
            <!-- Sidebar Area End Here --> 
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Teachers</h3>
                    <ul>
                        <li>
                            <a href="administration.php">Home</a>
                        </li>
                        <li>Add New Staff</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add New Teacher Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add New Staff</h3>
                                <h4 style="color:red"><?php
                                echo validate();
                                
                                ?></h4>
                                
                            </div>
                           <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" 
                                data-toggle="dropdown" aria-expanded="false">...</a>
        
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <form class="new-added-form" method="post" action="">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Full Name *</label>
                                    <input type="text" placeholder=""  name="fullname" class="form-control" required>
                                </div>
                                  <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>E-Mail *</label>
                                    <input type="email" placeholder="" name="email" class="form-control" required>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Phone *</label>
                                    <input type="text" placeholder="" name="phone" class="form-control" required>
                                </div>
                                <!---<div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Gender *</label>
                                    <select class="select2">
                                        <option value="">Please Select Gender *</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                        <option value="3">Others</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Username</label>
                                    <input type="text" placeholder=""name="username" class="form-control" required>
                                </div>
                               <!--- <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>password</label>
                                    <input type="password" placeholder=""  name="password" class="form-control" required>
                                </div>
                                <!---<div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Blood Group *</label>
                                    <select class="select2">
                                        <option value="">Please Select Group *</option>
                                        <option value="1">A+</option>
                                        <option value="2">A-</option>
                                        <option value="3">B+</option>
                                        <option value="3">B-</option>
                                        <option value="3">O+</option>
                                        <option value="3">O-</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Religion *</label>
                                    <select class="select2">
                                        <option value="">Please Select Religion *</option>
                                        <option value="1">Islam</option>
                                        <option value="2">Hindu</option>
                                        <option value="3">Christian</option>
                                        <option value="3">Buddish</option>
                                        <option value="3">Others</option>
                                    </select>
                                </div--->
                              
                               <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Rank*</label>
                                    <select class="select2" name="rank" required>
                                        <option value="">Please Select Rank *</option>
                                        <option>admin</option>
                                        <option>burser</option>
                                        <option>lecturer</option>
                                        <option>ict</option>
                                        <option>libarian</option>
                                       
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Username *</label>
                                    <input type="text" placeholder=""  name="username" class="form-control" required>
                                </div>
                                <!-----<div class="col-md-6 d-none d-xl-block">
                                    
                                </div>
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Short BIO</label>
                                    <textarea class="textarea form-control" name="message" id="form-message" cols="10" rows="9"></textarea>
                                </div--->
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Password *</label>
                                    <input type="text" placeholder=""  name="password" class="form-control" required>
                                </div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" name="create" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Submit</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Add New Teacher Area End Here -->
               <footer class="footer-wrap-layout1">
                     <div class="copyright">© Copyrights <a href="#"></a> 2021, De Potter College of Health Technology <a
                            href="#"></a></div>
                </footer>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->
    <script src="jsss/jquery-3.3.1.min.js"></script>
    <!-- Plugins jsss -->
    <script src="jsss/plugins.js"></script>
    <!-- Popper jsss -->
    <script src="jsss/popper.min.js"></script>
    <!-- Bootstrap jsss -->
    <script src="jsss/bootstrap.min.js"></script>
    <!-- Select 2 jsss -->
    <script src="jsss/select2.min.js"></script>
    <!-- Date Picker jsss -->
    <script src="jsss/datepicker.min.js"></script>
    <!-- Scroll Up jsss -->
    <script src="jsss/jquery.scrollUp.min.js"></script>
    <!-- Custom jsss -->
    <script src="jsss/main.js"></script>
 <?php if($firstname ==""){ 
unset($_SESSION['LOGGED']);
echo"<script> location.href='index.php'  </script>";
}?>
</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/add-parents.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 05:35:34 GMT -->
</html>