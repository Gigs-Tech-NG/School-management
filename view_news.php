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
         <!-- Header Menu Area Start Here -->
       <?php include "headers/admin_header.php"; ?>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
           <!-- Sidebar Area Start Here -->
           <?php  include"side_bars/admin_sidebar.php";?>
        <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                   
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
                                        <h3>News And Events</h3>
                                    </div>
                                     <div class="dropdown">
                                        
                
                                        
                                    </div>
                                </div>
                           
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
                                       
                                    </div>
                                     
                                </div>
                                 <?php
                        include "config.php";
                     
                        $select="SELECT * FROM newss";
                
                        $result=mysqli_query($connection,$select);
                        
                        if(!$result){
                            die("failed").mysqli_connect_error();
                        }while($row=mysqli_fetch_array($result)){
                          $id = $row['id'];
                            $title = $row['title'];
              $news = $row['news'];
              $postedby = $row['postedby'];
              $date = $row['date'];
                        
             
                        ?>



                               <div class="notice-board-wrap">
                                    <div class="notice-list"> Date: 
                                        <div class="post-date bg-skyblue"><?php echo $date; ?></div>
                                         Posted By:    <div class="post-date bg-skyblue"><?php echo $postedby; ?></div>
                                     Title:    <div class="post-date bg-skyblue"><?php echo $title; ?></div>
                                        <h6 class="notice-title"><a href="#"> <?php echo $news; ?>
                                        
                                            </a></h6>
                                             <?php //$img = 'image/'.$row['filename'];?>
                                 <img src="<?php //echo $img;?>"
                                        <div class="entry-meta">  </div>
                                        
                                          
                                    </div>
                        <?php } ?>
                                </div>
                                
                                 
                            </div>
                        </div>
                      
                    
                    <!-- All Notice Area End Here -->
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
    <script src="jsss/datepicker.min.js"></script>
    <!-- Custom jsss -->
    <script src="jsss/main.js"></script>

</body>
</html>