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
          <?php  require("includes/busry.php");?>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
    <?php
	function validate(){
    if(isset($_POST['edit']))
    {
        
    //get form data
      include "config.php";
      $erro="";
    $fullname=mysqli_real_escape_string($connection,$_POST['fullname']);
    $phone=mysqli_real_escape_string($connection,$_POST['phone']); 
    $email=mysqli_real_escape_string($connection,$_POST['email']);
   $target_dir="img/";
     $image=($_FILES["file"]["name"]);
       $target_file = $target_dir . basename($_FILES["file"]["name"]);

           $extension  = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    //valid file extension
   $extension_arr= array('png', 'jpg', 'jpeg','jfif');
    //check
   if(!in_array($extension,$extension_arr)){
   return "file not supported";
   }
       //if file alrady exist
       if(file_exists($target_file)){
           return "Image already exit";
        }  
    
   // if( $fullname=="" || $phone=="" || $usernam=="" || $pass=="" || $email=="" || $confirm_pass==""){
   // $erro= "please fill out all fields";
   // }
         //check if username has already been taken
        // $checkusername=mysqli_query($connection,"SELECT * FROM admin WHERE username='$usernam'");
     //    if(mysqli_num_rows($checkusername) >= 1){
         // $erro="username already taken";
         // }
                   
if (!preg_match("/^[a-zA-Z-' ]*$/", $fullname )) {
 return "Only letters and white space allowed";
  }
  
                
  include "config.php";
                $sql="update admlogin set fullname='$fullname',picture='$image',phone='$phone' WHERE username='".$_SESSION['username']."' AND password='".$_SESSION['password']."'";
                $result=mysqli_query($connection,$sql);
                if(!$result){
                    die("failed").mysqli_connect_error();
                }
      
           else{
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file))
            {
                   return "Updated"; 
            }
                    
            else
            {
              
                return  "Sorry, there was an error uploading your file"; 
            }
    
        }
        }
  }   
  ?>  
    <!-- Preloader End Here -->
         <!-- Header Menu Area Start Here -->
            <?php   include "headers/busar_header.php";  ?> 
   <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
          
             <?php  include"side_bars/buser_sidebar.php"; ?>
          <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Details</h3>
                    <ul>
                         <li>
                       <a href="busary.php">Home</a>
                        </li>
 <li>Dashboard</li>
                        <li>Profile</li>
                        
                    </ul>
                </div>                
                <!-- Breadcubs Area End Here -->
                <!-- Add Class Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="item-img" style="text-align:center;border-radius:50%">
                                <img src="img/<?php echo $passport;?>" alt="student" width="15%" height="5%">
                            </div>  <div class="heading-layout1">
                            
      
               <h4 style="color:red"><?php echo validate(); ?></h4>
          
                            
                           <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" 
                                data-toggle="dropdown" aria-expanded="false">...</a>
        
                               <!-- <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div--->
                            </div>
                        </div>
                        <form class="new-added-form" method="post"   enctype="multipart/form-data">
                               <div class="container" style="width:100%">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Full Name*</label>
                                    <input type="text" placeholder=""  value="<?php echo $firstname;?>" name="fullname" disabled="" class="form-control">
                                </div>
                                
                               <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>E-mail Address</label>
                                   <input type="email" placeholder="" disabled="" value="<?php echo  $email_val ;?>" class="form-control" name="email" required=""/>
                                </div>
                                 
                                 <!---<div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>UTME Reg no *</label>
                                    <input type="text" placeholder="" disabled="" value="<?php// echo $utmeJ;?>" class="form-control"name="utme_no" required=""/>
                                    
                                </div---->
                               
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Phone Number *</label>
                                    <input type="tel" placeholder="" name="phone" value="<?php echo $phone;?>" disabled="" class="form-control">
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Rank *</label>
                       <input type="text" placeholder="" name="file"  value="<?php echo $rank;?>"  disabled="" class="form-control"/>
                                </div>
                            
                                <!--process local government starts here--->
                                
                                
                                
                                
                                <!--- process local govt ends here --->
                                
                                
                               
                                
                                     
                          <!--  <div class="heading-layout1">
        <div class="item-title" style="width: 100%;border: 2px solid #c4e3f3; border-radius: 10px; background: #c4e3f3; border: none;">
             <h3 style=" margin-left:7%; text-transform: uppercase; color: red;">Other Information</h3>
                            </div>
                           <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" 
                                data-toggle="dropdown" aria-expanded="false">...</a>
                            </div>
                        </div>
                         <div class="row">
                                <!---<div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Extra-curricullar activities *</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Physical Disability *</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                                 <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Language *</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                                 <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Next of Kin Name *</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Next of kin Address *</label>
                                   <textarea class="textarea form-control" name="message" id="form-message" cols="10" rows="4"></textarea>
                                </div>
                                 <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Next of kin Phone No  *</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                                </div>
                                
                                          
                            <!---<div class="heading-layout1">
        <div class="item-title" style="width: 100%;border: 2px solid #c4e3f3; border-radius: 10px; background: #c4e3f3; border: none;">
             <h3 style=" margin-left:4%; text-transform: uppercase; color: red; font-size: 16.7px;font-weight:bolder;">Educational Information/
             List of Schools/colleges attended with date and certificate obtained</h3>
                            </div>
                           <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" 
                                data-toggle="dropdown" aria-expanded="false">...</a>
                            </div>
                        </div>
                        <div class="row">
                               <div class="col-lg-4 col-12 form-group">
                                    <label>Names/Address of School(s)</label>
                                    <textarea class="textarea form-control" name="message" id="form-message" cols="10" rows="4"></textarea>
                                </div>
                                 <div class="col-lg-4 col-12 form-group">
                                    <label>Date/Month/Year</label>
                                    <textarea class="textarea form-control" name="message" id="form-message" cols="10" rows="4"></textarea>
                                </div>
                                  <div class="col-lg-4 col-12 form-group">
                                    <label>Certificate Awarded</label>
                                    <textarea class="textarea form-control" name="message" id="form-message" cols="10" rows="4"></textarea>
                                </div>
                                </div>
                                 <div class="heading-layout1">
        <div class="item-title" style="width: 100%;border: 2px solid #c4e3f3; border-radius: 10px; background: #c4e3f3; border: none;">
<h3 style=" margin-left:4%; text-transform: uppercase; color: red; font-size: 20px;font-weight:bolder;">programme index :-
 specify fisrt and second programme you wish to enrol for</h3>
                            </div>
                           <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" 
                                data-toggle="dropdown" aria-expanded="false">...</a>
                            </div>
                        </div>
                        <div class="row">
                               <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>First choice  *</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Second Choice  *</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                                 <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Upload Credentials: max file size:4mb  *</label>
                       <input type="file" placeholder="" class="form-control"/><span><p>you can upload any number of file,Arrange all the
                        file(credentials) you wish to upload in one folder. select them and upload at the same time </p></span>
                                </div>
                                </div>
                         <div class="heading-layout1">
        <div class="item-title" style="width: 100%;border: 2px solid #c4e3f3; border-radius: 10px; background: #c4e3f3; border: none;">
<h3 style=" margin-left:4%; text-transform: uppercase; color: red; ;font-weight:bolder;">Attestation</h3>
                            </div>
                           <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" 
                                data-toggle="dropdown" aria-expanded="false">...</a>
                            </div>
                        </div>
                         <div class="row">
                               <div class="col-xl-12 col-lg-6 col-12 form-group">
                                    <p>I attest that I have finished all information requested in this application ,that submitting any false information to the college, or withholding information about any previous academic history will make my application for admission to the college, null and void.</p>
                           I've read the attesstation <input type="checkbox" /></span>
                                </div>
                                </div---->
                        
                                <div class="col-md-6 form-group"></div>
                                <!---<div class="col-12 form-group mg-t-8">
                                    <button type="submit" name="edit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Edit</button>
                                    <!--<button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button--->
                                </div>
                            </div>
                             </div>
                        </form>
             
                </div>
                <!-- Add Class Area End Here -->
                   <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">De Potter</a> 2021. All rights reserved. Designed by <a
                            href="#">Agertech Solutions and Consult</a></div>
                </footer>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
     <?php if($firstname ==""){ 
unset($_SESSION['LOGGEDsub']);
echo"<script> location.href='index.php'  </script>";
}?>
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

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/add-class.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 05:35:34 GMT -->
</html>