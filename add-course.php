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
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
        <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">
         <link rel="stylesheet" href="csss/bootstrap.min.css">
          <?php  require("includes/studentMenu.php");?> <?php require("includes/functions.php"); ?> 
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
     if(isset($_POST['addcourse'])){
   
   // $coursecode=strtoupper(htmlspecialchars($_POST['coursecode']));
   $levelid=htmlspecialchars($_POST['level']);
   $courstitle=strtoupper(htmlspecialchars($_POST['coursetitle'])); 
   $dept=htmlspecialchars($_POST['dept']); 
 //  $lectureday1=htmlspecialchars($_POST['lectureday1']);
  // $lectureday2=htmlspecialchars($_POST['lectureday2']);
   
   $sel=mysqli_query($connection,"SELECT * FROM level WHERE name='$dept' AND dept_id = '$levelid' 
   AND coursetitle= '$courstitle'");
  $norow=mysqli_num_rows($sel);
   if($norow >=1) {
     $failure = $courstitle."(" . $coursecode .") already exist";
   } else{
   
   $query=mysqli_query($connection,"INSERT INTO course(name,semester_id,coursetitle) 
   VALUES('$dept','$levelid','$courstitle')");
   if($query) {
     $success =$courstitle."(" . $coursecode .") inserted successfully";
   } else{
       $failure =  "course insertion failed".mysqli_error($connection); 
   }
          
    }
    
    }
 
  ?>
 
     
   <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Subjects</h3>
                    <ul>
                        <li>
                            <a href="administration.php">Home</a>
                        </li>
                        <li>Add New Subject</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add New Teacher Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add New Subject</h3>
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
                    <label for="form_name">CLASS</label>
                    <select  id="faculty" name="faculty" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;" required>
 <option value="">Select Class</option>
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
                     <label> TERM *</label>
                                    <select class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12"  style=" height:50px;" name="semester">
                                        <option value="">Select level first *</option> <div class="help-block with-errors"></div></select>
                </div>
            </div></div>
               <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                     <label>Subject(s) you have already entered for the selected data*</label>
                                    <select class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" disabled="disabled" multiple="multiple" style=" height:150px;" id="semester" >
                                        <option value="">Select level first *</option> <div class="help-block with-errors"></div></select>
                </div>
            </div></div>
             <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_message">Subject CODE *</label>
                     <input type="text" name="coursecode" placeholder="ADD Subject CODE" class="form-control" required="required" >
                    <div class="help-block with-errors"></div>
                </div>
            </div></div>
              <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_message">Subject TITLE *</label>
                     <input type="text" name="coursetitle" placeholder="ADD Subject TITLE" class="form-control"  required="required">
                    <div class="help-block with-errors"></div>
                </div>
            </div></div>
             <!--<div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_message">CREDIT UNIT *</label>
                     <input type="text" name="creditunit" placeholder="ADD CREDIT UNIT" class="form-control"  required="required">
                    <div class="help-block with-errors"></div>
                </div>
            </div></div>
             <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_message">FIRST LECTURE DAY *</label>
                     <select id="gender"  name="lectureday1" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:35px;" required="required">
                        <option value=""> Please enter the preferred day and time for the Lecture </option>
                        <option value="Monday, 9:00 - 11:00">Monday, 9:00AM - 11:AM </option>
                        <option value="Monday, 11:00 - 13:00">Monday, 11:00AM - 1:00PM</option>
                        <option value="Monday, 13:30 - 15:30">Monday, 1:30PM - 3:30PM </option>
                        <option value="Tuesday, 9:00 - 11:00">Tuesday, 9:00AM - 11:AM </option>
                        <option value="Tuesday, 11:00 - 13:00">Tuesday, 11:00AM - 1:00PM</option>
                        <option value="Tuesday, 13:30 - 15:30">Tuesday, 1:30PM - 3:30PM </option>
                        <option value="Wednesday, 9:00 - 11:00">Wednesday, 9:00AM - 11:AM </option>
                        <option value="Wednesday, 11:00 - 13:00">Wednesday, 11:00AM - 1:00PM</option>
                        <option value="Wednesday, 13:30 - 15:30">Wednesday, 1:30PM - 3:30PM </option>
                        <option value="Thursday, 9:00 - 11:00">Thursday, 9:00AM - 11:AM </option>
                        <option value="Wednesday, 11:00 - 13:00">Thursday, 11:00AM - 1:00PM</option>
                        <option value="Wednesday, 13:30 - 15:30">Thursday, 1:30PM - 3:30PM </option>
                       <option value="Friday, 9:00 - 11:00">Friday, 9:00AM - 11:AM </option>
                        <option value="Friday, 11:00 - 13:00">Friday, 11:00AM - 1:00PM</option>
                        <option value="Friday, 13:30 - 15:30">Friday, 1:30PM - 3:30PM </option>
                       
                        </select>         <div class="help-block with-errors"></div>
                </div>
            </div></div>
                   <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_message"> SECOND LECTURE DAY   *</label>
                     <select id="genderx"  name="lectureday2" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:35px;" >
                      <option value=""> Please enter the preferred day and time for the Lecture </option>
                        <option value="Monday, 9:00 - 11:00">Monday, 9:00AM - 11:AM </option>
                        <option value="Monday, 11:00 - 13:00">Monday, 11:00AM - 1:00PM</option>
                        <option value="Monday, 13:30 - 15:30">Monday, 1:30PM - 3:30PM </option>
                        <option value="Tuesday, 9:00 - 11:00">Tuesday, 9:00AM - 11:AM </option>
                        <option value="Tuesday, 11:00 - 13:00">Tuesday, 11:00AM - 1:00PM</option>
                        <option value="Tuesday, 13:30 - 15:30">Tuesday, 1:30PM - 3:30PM </option>
                        <option value="Wednesday, 9:00 - 11:00">Wednesday, 9:00AM - 11:AM </option>
                        <option value="Wednesday, 11:00 - 13:00">Wednesday, 11:00AM - 1:00PM</option>
                        <option value="Wednesday, 13:30 - 15:30">Wednesday, 1:30PM - 3:30PM </option>
                        <option value="Thursday, 9:00 - 11:00">Thursday, 9:00AM - 11:AM </option>
                        <option value="Wednesday, 11:00 - 13:00">Thursday, 11:00AM - 1:00PM</option>
                        <option value="Wednesday, 13:30 - 15:30">Thursday, 1:30PM - 3:30PM </option>
                       <option value="Friday, 9:00 - 11:00">Friday, 9:00AM - 11:AM </option>
                        <option value="Friday, 11:00 - 13:00">Friday, 11:00AM - 1:00PM</option>
                        <option value="Friday, 13:30 - 15:30">Friday, 1:30PM - 3:30PM </option>
                       
                        </select>        <div class="help-block with-errors"></div>
                </div--->
            </div>
            <div class="col-md-12">
                <input type="submit" name="addcourse" class="btn btn-success btn-send" value="ADD SUBJECT">
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