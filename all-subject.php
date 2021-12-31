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
                    <h3>DEPARTMENTS</h3>
                    <ul>
                        <li>
                            <a href="adminict.php">Home</a>
                        </li>
                        <li>Add New CLASS</li>
                    </ul>
                </div>
                  <?php
    if(isset($_POST['save'])){
   
   
   $deptt=htmlspecialchars($_POST['dept']);
   $dept=ucwords($deptt);
    $sel_dept=mysqli_query($connection,"SELECT * FROM faculties WHERE name='$dept'");
   $norow=mysqli_num_rows($sel_dept);
   if($norow >=1) {
     $failure = "CLASS ALREADY EXIST";
   } else{
   $query=mysqli_query($connection,"INSERT INTO faculties(name) VALUES('$dept')");
   if($query) {
     $success = "Class added successfully";
   } else{
      $failure =  "Class insertion failed"; 
   }
    
    }
    }
    
?> 
                <!-- Breadcubs Area End Here -->
                <!-- Add New Teacher Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add New Class</h3>
                                <h3>
                                    
  <?php 
    if(!empty($failure)){
     echo "<span class='btn btn-danger'>" .$failure."</span>"; 
    }
     if(!empty($success)){
     echo "<span class='btn btn-success'>" .$success."</span>";
     } 
     ?>            
        </h3>
                                
                            </div>
               
 
                </div>
                        <form method="post" action="">
                             <h2 align="center">CLASS</h2>
                             <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>CLASS NAME*</label>
                                    
                                <select class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" name="dept" >
                <option value="">---SELECT----*</option>
                 <option>PRIMARY CLASS</option>
                  <option>JUNIOR CLASS</option>
                   <option>SENIOR CLASS</option>
                 <div class="help-block with-errors"></div></select>  
    <div class="col-12 form-group mg-t-8">
                                    <button type="submit" name="save" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Submit</button>
                                   
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
  
 <?php require("includes/footers.php"); ?> 