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
                            <marquee behavior="scroll" direction="left" style="">DEPOTTER COLLEGE OF HEALTH</marquee>
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
                                    <li><a href="myprofile.php"><i class="flaticon-user"></i>My Profile</a></li>
                                    
                                    <li><a href="profileedit.php"><i class="flaticon-gear-loading"></i>Account Settings</a></li>
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
                            <a href="#" class="nav-link"><i class="fa fa-home " ></i></i><span>Home</span>
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
                        <li class="nav-item sidebar-nav-item">
                            <a href="abouts" class="nav-link"><i class="fa fa-address-card" aria-hidden="true"></i></i><span>Payment Record</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="admin.php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Applicants Payment Record</a>
                                </li>
                                 <li class="nav-item">
                                    <a href="acceptance.php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Acceptance Fee Payment Record</a>
                                </li>
                                <li class="nav-item">
                                    <a href="nd1record.php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Year1 Payment Record</a>
                                </li>
                                <li class="nav-item">
                                    <a href="nd2record.php" class="nav-link"><i class="fas fa-angle-right"></i>
                                    Year2 Payment Record</a>
                                </li>
                                 <li class="nav-item">
                                    <a href="hnd1record.php" class="nav-link"><i class="fas fa-angle-right"></i>
                                    Year3 Payment Record</a>
                                </li>
                                 <li class="nav-item">
                                    <a href="hnd2record.php" class="nav-link"><i class="fas fa-angle-right"></i>
                                    Year4 Payment Record</a>
                                </li>
                            </ul>
                        </li>
                         <li class="nav-item">
                            <a href="vcourse.php" class="nav-link"><i class="fa fa-book" aria-hidden="true"></i><span>View Courses</span></a>
                        </li>
                        <!--li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="fa fa-university" aria-hidden="true"></i><span>Admission Status</span></a>
                             <ul class="nav sub-group-menu">
                            <li class="nav-item">
                                    <a href="adminissionstatus.php" class="nav-link"><i class="fas fa-angle-right"></i>Admission Records
                                        </a>
                                </li>
                                <li class="nav-item">
                                    <a href="admissionprint.php" class="nav-link"><i class="fas fa-angle-right"></i>Printout Students Admission Page
                                    </a>
                                </li>
                               
                            </ul> 
                        </li---->
                         <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="fa fa-graduation-cap" aria-hidden="true"></i><span>Students</span></a>
                            <ul class="nav sub-group-menu">
                            <li class="nav-item">
                                    <a href="all-student.php" class="nav-link"><i class="fas fa-angle-right"></i>All Students
                                        </a>
                                </li>
                               
                               
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="fa fa-users" aria-hidden="true"></i><span>Staff</span></a>
                            <ul class="nav sub-group-menu">
                            <li class="nav-item">
                                    <a href="all-teacher.php" class="nav-link"><i class="fas fa-angle-right"></i>All Staff
                                        </a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-teacher.php" class="nav-link"><i class="fas fa-angle-right"></i>Add New Staff
                                    </a>
                                </li>
                               
                            </ul>
                        </li>
                        <!------<li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-technological"></i><span>Account</span></a>
                            
                        </li-->
                      <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="fa fa-book" aria-hidden="true"></i><span>Add Details</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="all-subject.php" class="nav-link"><i class="fas fa-angle-right"></i>Add Department
                                        </a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-faculty.php" class="nav-link"><i class="fas fa-angle-right"></i>Add Programme
                                        </a>
                                </li>
                                  <li class="nav-item">
                                    <a href="add-level.php" class="nav-link"><i class="fas fa-angle-right"></i>Add Level
                                        </a>
                                </li>
                                  <li class="nav-item">
                                    <a href="add-semester.php" class="nav-link"><i class="fas fa-angle-right"></i>Add Semester
                                        </a>
                                </li>
                                  <li class="nav-item">
                                    <a href="add-course.php" class="nav-link"><i class="fas fa-angle-right"></i>Add Course
                                        </a>
                                </li>
                            </ul>
                        </li>
                                       <li class="nav-item">
                            <a href="Stafff.php" class="nav-link"><i class="fa fa-book" aria-hidden="true"></i><span>Lecture</span></a>
                        </li>
                       <li class="nav-item">
                            <a href="adlect.php" class="nav-link"><i class="fa fa-book" aria-hidden="true"></i><span>View lectures</span></a>
                        </li>
                      <!---  <li class="nav-item">
                           <a href="class-routine.php" class="nav-link"><i class="flaticon-calendar"></i><span>Class
                                    Routine</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="student-attendence.php" class="nav-link"><i
                                    class="flaticon-checklist"></i><span>Attendence</span></a>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="fa fa-bookmark" aria-hidden="true"></i><span>Exam</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="exam-schedule.php" class="nav-link"><i class="fas fa-angle-right"></i>Exam
                                        Schedule</a>
                                </li>
                                <li class="nav-item">
                                    <a href="exam-grade.php" class="nav-link"><i class="fas fa-angle-right"></i>Exam
                                        Grades</a>
                                </li>
                            </ul>
                        </li---->
                          <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="fa fa-book" aria-hidden="true"></i><span>E-Library</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="all-book.php" class="nav-link"><i class="fas fa-angle-right"></i>All Book</a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-book.php" class="nav-link"><i class="fas fa-angle-right"></i>Add New Book
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="fa fa-book" aria-hidden="true"></i><span>News and Events</span></a>
                            <ul class="nav sub-group-menu">
                                    <li class="nav-item">
                                    <a href="add_news.php" class="nav-link"><i class="fas fa-angle-right"></i>Add  News </a>
                                </li>
                                <li class="nav-item">
                                    <a href="view_news.php" class="nav-link"><i class="fas fa-angle-right"></i>View  News </a>
                                </li>
                                <li class="nav-item">
                                    <a href="delete_news.php" class="nav-link"><i class="fas fa-angle-right"></i>Delete News
                                    </a>
                                </li>
                            </ul>
                        </li>
                       <!-- <li class="nav-item">
                            <a href="transportv" class="nav-link"><i
                                    class="flaticon-bus-side-view"></i><span>Transport</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="hostel.php" class="nav-link"><i class="flaticon-bed"></i><span>Hostel</span></a>
                        </li-->
                        <li class="nav-item">
                            <a href="notice-board.php" class="nav-link"><i class="fa fa-comment" aria-hidden="true"></i><span>Notice</span></a>
                        </li>
                        
                          <li class="nav-item">
                            <a href="hostel.php" class="nav-link"><i class="fa fa-bed" aria-hidden="true"></i><span>Add New Hostel</span></a>
                        </li>
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
                          <!--li class="nav-item sidebar-nav-item">
                                <a href="admindue.php" class="nav-link"><i class="fa fa-user-md" aria-hidden="true"></i><span>Miiscellaneous Due</span>
                            </a>  
       
                        
        
                                <!--<li class="nav-item">
                                    <a href="all-parents.php" class="nav-link"><i class="fas fa-angle-right"></i>Our
                                        Courses</a>
                                </li>
                                <!--<li class="nav-item">
                                    <a href="parents-details.php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Parents Details</a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-parents.php" class="nav-link"><i class="fas fa-angle-right"></i>Add
                                        Parent</a>
                                </li-->
                    
                        </li>
                    </ul>
                </div>
            </div>

          <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Details</h3>
                    <ul>
                         <li>
                       <a href="administration.php">Home</a>
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
                            
      
               <h4 style="color:red"><?php //echo validate(); ?></h4>
          
                            
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
                                    <input type="tel" placeholder="" name="phone" value="<?php echo $phone ;?>" disabled="" class="form-control">
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
                    <div class="copyright">?? Copyrights <a href="#">De Potter</a> 2021. All rights reserved. Designed by <a
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
    <!-- Scroll Up jsss -->
    <script src="jsss/jquery.scrollUp.min.js"></script>
    <!-- Custom jsss -->
    <script src="jsss/main.js"></script>
  <?php if($firstname ==""){ 
unset($_SESSION['LOGGED']);
echo"<script> location.href='index.php'  </script>";
}?>
</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/add-class.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 05:35:34 GMT -->
</html>