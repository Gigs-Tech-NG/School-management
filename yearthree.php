<?php
session_start();
?><!DOCTYPE html>
<html lang="zxx">
    
<!-- Designed by agertech solutions and consults -->
<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Depotter|| Re-define lost hope</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
        <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">
    <!-- Normalize csss -->
           <?php include("busry.php");?>
   <div id="wrapper" class="wrapper bg-ash">
         <!-- Header Menu Area Start Here -->
     <?php  include "headers/busar_header.php";  ?> 
   <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
<!-- Sidebar Area Start Here -->
             <?php  include"side_bars/buser_sidebar.php"; ?> 
            <?php    if(isset($_POST['addept'])){
   
   
   $level="Year3";
   $faculty=htmlspecialchars($_POST['faculty']);

   if(!empty($faculty)) {
       $_SESSION['paymed']="true";
       $_SESSION['level']=$level;
        $_SESSION['faculty']=$faculty;
      echo"<script> location.href='hnd1payment.php'  </script>";
   } else{
      $failure =  "Please fill the field"; 
   }
    
  //  }
    
    }
?> 
 
     
   <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>YEAR3</h3>
                    <ul>
                        <li>
                            <a href="busary.php">Home</a>
                        </li>
                        <li>Select Department</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add New Teacher Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>PAYMENT</h3>
                                <h3 style="color:red">
                                    <?php 
    if(!empty($_SESSION['pending'])){
        echo ($_SESSION['pending']);
        unset($_SESSION['pending']);
    }
?>
  </h3>                                  
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
                    <label for="form_name">Level</label>
                <input type="text"  value="Year3" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;" disabled="" required>
      <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">DEPARTMENT</label>
                    <select  id="faculty" name="faculty" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;" required>
 <option value="">Select Department</option>
   <?php  
                 
 $query =$connection->query("SELECT * FROM depts"); 
 $rowCount=$query->num_rows;
 
       if($rowCount > 0){
 while($row=$query->fetch_assoc()){ 
   $faculted=$row['id'];
   $named=$row['name'];
  echo '<option value= "'.$row['name'].'">'.$row['name'].'</option>'; }
 }else{
 echo '<option value="">dept not found </option>';
  }
 ?>    
   </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        
            
            <div class="col-md-12">
                <input type="submit" name="addept" class="btn btn-success btn-send" value="Continue">
            </div>
        </div>
   </div>
</form>
    </div>
                </div>
                <!-- Add New Teacher Area End Here -->
               <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">Depotter</a> 2021. All rights reserved. Designed by <a
                            href="#">Agertech Solutions and Consult</a></div>
                </footer>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
  
          
 
   <?php require("includes/footers.php"); ?>