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
                    <h3>Upload Results</h3>
                    <ul>
                         <li>
                       <a href="adminict.php">Home</a>
                        </li>
 <li>Dashboard</li>
                        <li>Students</li>
                        
                    </ul>
                </div>             

  <?php //require("includes/functions.php"); ?> 
		 <?php
 global $initalsum, $failure ;
// function validate(){
  if(isset($_POST['submit'])){ 
 
   $cousre=htmlspecialchars($_POST['course']);
   $session=htmlspecialchars($_POST['session']);
   $faculty=htmlspecialchars($_POST['faculty']);
   $dept=htmlspecialchars($_POST['dept']);
   $level=htmlspecialchars($_POST['level']);
   $semester=htmlspecialchars($_POST['semester']);
   $_SESSION['semester']= $semester;
 
  if(empty($session)){
     $failure= "Please enter current session."; 
  
   }else {
       $_SESSION['course']=$cousre;
       $_SESSION['session']=$session;
       $_SESSION['faculty']=$faculty;
      
       $_SESSION['dept']=$dept;
       $_SESSION['level']=$level;
        $_SESSION['semester']=$semester;
       echo "<script> location.href='uploadstudentresult.php' </script>";
   }
  }
  
     ?>
                   <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            
      
               <!--<h4 style="color:red">Uplo COURSES</h4--->
          
                            
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
   <?php     
 $query =$connection->query("SELECT * FROM faculties"); 
 $rowCount=$query->num_rows;
 ?>  

     
<form action="" method="post" class="regform" role="form" >
 
  <div class="container" style="width:100%">
                            <div class="row">
            
                                
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    CURRENT SESSION (YEAR):<span style="color:red">*</span>
                   
  <?php
   $already_selected_value = '- Select current Session-';
   $earliest_year = 1950;

print '<select name="session" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;" required>';
echo ' <option   value="" selected="selected">- Select current Session-</option>';  
foreach (range(date('Y'), $earliest_year) as $x) {
     print '<option value="'.($x-1).'/'.$x.'"'.($x === $already_selected_value ? ' selected="selected"' : '').'>'.($x-1).'/'.$x.'</option>';
}
print '</select>';
?> 
<div class="help-block with-errors">
    </div>
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>FACULTY *</label>
            <select  id="faculty" name="faculty" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;" required>
            <option value="">Select dept</option>
            <?php  
       if($rowCount > 0){
  while($row=$query->fetch_assoc()){ 
   echo '<option value= "'.$row['id'].'">'.$row['name'].'</option>';
 }
   }else{
     echo '<option value="">dept not found </option>';
   }
 ?>
   </select>
                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>DEPARTMENT *</label>
        <select id="dept"  name="dept" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12"  style=" height:50px;" required>
       <option value="">Select dept first </option>
       
         </select>
                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Level *</label>
                         <select id="level"  name="level" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;" required>
                            <option value="">Select programme first </option>
                           </select>
                    <div class="help-block with-errors"></div>
                                </div>
                                   <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>SEMESTER *</label>
                             <select  name="semester" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;" required>
                    <option value="">Select level first </option>
                    <?php  
                 
 $query =$connection->query("SELECT * FROM semester"); 
 $rowCount=$query->num_rows;
 
       if($rowCount > 0){
  while($row=$query->fetch_assoc()){ 
   echo '<option>'.$row['name'].'</option>';
 }
   }
 ?>
                          </select> 
                       </div>
                       <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>COURSE *</label>
                                <select id="semester" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:200px;font-size:16px" name="course" required>
                                        <option value="">Select semester first </option>
                                    </select> 
                        </div>
                                <div class="col-md-6 form-group"></div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" name="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Upload Result(S)</button>
                                     <div class="help-block with-errors"></div>
                                    <!--<button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button--->
                                </div>
                            </div>
                             </div>
             
                </div>
                <!-- Add Class Area End Here -->
                   <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">Depotter</a> 2021. All rights reserved. Designed by <a
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
    <!-- state and local govt jsss -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="jsss/lga.min.js"></script>

       <script>
$(document).ready(function(){
$('#faculty').on('change',function(){
   $facultyName=$(this).val();
   if($facultyName){
      $.ajax({
          type:'POST',
          url:'fetchData.php',
          data:'faculty='+$facultyName,
          success:function(html){
           console.log(html);
           $('#dept').html(html);
          },
      
      });
   } else{
       $('#dept').html('<option value="">Select faculty first </option>');
   }
});
}); 
</script>
 <script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
    </script>
     

<script>
$(document).ready(function(){
$('#faculty').on('change',function(){
   $facultyName=$(this).val();
   if($facultyName){
      $.ajax({
          type:'POST',
          url:'fetchData.php',
          data:'faculty='+$facultyName,
          success:function(html){
           console.log(html);
           $('#dept').html(html);
          },
      
      });
   } else{
       $('#dept').html('<option value="">Select dept first </option>');
   }
});

$('#dept').on('change',function(){
   $deptName=$(this).val();
   if($deptName){
      $.ajax({
          type:'POST',
          url:'fetchData.php',
          data:'dept='+$deptName,
          success:function(html){
           console.log(html);
           $('#level').html(html);
          },
      
      });
   } else{
       $('#level').html('<option value="">Select programme first </option>');
   }
});

$('#level').on('change',function(){
   $levelName=$(this).val();
   if($levelName){
      $.ajax({
          type:'POST',
          url:'fetchData.php',
          data:'level='+$levelName,
          success:function(html){
           console.log(html);
           $('#semester').html(html);
          },
      
      });
   } else{
       $('#semester').html('<option value="">Select level first </option>');
   }
});

$('#semester').on('change',function(){
   $semesterName=$(this).val();
   if($semesterName){
      $.ajax({
          type:'POST',
          url:'fetchData.php',
          data:'semester='+$semesterName,
          success:function(html){
           console.log(html);
           $('#course').html(html);
          },
      
      });
   } else{
       $('#course').html('<option value="">Select semester first </option>');
   }
});
}); 
</script>  
<link rel="stylesheet" type="text/css" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css"> 
   <link rel="stylesheet" type="text/css" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker3.min.css"> 
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script> 
</body>
</html>
<?php if($firstname ==""){ 
unset($_SESSION['LOGGEDict']);
echo"<script> location.href='index.php'  </script>";
}
?>
 <?php //require("includes/footer.php"); ?> 