<?php
session_start();
?>
    <!-- Preloader End Here -->
    <!doctype html>
<html class="no-js" lang="">
<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/teacher-payment.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 05:35:33 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Depotter|| Re-define lost hope</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/logo.png">
    <!-- Normalize csss --><?php require ("includes/newfile.php");?>
    <!-- Preloader End Here -->
      <div id="wrapper" class="wrapper bg-ash">
         <!-- Header Menu Area Start Here -->
        <?php include "headers/admin_header.php";?>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <?php  include"side_bars/admin_sidebar.php"; ?>
            <?php
             include "config.php";
    if(isset($_POST['submit'])){
   
   
   $level=htmlspecialchars($_POST['level']);
  // $dept=ucwords($deptt);
   $semesr=htmlspecialchars($_POST['addsemester']); 
  $semester=ucwords($semesr);
   $sel_dept=mysqli_query($connection,"SELECT * FROM semester WHERE name='$semester'");
   //$norow=mysqli_num_rows($sel_dept);
  if(!$sel_dept){
      
  }while($row=mysqli_fetch_assoc($sel_dept)){
      $smter=$row['name'];
      $levl=$row['level_id'];
  }
   if($levl == $level && $smter == $semester ) {
     $failure = $semester.' '. " already exist in the selected department";
   } else{ 
   
   $query=mysqli_query($connection,"INSERT INTO semester (name,level_id) VALUES('$semester','$level')");
   if($query) {
     $success = $semester .' '." inserted successfully";
   } else{
      $failure =  "semester insertion failed".mysqli_error($connection); 
   }
    
    }
    
    }
?> 
 
     
   <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Semester</h3>
                    <ul>
                        <li>
                            <a href="adminict.php">Home</a>
                        </li>
                        <li>Add New Semester</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add New Teacher Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add New Semester</h3>
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
         <form id="contact-form" method="post" action="" role="form">
             <div class="controls">
             
              <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">DEPARTMENT</label>
                    <select  id="faculty" name="faculty" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;" required>
 <option value="">Select Department</option>
   <?php  
                 
 $query =$connection->query("SELECT * FROM faculties"); 
 $rowCount=$query->num_rows;
 
       if($rowCount > 0){
 while($row=$query->fetch_assoc()){ 
   $faculted=$row['id'];
   $named=$row['name'];
  echo '<option value= "'.$row['id'].'">'.$row['name'].'</option>'; }
 }else{
 echo '<option value="">dept not found </option>';
  }
 ?>    
   </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
             <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                      <label>PROGRAMME *</label>
                                    <select class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;" id="dept"  name="dept" required>
                                        <option value="">Select dept first * </option>
                            </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div></div>
             <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                     <label> LEVEL *</label>
                                    <select class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;" id="level"  name="level" required>
                                        <option value="">Select programme first *</option> <div class="help-block with-errors"></div></select>
                </div>
            </div></div>
               <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                     <label>AVAILABLE SEMESTER *</label>
                                    <select class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" disabled="disabled" multiple="multiple" style=" height:150px;" id="semester">
                                        <option value="">Select level first *</option> <div class="help-block with-errors"></div></select>
                </div>
            </div></div>
             <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_message">ADD SEMESTER</label>
                     <input type="text" name="addsemester" placeholder="ADD SEMESTER" class="form-control" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" name="submit" class="btn btn-success btn-send" value="ADD SEMESTER">
            </div>
        </div>
   </div>
</form>
    </div>
    
                </div>
                <!-- Add New Teacher Area End Here -->
               <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">De potter</a> 2021. All rights reserved. Designed by <a
                            href="#">Agertech Solutions and Consult</a></div>
                </footer>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
  
          
 
   <?php require("includes/footers.php"); ?>