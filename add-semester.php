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
          <?php  require("includes/studentMenu.php");?> <?php require("includes/functions.php"); ?> 
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
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="far fa-clock"></i>
                            <div class="item-title d-md-none text-16 mg-l-10">Notification 01</div>
                            <span><?php include "config.php";
                            $select=mysqli_query($connection,"select * from posjss3nd where status=''");
                            $count = mysqli_num_rows($select);
                             echo ($count);
                        
                            ?></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header"style='font-size:14px; font-weight:bolder;'>school fee payment notice<br>
                            <span>click to confirm</span>
                               
                            </div>
                            <div class="item-content">
                                <div class="media">
                                    <div class="media-body space-sm">
                                                                                <?php include "config.php";
                            $select=mysqli_query($connection,"select * from posjss3nd where status=''");
                            $count = mysqli_num_rows($select);
                             //echo ($count);
                            if(mysqli_num_rows($select)>0)while($row=mysqli_fetch_array($select)){
                        
                            ?>
                                        <div class="item-title">
                                          <a href='confirming.php?id=<?php echo $row['id']; ?>'>  <?php echo $row['name']; ?> 
                                         
                                         <span style=' font-size:10.5px; color: red;'><?php echo $row['name']; ?> has paid #<?php echo $row['fee'];?></span>
                                         <hr></hr>
                                        </a>
                                         <?php }?>
                                             
                                        
                                        </div>
                              
                               
                               
                            </div>
                        </div>
                    </li>
                    <!-----sch fee payment notice-->
                    
                       <li class="navbar-item dropdown header-notification">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="far fa-bell"></i>
                            <div class="item-title d-md-none text-16 mg-l-10">Notification 02</div>
                            <span><?php include "config.php";
                            $select=mysqli_query($connection,"select * from book_request where status='unread'");
                            $count = mysqli_num_rows($select);
                             echo ($count);
                        
                            ?></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header" style='font-size:16px;'>NEW BOOK REQUEST<br><p><b>click to mark as read</b></p>
                                </div>
                            <div class="item-content">
                               
                                <!--div class="media">
                                    <div class="item-icon bg-orange">
                                       
                                        <!--i class="fas fa-calendar-alt"></i>
                                    </div-->
                                    
                                   
                                    <div class="media-body space-sm">
                                        <?php include "config.php";
                            $select=mysqli_query($connection,"select * from book_request where status='unread'");
                            $count = mysqli_num_rows($select);
                             //echo ($count);
                            if(mysqli_num_rows($select)>0)while($row=mysqli_fetch_array($select)){
                        
                            ?>
                           
                            <input type="hidden" name='id' value="<?php echo $row['id'];?>" />
        <a href='markread.php?id=<?php echo $row['id'];?>'>  
        <div  class="post-title" "item-icon bg-orange" style='font-size: 14.5px; color:blue; '><i class="fas fa-book-reader"></i> <?php echo $row['name']; ?> </div>
                                         
                                         <span style=' font-size:10.5px; color: red;'><?php echo $row['book_requested'];?></span>
                                         </a>
                                         <hr></hr>
                                        
                                         <?php }?>
                                        </div>
                                </div>
                        
                            </div>
                        </div>
                    </li>
                    
                </ul>
            
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
            <?php
             include "config.php";
    if(isset($_POST['submit'])){
   
   
   $level=htmlspecialchars($_POST['level']);
  // $dept=ucwords($deptt);
   $semesr=htmlspecialchars($_POST['addsemester']); 
  $semester=ucwords($semesr);
   $sel_dept=mysqli_query($connection,"SELECT * FROM semester WHERE name='$semester'");
   //$norow=mysqli_num_rows($sel_dept);
  if(!$sel_dept){
      
  }while($row=mysqli_fetch_assoc($sel_dept)){
      $smter=$row['name'];
      $levl=$row['level_id'];
  }
   if($levl == $level && $smter == $semester ) {
     $failure = $semester.' '. " already exist in the selected department";
   } else{ 
   
   $query=mysqli_query($connection,"INSERT INTO semester (name,level_id) VALUES('$semester','$level')");
   if($query) {
     $success = $semester .' '." inserted successfully";
   } else{
      $failure =  "semester insertion failed".mysqli_error($connection); 
   }
    
    }
    
    }
?> 
 
     
   <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Term</h3>
                    <ul>
                        <li>
                            <a href="administration.php">Home</a>
                        </li>
                        <li>Add New Term</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add New Teacher Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add New Term</h3>
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
                    <label for="form_name">Class</label>
                    <select  id="faculty" name="faculty" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;" required>
 <option value="">Select Class</option>
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
                     <label>AVAILABLE TERMS *</label>
                                    <select class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" disabled="disabled" multiple="multiple" style=" height:150px;" id="semester">
                                        <option value="">Select level first *</option> <div class="help-block with-errors"></div></select>
                </div>
            </div></div>
             <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_message">ADD TERM</label>
                     <select  id="faculty" name="addsemester" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" required>
 <option value="">----Select Term---</option>
 <option>FIRST TERM</option><option>SECOND TERM</option><option>THIRD TERM</option></select>
                             <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" name="submit" class="btn btn-success btn-send" value="ADD TERM">
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