<?php
session_start();
include"config.php";
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
 <link rel="stylesheet" href="csss/bootstrap.min.css"><?php  require("includes/studentMenu.php");?>
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
                    <h3>Notice Board</h3>
                    <ul>
                        <li>
                            <a href="administration.php">Home</a>
                        </li>
                        <li>Notice</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <div class="row">
                    <!-- Add Notice Area Start Here -->
                    <div class="col-4-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Create A Notice</h3>
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
                                     <?php
                       if($_SERVER["REQUEST_METHOD"]=="POST") {
                            $title=$_POST['title'];
                            $news=$_POST['news'];
                            $postedby=     $firstname ;
                            $date=$_POST['date'];
                            $name = $_FILES["uploadfile"]["name"];
                              $insert="INSERT INTO newss(title,news,postedby,date,filename) VALUES('$title','$news','$postedby','$date','$name')" ;
                           $connect=mysqli_query($connection,$insert); 


$target_directory = "image/";
$name = $_FILES["uploadfile"]["name"];
$target_files = $target_directory . basename($_FILES["uploadfile"]["name"]);
$uploadOked = 1;
$tmp = $_FILES["uploadfile"]["tmp_name"];
$imageFileTypees = pathinfo($target_files,PATHINFO_EXTENSION);

//$targets = $target_files  && $target_file;
                            include"config.php";
                             // $filename = $_FILES["uploadfile"]["name"];
    //$tempname = $_FILES["uploadfile"]["tmp_name"];    
       // $folder = "image/".$filename;
                            
                        
                           if(($connect) && (move_uploaded_file($tmp, $target_files))){
                             
                               // if (move_uploaded_file($tempname, $folder)){
          // echo" <img src=".$folder." height=200 width=300 />";
            echo"News Posted Succesfully";
       // echo "The file ". basename( $name). " has been uploaded.".'<br>';
         //echo "The file ". basename( $named). " has been uploaded.";
        
    } else{
                 echo "error".$connect.mysqli_error($connection);
             }
                           
                          // if(!$connect){
                              // echo"Error".$connect.mysqli_error($connection);
                          // }
                           
                            
                            
                            
                            
                            
                            
                        }
                        
                        ?>
                                <form class="new-added-form" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Title</label>
                                            <input type="text" placeholder="" name="title" class="form-control" required="">
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Details</label>
                                            <textarea rows="4" cols="50" name="news" required="" >
                                                
                                            </textarea>
                                        </div>
                                         <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Add Image If Needed</label>
                                            <input type="file" placeholder="" name="uploadfile" class="form-control" required="">
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Posted By </label>
                                            <input type="text" value="<?php echo     $firstname ;?>" name="postedby" disabled="" class="form-control">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Date</label>
                                            <input type="date" required="" name="date" class="form-control air-datepicker">
                                            
                                        </div>
                                        <div class="col-12 form-group mg-t-8">
                                            <button type="submit" name="submit" required="" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">POST </button>
                                           
                                        </div>
                                    </div>
                                </form>
                                
                   
                            </div>
                        </div>
                    </div>
                    <!-- Add Notice Area End Here -->
                    <!-- All Notice Area Start Here -->
                    <div class="col-8-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Notice Board</h3>
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
                                
                  <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">De Potter</a> 2021. All rights reserved. Designed by <a
                            href="#">Agertech Solutions and Consult</a></div>
                </footer>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
      </div>
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
    <!-- Scroll Up jsss -->
    <script src="jsss/jquery.scrollUp.min.js"></script>
    <!-- Date Picker jsss -->
   
    <!-- Custom jsss -->
    <script src="jsss/main.js"></script>

</body>
</html>