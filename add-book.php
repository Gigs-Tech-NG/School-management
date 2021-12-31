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
 <link rel="stylesheet" href="csss/bootstrap.min.css"><?php  require("includes/studentMenu.php");?>
   </head><body>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
           <?php
           function validate(){
    if(isset($_POST["submit"]))
        {
            $bname=(($_POST["bname"]));
            $keys=(($_POST["keys"]));
            $target_dir = "books/";
            $target_file = $target_dir . basename($_FILES["efile"]["name"]);

           $extension  = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    //valid file extension
   $extension_arr= array('zip', 'xlsx', 'cad', 'pdf', 'doc', 'docx', 'ppt', 'pptx', 'pps', 'ppsx', 'odt', 'xls', 'xlsx',);
    //check
   if(!in_array($extension,$extension_arr)){
   return "file not supported";
   }
       //if file alrady exist
       if(file_exists($target_file)){
           return "Book already exit";
        }  
              include "config.php";
            $query=mysqli_query($connection,"SELECT * FROM book WHERE BTITLE='$bname' OR KEYWORDS = '$keys'");
            if(mysqli_num_rows($query) != 0){
                return  "The name or keyword you entered already exist"; 
            }
            include "config.php";
                $sql="INSERT INTO book(BTITLE,KEYWORDS,FILE)
                     VALUES ('$bname','$keys', '$target_file' )";
                $result=mysqli_query($connection,$sql);
                if(!$result){
                    die("failed").mysqli_connect_error();
                }
      
           else{
            if (move_uploaded_file($_FILES["efile"]["tmp_name"], $target_file))
            {
                   return "(" .$bname .") added successfully"; 
            }
                    
            else
            {
              
                return  "Sorry, there was an error uploading your file"; 
            }
    
        }
        }
  }   
 
?>
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
                    <h3>Library</h3>
                    <ul>
                        <li>
                            <a href="administration.php">Home</a>
                        </li>
                        <li>Add New Book</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add New Book Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add New Book</h3>
                                <h4 style="color:red"><?php echo validate(); ?></h4>
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
                        <form class="new-added-form" method="post"  enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Book Title *</label>
                                    <input type="text" placeholder="" name="bname" class="form-control" required>
                                </div>
                               <!--- <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Subject *</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Writter Name *</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Class *</label>
                                    <select class="select2">
                                        <option value="">Please Select Class *</option>
                                        <option value="1">Play</option>
                                        <option value="2">Nursery</option>
                                        <option value="3">One</option>
                                        <option value="3">Two</option>
                                        <option value="3">Three</option>
                                        <option value="3">Four</option>
                                        <option value="3">Five</option>
                                    </select>
                                </div--->
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Keywords *</label>
                                     <textarea name="keys"  class="form-control" required></textarea>  
                                </div>
                                <!----<div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Publishing Date *</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div---->
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Uploade Date *</label>
                              <input id="form_name" type="file" name="efile" required class="form-control"  required="required"  value="<?php echo isset($_POST['efile']) ? $_POST['efile'] : '' ?>">
                                </div>
                                <div class="col-md-3 d-none d-xl-block form-group">
                                   
                                </div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" name="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Add New Book Area End Here -->
                 <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">De potter</a> 2021. All rights reserved. Designed by <a
                            href="#">Agertech Solutions and Consult</a></div>
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
    <!-- Smoothscroll jsss -->
    <script src="jsss/jquery.smoothscroll.min.php"></script>
    <!-- Scroll Up jsss -->
    <script src="jsss/jquery.scrollUp.min.js"></script>
    <!-- Custom jsss -->
    <script src="jsss/main.js"></script>
  <?php if($firstname ==""){ 
unset($_SESSION['LOGGED']);
echo"<script> location.href='index.php'  </script>";
}?>
</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/add-book.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 05:35:34 GMT -->
</html>