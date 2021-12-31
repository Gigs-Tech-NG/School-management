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
    <div id="wrapper" class="wrapper bg-ash">
         <!-- Header Menu Area Start Here -->
        <div class="navbar navbar-expand-md header-menu-one bg-light">
            <div class="nav-bar-header-one">
                <div class="header-logo">
                    <a href="student.php">
                         <img src="images/depotter_logo.png" width="150" alt="logo">
                    </a>
                </div>
                  <div class="toggle-button sidebar-toggle">
                    <button type="button" class="item-link">
                        <span class="btn-icon-wrap">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="d-md-none mobile-nav-bar">
               <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse" data-target="#mobile-navbar" aria-expanded="false">
                    <i class="far fa-arrow-alt-circle-down"></i>
                </button>
                <button type="button" class="navbar-toggler sidebar-toggle-mobile">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
                <ul class="navbar-nav">
                    <li class="navbar-item header-search-bar">
                        <div class="input-group stylish-input-group">
                            <span class="input-group-addon">
                                <button type="submit">
                                   
                                </button>
                            </span>
                            <marquee behavior="scroll" direction="left" style="">DE POTTER COLLEGE OF HEALTH</marquee>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="navbar-item dropdown header-admin">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <div class="admin-title">
                                <h5 class="item-title"><?php echo     $firstname ;?></h5>
                                <span><?php echo     $rank ;?></span>
                            </div>
                            <div class="admin-img">
                                <img src="img/<?php echo $passport;?>" alt="Admin" width="30px" height="15px">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title"><?php echo     $firstname ;?></h6>
                            </div>
                            <div class="item-content">
                                <ul class="settings-list">
                                    <li><a href="myprofileict.php"><i class="flaticon-user"></i>My Profile</a></li>
                                    
                                    <li><a href="profileeditict.php"><i class="flaticon-gear-loading"></i>Account Settings</a></li>
                                    <li><a href="logout.php"><i class="flaticon-turn-off"></i>Log Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="navbar-item dropdown header-message">
                        <!--<a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="far fa-envelope"></i>
                            <div class="item-title d-md-none text-16 mg-l-10">Message</div>
                            <span>5</span>
                        </a-->

                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                               
                            </div>
                            <div class="item-content">
                                <div class="media">
                                    <div class="item-img bg-skyblue author-online">
                                        <img src="img/figure/student11.png" alt="img">
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="item-title">
                                             
                                        </div>
                                        </div>
                                </div>
                                <div class="media">
                                    <div class="item-img bg-yellow author-online">
                                        <img src="img/figure/student12.png" alt="img">
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="item-title">
                                             
                                        </div>
                                        </div>
                                </div>
                                <div class="media">
                                    <div class="item-img bg-pink">
                                        <img src="img/figure/student13.png" alt="img">
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="item-title">
                                              
                                        </div>
                                       </div>
                                </div>
                                <div class="media">
                                    <div class="item-img bg-violet-blue">
                                        <img src="img/figure/student11.png" alt="img">
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="item-title">
                                           
                                        </div>
                                       </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="navbar-item dropdown header-notification">
                       <!-- <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="far fa-bell"></i>
                            <div class="item-title d-md-none text-16 mg-l-10">Notification</div>
                            <span>8</span>
                        </a-->

                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                </div>
                            <div class="item-content">
                                <div class="media">
                                    <div class="item-icon bg-skyblue">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                         </div>
                                </div>
                                <div class="media">
                                    <div class="item-icon bg-orange">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        </div>
                                </div>
                                <div class="media">
                                    <div class="item-icon bg-violet-blue">
                                        <i class="fas fa-cogs"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        </div>
                                </div>
                            </div>
                        </div>
                    </li>
                     <li class="navbar-item dropdown header-language">
                        <div class="dropdown-menu dropdown-menu-right">
                             </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
               <div class="mobile-sidebar-header d-md-none">
                    <div class="header-logo">
                        <a href=""> <img src="images/depotter_logo.png" alt="logo"></a>
                    </div>
               </div>
                <div class="sidebar-menu-content">
                    <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                        <li class="nav-item sidebar-nav-item">
                          <i class="fa fa-tachometer" aria-hidden="true"></i><span></span>
                           
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="adminict.php" class="nav-link"><i class="fa fa-home " ></i></i><span>Home</span>
                            </a>
                            <!--<ul class="nav sub-group-menu sub-group-active">
                                <li class="nav-item">
                                    <a href="all-student.php" class="nav-link menu-active"><i class="fas fa-angle-right"></i>All
                                        Students</a>
                                </li>
                                <li class="nav-item">
                                    <a href="student-details.php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Student Details</a>
                                </li>
                                <li class="nav-item">
                                    <a href="admit-form.php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Admission Form</a>
                                </li>
                                <li class="nav-item">
                                    <a href="student-promotion.php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Student Promotion</a>
                                </li>
                            </ul-->
                        </li>
                       
                         <li class="nav-item">
                            <a href="uploadresult.php" class="nav-link"><i class="fa fa-book" aria-hidden="true"></i><span>Upload Students Result</span></a>
                        </li>
                            <li class="nav-item">
                            <a href="editcourse.php" class="nav-link"><i class="fa fa-book" aria-hidden="true"></i><span>Edit Courses</span></a>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="fa fa-university" aria-hidden="true"></i><span>Admission Status</span></a>
                             <ul class="nav sub-group-menu">
                            
                                <li class="nav-item">
                                    <a href="adminissionstatus.php" class="nav-link" target="_blank"><i class="fas fa-angle-right"></i>Admission Records
                                        </a>
                                </li>
                                <li class="nav-item">
                                    <a href="admissionprint.php" class="nav-link" target="_blank"><i class="fas fa-angle-right"></i>Printout Students Admission Page
                                    </a>
                                </li>
                               
                            </ul> 
                        </li>
                       <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="fa fa-clone" aria-hidden="true"></i><span>Update</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="editcousre.php" class="nav-link" target="_blank"><i class="fas fa-angle-right"></i>Edit Courses
                                        </a>
                                </li>
                                <li class="nav-item">
                                    <a href="removecousre.php" class="nav-link"><i class="fas fa-angle-right"></i>Remove Courses
                                        </a>
                                </li>
                                  <li class="nav-item">
                                    <a href="editdepts.php" class="nav-link" target="_blank"><i class="fas fa-angle-right"></i>Edit Depts
                                        </a>
                                </li>
                                  <li class="nav-item">
                                    <a href="removedepts.php" class="nav-link" target="_blank"><i class="fas fa-angle-right"></i>Remove Depts
                                        </a>
                                </li>
                                  <li class="nav-item">
                                    <a href="editprogramme.php" class="nav-link" target="_blank"><i class="fas fa-angle-right"></i>Edit Programme
                                        </a>
                                </li>
                                <li class="nav-item">
                                    <a href="removeprogramme.php" class="nav-link" target="_blank"><i class="fas fa-angle-right"></i>Remove Programme
                                        </a>
                                </li>
                            </ul>
                        </li>
                       
                      <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="fa fa-book" aria-hidden="true"></i><span>Add Details</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="all-subjectict.php" class="nav-link"><i class="fas fa-angle-right"></i>Add Department
                                        </a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-facultyict.php" class="nav-link"><i class="fas fa-angle-right"></i>Add Programme
                                        </a>
                                </li>
                                  <li class="nav-item">
                                    <a href="add-levelict.php" class="nav-link"><i class="fas fa-angle-right"></i>Add Level
                                        </a>
                                </li>
                                  <li class="nav-item">
                                    <a href="add-semesterict.php" class="nav-link"><i class="fas fa-angle-right"></i>Add Semester
                                        </a>
                                </li>
                                  <li class="nav-item">
                                    <a href="add-courseict.php" class="nav-link"><i class="fas fa-angle-right"></i>Add Course
                                        </a>
                                </li>
                            </ul>
                        </li>
                      <!--- <li class="nav-item">
                            <a href="all-subject.php" class="nav-link"><i class="fa fa-book" aria-hidden="true"></i><span>Courses</span></a>
                        </li>
                      <!---  <li class="nav-item">
                           <a href="class-routine.php" class="nav-link"><i class="flaticon-calendar"></i><span>Class
                                    Routine</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="student-attendence.php" class="nav-link"><i
                                    class="flaticon-checklist"></i><span>Attendence</span></a>
                        </li----->
                       
                         
                       <!-- <li class="nav-item">
                            <a href="transportv" class="nav-link"><i
                                    class="flaticon-bus-side-view"></i><span>Transport</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="hostel.php" class="nav-link"><i class="flaticon-bed"></i><span>Hostel</span></a>
                      
                       <!-- <li class="nav-item">
                            <a href="messaging.php" class="nav-link"><i
                                    class="flaticon-chat"></i><span>Messeage</span></a>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-menu-1"></i><span>UI Elements</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="notification-alartv" class="nav-link"><i class="fas fa-angle-right"></i>Alart</a>
                                </li>
                                <li class="nav-item">
                                    <a href="button.php" class="nav-link"><i class="fas fa-angle-right"></i>Button</a>
                                </li>
                                <li class="nav-item">
                                    <a href="gridv" class="nav-link"><i class="fas fa-angle-right"></i>Grid</a>
                                </li>
                                <li class="nav-item">
                                    <a href="modal.php" class="nav-link"><i class="fas fa-angle-right"></i>Modal</a>
                                </li>
                                <li class="nav-item">
                                    <a href="progress-bar.php" class="nav-link"><i class="fas fa-angle-right"></i>Progress Bar</a>
                                </li>
                                <li class="nav-item">
                                    <a href="ui-tab.php" class="nav-link"><i class="fas fa-angle-right"></i>Tab</a>
                                </li>
                                <li class="nav-item">
                                    <a href="ui-widget.php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Widget</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="map.php" class="nav-link"><i
                                    class="flaticon-planet-earth"></i><span>Map</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="account-settings.php" class="nav-link"><i
                                    class="flaticon-settings"></i><span>Account</span></a>
                        </li-->
                    </ul>
                </div>
            </div>
        <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>ICT</h3>
                    <ul>
                        <li>
                            <a href="adminict.php">Home</a>
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
                                        <h3>Courses</h3>
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
                                        <h4 class="item-title"></h4>
                                      
                                        <div class="item-number"><?php
                    include "config.php";
                    //$gender="Male";
                    $query="SELECT id FROM course ";
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
                        </div>
                  </div>  </div>
              
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
                    <div class="copyright">© Copyrights <a href="#">Depotter</a> 2021. All rights reserved. Designed by <a
                            href="#">Agertech Solutions and Consult</a></div>
                </footer>
                <!-- Footer Area End Here -->
          
        <!-- Page Area End Here -->
   
    
    <!-- jquery-->
    <script src="jsss/jquery-3.3.1.min.js"></script>
    <!-- Plugins jsss -->
    <script src="jsss/plugins.js"></script>
    <!-- Popper jsss -->
    <script src="jsss/popper.min.js"></script>
    <!-- Bootstrap jsss -->
    <script src="jsss/bootstrap.min.js"></script>
    <!-- Data Table jsss -->
    <script src="jsss/jquery.dataTables.min.js"></script>
    <!-- Smoothscroll jsss -->
    <script src="jsss/jquery.smoothscroll.min.php"></script>
    <!-- Scroll Up jsss -->
    <script src="jsss/jquery.scrollUp.min.js"></script>
    <!-- Custom jsss -->
    <script src="jsss/main.js"></script>

</body>
<?php if($firstname ==""){ 
unset($_SESSION['LOGGEDict']);
echo"<script> location.href='index.php'  </script>";
}
?>

<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/teacher-payment.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 05:35:33 GMT -->
</html>