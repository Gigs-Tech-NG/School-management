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
            <?php
    if(isset($_POST['addept'])){
   
   
   $deptt=htmlspecialchars($_POST['dept']);
   $dept=ucwords($deptt);
   $facultyid=htmlspecialchars($_POST['faculty']);
  
   $sel_dept=mysqli_query($connection,"SELECT * FROM depts WHERE name='$dept'");
   //$norow=mysqli_num_rows($sel_dept);
   if(!$sel_dept){
    echo "faile";
   }while($row=mysqli_fetch_array($sel_dept)){
    $nam=$row['name'];
     $faculty_id=$row['faculty_id'];
   }
   if($nam == $dept && $facultyid == $faculty_id) {
     $failure = "PROGRAMME ALREADY EXIST";
   } else{
   
   $query=mysqli_query($connection,"INSERT INTO depts(name,faculty_id) VALUES('$dept','$facultyid')");
   if($query) {
     $success = "Programme added successfully";
   } else{
      $failure =  "programme insertion failed"; 
   }
    
    }
    
    }
?> 
 
     
   <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>PROGRAMME</h3>
                    <ul>
                        <li>
                            <a href="administration.php">Home</a>
                        </li>
                        <li>Add New PROGRAMME</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add New Teacher Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add New PROGRAMME</h3>
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
                    <label for="form_message">PROGRAMME</label>
              <select class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" name="dept" >
                <option value="">---SELECT----*</option>
                <option>JUNIOR CLASSES</option>
                 <option>ART CLASS</option>
                  <option>SCIENCS CLASS</option>
                   <option>COOMERCIAL CLASS</option>
                 <div class="help-block with-errors"></div></select>          
                        <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" name="addept" class="btn btn-success btn-send" value="ADD PROGRAMME">
            </div>
        </div>
   </div>
</form>
    </div>
                </div>
                <!-- Add New Teacher Area End Here -->
               <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">De Potter</a> 2021. All rights reserved. Designed by <a
                            href="#">Agertech Solutions and Consult</a></div>
                </footer>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
 <?php require("includes/footers.php"); ?> 