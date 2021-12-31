<?php
session_start();
?>
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
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
     <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">
    <?php require("includes/studentMenu.php");?><div id="wrapper" class="wrapper bg-ash">
         <!-- Header Menu Area Start Here -->
       <?php  include "headers/admin_header.php" ;?>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <?php  include"side_bars/admin_sidebar.php"; ?>
        <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Admin</h3>
                    <ul>
                        <li>
                            <a href="administration.php">Home</a>
                        </li>
                        <li>Dashboard</li>
                    </ul>
                </div>
                 <!-- Breadcubs Area End Here -->
                <!-- Dashboard summery Start Here -->
                <div class="row gutters-20">
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-green ">
                                       <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Students</div>
                                        <div class="item-number"><span class="counter" data-num="150000"><?php
                    include "config.php";
                    //$gender="Male";
                    $status=1;
                    $query="SELECT appId FROM application where status='$status'";
                    $result=mysqli_query($connection,$query);
                    $row=mysqli_num_rows($result);
                      echo $row;
                    ?></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-blue">
                                        <i class="fa fa-address-book" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Staff</div>
                                        <div class="item-number"><span class="counter" data-num="2250"><?php
                    include "config.php";
                    //$gender="Male";
                    $query="SELECT id FROM admlogin ";
                    $result=mysqli_query($connection,$query);
                    $row=mysqli_num_rows($result);
                      echo $row;
                    ?></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-yellow">
                                    <i class="fa fa-university" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Departments</div>
                                        <div class="item-number"><span class="counter" data-num="5690"><?php
                    include "config.php";
                    //$gender="Male";
                    $query="SELECT id FROM faculties ";
                    $result=mysqli_query($connection,$query);
                    $row=mysqli_num_rows($result);
                      echo $row;
                    ?></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-red">
                                    <i class="fa fa-credit-card" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">School Fee Annual Total income</div>
                                        <?php
    					include('config.php');
    					$quer1=mysqli_query($connection,"SELECT fee FROM application WHERE level=100");
                        $total = 0;
    					while($row=mysqli_fetch_array($quer1)){
    					   
    					   $total += $row['fee'];
                          
    					   }
                           $income1 =  $total; 
                           	include('config.php');
    					$quer1=mysqli_query($connection,"SELECT fee_two FROM application WHERE level=200");
                        $total = 0;
    					while($row=mysqli_fetch_array($quer1)){
    					   
    					    if(!empty($row['fee_two'])){
                                $total += $row['fee_two'];
                                }else{
                                    $total+=0;
                                }
                          
    					   }
                           $income2 =  $total; 
                           
                           	include('config.php');
    					$quer1=mysqli_query($connection,"SELECT fee_three FROM application WHERE level=300");
                        $total = 0;
    					while($row=mysqli_fetch_array($quer1)){
    					   
    					   $total += $row['fee_three'];
                          
    					   }
                           $income3 =  $total; 
                           
                           	include('config.php');
    					$quer1=mysqli_query($connection,"SELECT fee_four FROM application WHERE level=400");
                        $total = 0;
    					while($row=mysqli_fetch_array($quer1)){
    					   
    					   $total += $row['fee_four'];
                          
    					   }
                           $income4 =  $total;
                           	include('config.php');
    				 $admitted="ADMITTED";
                       $slv="";
                       
    					$quer=mysqli_query($connection,"SELECT acceptancefee FROM application WHERE level='$slv' AND admissionstatus='$admitted'");
                        $total = 0;
    					while($row=mysqli_fetch_array($quer)){
    					   if(!empty($row['acceptancefee'])){
    					   $total += $row['acceptancefee'];
                           }else{
                               $total=0;
                           }
    					   }
                           $income5 =  $total; 
                     	include('config.php');
    					  $admitted="";
                   
    					$quer=mysqli_query($connection,"SELECT amount FROM application WHERE admissionstatus = '$admitted'");
                        $total = 0;
    					while($row=mysqli_fetch_array($quer)){
    					   
                            if(!empty($row['amount'])){
                                $total += $row['amount'];
                                }else{
                                    $total+=0;
                                }
                          
    					   }
                           $income6 =  $total;       
                       
                          
    						?>
                                        <div class="item-number"><span>#</span><span class="counter" data-num="193000"><?php echo  ($income1 + $income2 + $income3 + $income4); ?></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Dashboard summery End Here -->
                <!-- Dashboard Content Start Here -->
                <div class="row gutters-20">
                    <div class="col-12 col-xl-8 col-6-xxxl">
                        <div class="card dashboard-card-one pd-b-20">
                        
                        </div>
                    </div>
                   
                    <div class="col-12 col-xl-6 col-3-xxxl">
                        <div class="card dashboard-card-three pd-b-20">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Students</h3>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-expanded="false">...</a>

                                       
                                    </div>
                                </div>
                                <div class="doughnut-chart-wrap">
                                    
                                   <!--- <img src="img/piechart.svg" width="100%" height="100%"--->
                                </div>
                                <div class="student-report">
                                    <div class="student-count pseudo-bg-blue">
                                        <h4 class="item-title">Female Students</h4>
                                      
                                        <div class="item-number"><?php
                    include "config.php";
                    $gender="Female";
                      $status=1;
                    $query="SELECT appId FROM application WHERE gender='$gender' AND status='$status'";
                    $result=mysqli_query($connection,$query);
                    $row=mysqli_num_rows($result);
                      echo $row;
                    ?> </div>
                                    </div>
                                    <div class="student-count pseudo-bg-yellow">
                                        <h4 class="item-title">Male Students</h4>
                                        <div class="item-number"><?php
                    include "config.php";
                    $gender="Male";
                      $status=1;
                    $query="SELECT appId FROM application WHERE gender='$gender' AND status='$status'";
                    $result=mysqli_query($connection,$query);
                    $row=mysqli_num_rows($result);
                      echo $row;
                    ?> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                  
                    
                            
                        </div>
                  
                <!-- Dashboard Content End Here -->
                <!-- Social Media Start Here -->
                <!---<div class="row gutters-20">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card dashboard-card-seven">
                            <div class="social-media bg-fb hover-fb">
                                <div class="media media-none--lg">
                                    <div class="social-icon">
                                        <i class="fab fa-facebook-f"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <h6 class="item-title">Like us on facebook</h6>
                                    </div>
                                </div>
                                <div class="social-like">30,000</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card dashboard-card-seven">
                            <div class="social-media bg-twitter hover-twitter">
                                <div class="media media-none--lg">
                                        <div class="social-icon">
                                        <i class="fab fa-twitter"></i>
                                        </div>
                                        <div class="media-body space-sm">
                                            <h6 class="item-title">Follow us on twitter</h6>
                                        </div>
                                </div>
                                <div class="social-like">1,11,000</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card dashboard-card-seven">
                            <div class="social-media bg-gplus hover-gplus">
                                <div class="media media-none--lg">
                                    <div class="social-icon">
                                        <i class="fab fa-google-plus-g"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <h6 class="item-title">Follow us on googleplus</h6>
                                    </div>
                                </div>
                                <div class="social-like">19,000</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card dashboard-card-seven">
                            <div class="social-media bg-linkedin hover-linked">
                                <div class="media media-none--lg">
                                    <div class="social-icon">
                                    <i class="fab fa-linkedin-in"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <h6 class="item-title">Follow us on linked</h6>
                                    </div>
                                </div>
                                <div class="social-like">45,000</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Social Media End Here -->
                <!-- Footer Area Start Here -->
                
               <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">2021, De Potter College of Health Technology</a>  <a
                            href="#"></a></div>
                </footer>
            </div>
            </div>
            <?php if($firstname ==""){ 
unset($_SESSION['LOGGED']);
echo"<script> location.href='https://depotterhealthtech.sch.ng/index.php'  </script>";
}?>
        <!-- Page Area End Here -->
        </div>
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
    <!-- state and local govt jsss -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="jsss/lga.min.js"></script>
    </body>
    </html>