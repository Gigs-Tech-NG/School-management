<?php
session_start();
?> 
<?php
//namespace Phppot;

//use Phppot\inlineedit\Model\FAQ;
?>
<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from keenitsolutions.com/products/html/edulearn/edulearn-demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Jun 2021 10:30:43 GMT -->
<head><link href="https://depotterhealthtech.sch.ng/inlineedit/assets/CSS/style.css" type="text/css" rel="stylesheet" />
<script src="https://depotterhealthtech.sch.ng/inlineedit/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="https://depotterhealthtech.sch.ng/inlineedit/assets/js/inlineEdit.js"></script>
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
 <style>
 
 .container {
  clear: both;
  position: relative;
}

.container .arrow {
  width: 12px;
  height: 20px;
  overflow: hidden;
  position: relative;
  float: left;
  top: 6px;
  right: -1px;
}

.container .arrow .outer {
  width: 0;
  height: 0;
  border-right: 20px solid #000000;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  position: absolute;
  top: 0;
  left: 0;
}

.container .arrow .inner {
  width: 0;
  height: 0;
  border-right: 20px solid #ffffff;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  position: absolute;
  top: 0;
  left: 2px;
}

.container .message-body {
  float: left;
  width: 300px;
  height: auto;
  border: 1px solid #CCC;
  background-color: #ffffff;
  border: 1px solid #000000;
  padding: 6px 8px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
}

.container .message-body p {
  margin: 0;
}
</style>
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
                                        <br/>
                                         Posted By:    <div class="post-date bg-skyblue"><?php echo $postedby; ?></div>
                                         <br/>
                                     Title:    <div class="post-date bg-skyblue"><?php echo $title; ?></div>
                                     
                                    <div class="container">
  <div class="arrow">
    <div class="outer"></div>
    <div class="inner"></div>
  </div>
  <div class="message-body">
    <?php echo $row['news']; ?>
  </div>
</div>
                                        
                                           
                                         <br/>
                                              <div class="post-date bg-skyblue"><a href="deleted_news.php?id=<?php echo $row['id'];?>">Delete </a></div>
                                            </a>
                                            </h6>
                                            
                                        <div class="entry-meta">  </div>
                                          
                                    </div>
                        <?php }?>
                                </div>
                               
                                 
                            </div>
                            
                            <?php// include "inlineedit";?>
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