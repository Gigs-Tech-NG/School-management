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
                    </li> <?php require("includes/functions.php"); ?> 
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
            <?php
             include "config.php";
     if(isset($_POST['addcourse'])){
   
    $coursecode=strtoupper(htmlspecialchars($_POST['coursecode']));
   $semesterid=htmlspecialchars($_POST['semester']);
   $courstitle=strtoupper(htmlspecialchars($_POST['coursetitle'])); 
   $creditunit=htmlspecialchars($_POST['creditunit']); 
   $lectureday1=htmlspecialchars($_POST['lectureday1']);
   $lectureday2=htmlspecialchars($_POST['lectureday2']);
   
   $sel=mysqli_query($connection,"SELECT * FROM course WHERE name='$coursecode' AND semester_id = '$semesterid' AND coursetitle= '$courstitle' AND creditunit = '$creditunit' ");
  $norow=mysqli_num_rows($sel);
   if($norow >=1) {
     $failure = $courstitle."(" . $coursecode .") already exist";
   } else{
   
   $query=mysqli_query($connection,"INSERT INTO course(name,semester_id,coursetitle,creditunit,lectureday1,lectureday2) VALUES('$coursecode','$semesterid','$courstitle','$creditunit','$lectureday1','$lectureday2')");
   if($query) {
     $success =$courstitle."(" . $coursecode .") inserted successfully";
   } else{
       $failure =  "course insertion failed".mysqli_error($connection); 
   }
          
    }
    
    }
 
  ?>
 
     
   <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Course</h3>
                    <ul>
                        <li>
                            <a href="adminict.php">Home</a>
                        </li>
                        <li>Add New Course</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add New Teacher Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add New Course</h3>
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
                    <label for="form_name">DEPARTMENT</label>
                    <select  id="faculty" name="faculty" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;" required>
 <option value="">Select Department</option>
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
                      <label>PROGRAMME *</label>
                                    <select class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;" id="dept"  name="dept" required>
                                        <option value="">Select dept first * </option>
                            </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div></div>
             <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                     <label> LEVEL *</label>
                                    <select class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;" id="level"  name="level" required>
                                        <option value="">Select programme first *</option> <div class="help-block with-errors"></div></select>
                </div>
            </div></div>
             <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                     <label> SEMESTER *</label>
                                    <select class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12"  style=" height:50px;" id="semester" name="semester" required="required">
                                        <option value="">Select level first *</option> <div class="help-block with-errors"></div></select>
                </div>
            </div></div>
               <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                     <label>Course(s) you have already entered for the selected data*</label>
                                    <select class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" disabled="disabled" multiple="multiple" style=" height:150px;" id="course">
                                        <option value="">Select level first *</option> <div class="help-block with-errors"></div></select>
                </div>
            </div></div>
             <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_message">COURSE CODE *</label>
                     <input type="text" name="coursecode" placeholder="ADD COURSE CODE" class="form-control" required="required" >
                    <div class="help-block with-errors"></div>
                </div>
            </div></div>
              <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_message">COURSE TITLE *</label>
                     <input type="text" name="coursetitle" placeholder="ADD COURSE TITLE" class="form-control"  required="required">
                    <div class="help-block with-errors"></div>
                </div>
            </div></div>
             <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_message">CREDIT UNIT *</label>
                     <input type="text" name="creditunit" placeholder="ADD CREDIT UNIT" class="form-control"  required="required">
                    <div class="help-block with-errors"></div>
                </div>
            </div></div>
             <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_message">FIRST LECTURE DAY *</label>
                     <select id="gender"  name="lectureday1" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:35px;" required="required">
                        <option value=""> Please enter the preferred day and time for the Lecture </option>
                        <option value="Monday, 9:00 - 11:00">Monday, 9:00AM - 11:AM </option>
                        <option value="Monday, 11:00 - 13:00">Monday, 11:00AM - 1:00PM</option>
                        <option value="Monday, 13:30 - 15:30">Monday, 1:30PM - 3:30PM </option>
                        <option value="Tuesday, 9:00 - 11:00">Tuesday, 9:00AM - 11:AM </option>
                        <option value="Tuesday, 11:00 - 13:00">Tuesday, 11:00AM - 1:00PM</option>
                        <option value="Tuesday, 13:30 - 15:30">Tuesday, 1:30PM - 3:30PM </option>
                        <option value="Wednesday, 9:00 - 11:00">Wednesday, 9:00AM - 11:AM </option>
                        <option value="Wednesday, 11:00 - 13:00">Wednesday, 11:00AM - 1:00PM</option>
                        <option value="Wednesday, 13:30 - 15:30">Wednesday, 1:30PM - 3:30PM </option>
                        <option value="Thursday, 9:00 - 11:00">Thursday, 9:00AM - 11:AM </option>
                        <option value="Wednesday, 11:00 - 13:00">Thursday, 11:00AM - 1:00PM</option>
                        <option value="Wednesday, 13:30 - 15:30">Thursday, 1:30PM - 3:30PM </option>
                       <option value="Friday, 9:00 - 11:00">Friday, 9:00AM - 11:AM </option>
                        <option value="Friday, 11:00 - 13:00">Friday, 11:00AM - 1:00PM</option>
                        <option value="Friday, 13:30 - 15:30">Friday, 1:30PM - 3:30PM </option>
                       
                        </select>         <div class="help-block with-errors"></div>
                </div>
            </div></div>
                   <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_message"> SECOND LECTURE DAY   *</label>
                     <select id="genderx"  name="lectureday2" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:35px;" >
                      <option value=""> Please enter the preferred day and time for the Lecture </option>
                        <option value="Monday, 9:00 - 11:00">Monday, 9:00AM - 11:AM </option>
                        <option value="Monday, 11:00 - 13:00">Monday, 11:00AM - 1:00PM</option>
                        <option value="Monday, 13:30 - 15:30">Monday, 1:30PM - 3:30PM </option>
                        <option value="Tuesday, 9:00 - 11:00">Tuesday, 9:00AM - 11:AM </option>
                        <option value="Tuesday, 11:00 - 13:00">Tuesday, 11:00AM - 1:00PM</option>
                        <option value="Tuesday, 13:30 - 15:30">Tuesday, 1:30PM - 3:30PM </option>
                        <option value="Wednesday, 9:00 - 11:00">Wednesday, 9:00AM - 11:AM </option>
                        <option value="Wednesday, 11:00 - 13:00">Wednesday, 11:00AM - 1:00PM</option>
                        <option value="Wednesday, 13:30 - 15:30">Wednesday, 1:30PM - 3:30PM </option>
                        <option value="Thursday, 9:00 - 11:00">Thursday, 9:00AM - 11:AM </option>
                        <option value="Wednesday, 11:00 - 13:00">Thursday, 11:00AM - 1:00PM</option>
                        <option value="Wednesday, 13:30 - 15:30">Thursday, 1:30PM - 3:30PM </option>
                       <option value="Friday, 9:00 - 11:00">Friday, 9:00AM - 11:AM </option>
                        <option value="Friday, 11:00 - 13:00">Friday, 11:00AM - 1:00PM</option>
                        <option value="Friday, 13:30 - 15:30">Friday, 1:30PM - 3:30PM </option>
                       
                        </select>        <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" name="addcourse" class="btn btn-success btn-send" value="ADD COURSE">
            </div>
        </div>
   </div>
</form>
    </div>
    
                </div>
                <!-- Add New Teacher Area End Here -->
               <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">De potter</a> 2021. All rights reserved. Designed by <a
                            href="#">Agertech Solutions and Consult</a></div>
                </footer>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
  
          
 
   <?php require("includes/footers.php"); ?>