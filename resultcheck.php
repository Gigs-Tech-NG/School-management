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
                   <?php include("try1.php");?> <?php include("includes/functions.php");?>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
         <!-- Header Menu Area Start Here -->
        <div class="navbar navbar-expand-md header-menu-one bg-light">
            <div class="nav-bar-header-one">
                <div class="header-logo">
                    <a href="student.php">
                        <img src="images/depotter_logo.png" width="150"  alt="logo">
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
                                <h5 class="item-title"><?php echo  $firstname ;?></h5>
                                <span>Student</span>
                            </div>
                            <div class="admin-img">
                                <img src="img/<?php echo $passport;?>" alt="Admin" width="30px" height="15px">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title"><?php echo  $firstname ;?></h6>
                            </div>
                            <div class="item-content">
                                <ul class="settings-list">
                                    
                                    <li><a href="studentportal.php"><i class="flaticon-user"></i>My Profile</a></li>
                                   
                                    <li><a href="accountset.php"><i class="flaticon-gear-loading"></i>Account Settings</a></li>
                                    <li><a href="logout.php"><i class="flaticon-turn-off"></i>Log Out</a></li>
                                </ul>
                            </div>
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
                        <a href=""><img src="images/log2.png" alt="logo"></a>
                    </div>
               </div>
                <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
               <div class="mobile-sidebar-header d-md-none">
                    <div class="header-logo">
                        <img src="images/log2.png" alt="logo"/>
                    </div>
               </div>
                <div class="sidebar-menu-content">
                    <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                        <li class="nav-item ">
                            <a href="#" class="nav-link"><i class="fa fa-tachometer" aria-hidden="true"></i><span>Dashboard</span></a>
                            
                        </li>
                      
                       
                        <li class="nav-item sidebar-nav-item">
                            <a href="" class="nav-link"> <i class="fa fa-users" aria-hidden="true"></i><span>Admission</span></a>
                            <ul class="nav sub-group-menu">
                                
                                <li class="nav-item">
                                    <a href="studentadmission.php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Admission Status</a>
                                </li>
                                <li class="nav-item">
                                    <a href="admisionletter.php" class="nav-link" target="_blank"><i class="fas fa-angle-right"></i>Print Admission letter
                                        </a>
                                </li>
                               
                            </ul>
                        </li>
                            
                         <li class="nav-item sidebar-nav-item">
                            <a href="" class="nav-link">  <i class="fas fa-file-invoice-dollar text-orange"></i><span>Busery</span></a>
                            <ul class="nav sub-group-menu">
                                
                                <li class="nav-item">
                                    <a href="schoolfeeprint.php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Print School Fee Receipt</a>
                                </li>
                                <li class="nav-item">
                                    <a href="acceptanceprint.php" class="nav-link" target="_blank"><i class="fas fa-angle-right"></i>Print Acceptance Fee
                                        </a>
                                </li>
                               
                            </ul>
                        </li>
                            
                       <!-- <li class="nav-item">
                            <a href="myscore.php" class="nav-link"><i class="	fas fa-book-open" aria-hidden="true"></i><span>My score</span></a>
                        </li--->
                       
                         <li class="nav-item">
                            <a href="hostell.php" class="nav-link" target="_blank">  <i class="fas fa-hotel text-red"></i></i><span>Book For Hostel</span></a>
                        </li>
                         <li class="nav-item">
                            <a href="Library.php" class="nav-link"><i class="fas fa-book-reader"></i><span>E-Library</span></a>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="" class="nav-link">  <i class="fas fa-file-invoice-dollar text-orange"></i><span>Courses</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="COURSES.php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Register Courses</a>
                                </li>
                                <li class="nav-item">
                                    <a href="registercourse.php" class="nav-link"><i class="fas fa-angle-right"></i>Registered Courses
                                        </a>
                                </li>
                                  <li class="nav-item">
                                    <a href="dropcourse.php" class="nav-link"><i class="fas fa-angle-right"></i>Drop Courses
                                        </a>
                                </li>
                               
                            </ul>
                        </li>
                            <li class="nav-item sidebar-nav-item">
                            <a href="" class="nav-link"><i class="fas fa-poll text-orange"></i><span>Result(s)</span></a>
                             <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="CHECKResuts.php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Check Results</a>
                                </li>
                                <li class="nav-item">
                                    <a href="cgpa.php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>CGPA</a>
                                </li>
                                 </ul>
                        </li>
                          <li class="nav-item">
                            <a href="EClass.php" class="nav-link" target="_blank"><i class="fas fa-video text-red"></i><span>E-Class</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
             <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Semester Result</h3>
                    <ul>
                         <li>
                       <a href="student.php">Home</a>
                        </li>
 <li>Dashboard</li>
                        <li>Result</li>
                        
                    </ul>
                </div>             

 
                   <div class="card height-auto">
                    <div class="card-body">
                       
                        <div class="item-img" style="text-align:center;border-radius:50%">
                             <div id="print"> 
                                <!--<img src="img/<?php echo $passport;?>" alt="student" width="15%" height="5%">
                               <img src="images/resultheader.png" class="img-responsive" style="width:100%;" -->
                                 <h1 style="font-weight: bolder;text-align:center" > <img src="images/depotter_logo.png"  style="width:; height:;margin:left:%;"><br/>DEPOTTER COLLEGE OF HEALTH EDUCATION
                              <p style="font-size:12px; text-align:center">KM 2, Oru/Ijebu-Igbo Road Oru-Ijebu Ogun State.</p></h1>

                                     
 <?php
 global $initalsum, $failure ;
  if(isset($_POST['submit'])){ 
 ?>                          
<?php
    $matricno=htmlspecialchars($_POST['matricno']);
   $session=htmlspecialchars($_POST['session']);
   $faculty=htmlspecialchars($_POST['faculty']);
   $dept=htmlspecialchars($_POST['dept']);
   $level=htmlspecialchars($_POST['level']);
   $semester=htmlspecialchars($_POST['semester']);
   $_SESSION['semester']=$semester;
   
      
   if(empty($matricno)){
     $failure = "Please enter your matric no."; 
   }else if(empty($session)){
     $failure = "Please enter current session."; 
   } else if(empty($faculty)){
     $failure = "Please enter faculty."; 
   }else if(empty($dept)){
     $failure = "Please enter your dept."; 
   }else if(empty($level)){
     $failure = "Please enter your level."; 
   } else if(empty($semester)){
     $failure = "Please enter semester."; 
   }elseif( $_SESSION['semester'] == 'FIRST TERM') {
     ?>
        <div class="table-responsive">
                            <table class="table data-table text-nowrap"  id="studentresultdetail">
                                <!--table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example" margin="-20%"-->
                                
                                    <tr>
               
        <td class='tblwidth'>
        <?php 
   $result=mysqli_query($connection,"select DISTINCT faculties.name as facultyname, depts.name  as deptname, level.name as levelname,courseregister.discipline as discipline,
 courseregister.fullname as fullname, courseregister.matricno as matricno, courseregister.session as sessionname
from  courseregister join faculties on faculties.id= courseregister.faculty 
join depts on depts.id= courseregister.dept join level on level.id=courseregister.level  
join course on course.id=courseregister.course
 where  courseregister.matricno='".$_POST['matricno']."' AND courseregister.faculty='".$_POST['faculty']."' AND courseregister.dept='".$_POST['dept']."' AND courseregister.level='".$_POST['level']."' AND courseregister.session='".$_POST['session']."'");        
    if(!$result){
     $failure = "Information not matched";
    }else{
    while($data=mysqli_fetch_array($result)){
    //$picture=$data['picture'];
      echo "<P>".
        "<span class='stddetals'>FULL NAME: </span>"."<br/>".
        "<span class='stddetals'>MATRIC.NO: </span>  "."<br/>".
        "<span class='stddetals'>CLASS:</span>  "."<br/>".  
       "<span class='stddetals'>PROGRAMME:</span>  "."<br/>".
       "<span class='stddetals'>LEVEL: </span>  "."<br/>".
      // "<span class='stddetals'>COURSE OF STUDY: </span>  " ."<br/>". 
       "<span class='stddetals'>SESSION:  </span>"."<br/>".
       "<span class='stddetals'>TERM: </span>  "."<br/>".
      "</P>";
      echo"  </td> "; 
      echo"  <td class='tblwidth'> ". 
         "<span class='stddetals' >" .$name=$data['fullname']."</span><br/>".
        " <span class='stddetals'>" .$name=$data['matricno']."</span><br/>".
         " <span class='stddetals'>" .$name=$data['facultyname']."</span><br/>".  
       " <span class='stddetals'>" .$name=$data['deptname']."</span><br/>".
       " <span class='stddetals'>" .$name=$data['levelname']."</span><br/>".
     //  " <span class='stddetals'>".$name=$data['discipline']."</span><br/>". 
       " <span class='stddetals'>" .$name=$data['sessionname']."</span><br/>".
       "<span class='stddetals'>" .$_SESSION['semester']."</span><br/>".
     " </td> ";
    
    echo "<br/>";
     echo"  <td class='tblwidth'> "; 
 // echo "<img src='$picture' alt=\"My profile picture\" class='prof_img'>"."<br>"."<h3 style='color: white;'>". $name=$data['firstname']." ".$data['lastname']."</h3>";
 }
 ?>  
 
  <img src="img/<?php echo $passport;?>" alt=\"My profile picture\"   width="25%">         
 

   </td>   

 </tr> 
  </table> 
    <br/><br/>
       
  <?php     
$sql=mysqli_query($connection,"select  faculties.name as facultyname, courseregister.courseRegId as CRId, 
 depts.name  as deptname, level.name as levelname,course.name as coursename,
course.coursetitle as coursetile, course.creditunit as creditunit, courseregister.*
from  courseregister join faculties on faculties.id= courseregister.faculty 
join depts on depts.id= courseregister.dept join level on level.id=courseregister.level 
join course on course.id=courseregister.course
 where  courseregister.matricno='".$_POST['matricno']."' AND courseregister.faculty='".$_POST['faculty']."' AND courseregister.dept='".$_POST['dept']."' AND courseregister.level='".$_POST['level']."' AND courseregister.session='".$_POST['session']."'");
 //$norow=mysqli_num_rows($sql);
   if(mysqli_num_rows($sql) == 0) {
     $failure = "You have not register any course for the selected session and semester, please register your course(s)";
   } else{
  echo '             <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                               
                                                <th>COURSE TITLE</th>
                                               
                                               <th>Mid Text (40%)</th> 
                                                 <th>EXAM SCORE (60%)</th> 
                                                  <th>TOTAL (100%)</th>
                                                 <th>GRADE</th> 
                                                  <th>REMARK</th>    
                                        </tr>
                                    </thead>
                                    <tbody>  '; 
   ?>
                                        
 <?php  
 $initalsum= 0;      
$sn=0;
while($row=mysqli_fetch_array($sql))
{  
$sn =$sn + 1;   
  
?>


                                        <tr>
                                            <td><?php echo $sn;?></td>
                                             
                                           
                                              <td><?php echo htmlentities($row['coursetile']);?></td>
                                            
                                                <td><?php echo $ca= htmlentities($row['cascore']);?></td> 
                                               <td><?php echo $exam =htmlentities($row['examscore']);?></td>  
                                                <td><?php echo  $total=$exam + $ca; ?></td>
                                               <td><?php echo grade($total);?></td>
                                                <td><?php echo remark($total);?></td> 
                                                 
                                            
                                        </tr>
                                        
                                    
                                      
                                      
<?php 
}
$sn++;
$i=$sn-1; 
} ?>  
  <?php
  } 
       
 } 
 elseif( $_SESSION['semester'] == 'SECOND TERM') {
     ?>
        <div class="table-responsive">
                            <table class="table data-table text-nowrap"  id="studentresultdetail">
                                <!--table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example" margin="-20%"-->
                                
                                    <tr>
               
        <td class='tblwidth'>
        <?php 
   $result=mysqli_query($connection,"select DISTINCT faculties.name as facultyname, depts.name  as deptname, level.name as levelname,courseregister.discipline as discipline,
 courseregister.fullname as fullname, courseregister.matricno as matricno, courseregister.session as sessionname
from  courseregister join faculties on faculties.id= courseregister.faculty 
join depts on depts.id= courseregister.dept join level on level.id=courseregister.level  
join course on course.id=courseregister.course
 where  courseregister.matricno='".$_POST['matricno']."' AND courseregister.faculty='".$_POST['faculty']."' AND courseregister.dept='".$_POST['dept']."' AND courseregister.level='".$_POST['level']."' AND courseregister.session='".$_POST['session']."'");        
    if(!$result){
     $failure = "Information not matched";
    }else{
    while($data=mysqli_fetch_array($result)){
    //$picture=$data['picture'];
      echo "<P>".
        "<span class='stddetals'>FULL NAME: </span>"."<br/>".
        "<span class='stddetals'>MATRIC.NO: </span>  "."<br/>".
        "<span class='stddetals'>CLASS:</span>  "."<br/>".  
       "<span class='stddetals'>PROGRAMME:</span>  "."<br/>".
       "<span class='stddetals'>LEVEL: </span>  "."<br/>".
      // "<span class='stddetals'>COURSE OF STUDY: </span>  " ."<br/>". 
       "<span class='stddetals'>SESSION:  </span>"."<br/>".
       "<span class='stddetals'>TERM: </span>  "."<br/>".
      "</P>";
      echo"  </td> "; 
      echo"  <td class='tblwidth'> ". 
         "<span class='stddetals' >" .$name=$data['fullname']."</span><br/>".
        " <span class='stddetals'>" .$name=$data['matricno']."</span><br/>".
         " <span class='stddetals'>" .$name=$data['facultyname']."</span><br/>".  
       " <span class='stddetals'>" .$name=$data['deptname']."</span><br/>".
       " <span class='stddetals'>" .$name=$data['levelname']."</span><br/>".
     //  " <span class='stddetals'>".$name=$data['discipline']."</span><br/>". 
       " <span class='stddetals'>" .$name=$data['sessionname']."</span><br/>".
       "<span class='stddetals'>" .$_SESSION['semester']."</span><br/>".
     " </td> ";
    
    echo "<br/>";
     echo"  <td class='tblwidth'> "; 
 // echo "<img src='$picture' alt=\"My profile picture\" class='prof_img'>"."<br>"."<h3 style='color: white;'>". $name=$data['firstname']." ".$data['lastname']."</h3>";
 }
 ?>  
 
  <img src="img/<?php echo $passport;?>" alt=\"My profile picture\"   width="25%">         
 

   </td>   

 </tr> 
  </table> 
    <br/><br/>
       
  <?php     
$sql=mysqli_query($connection,"select  faculties.name as facultyname, courseregister.courseRegId as CRId, 
 depts.name  as deptname, level.name as levelname,course.name as coursename,
course.coursetitle as coursetile, course.creditunit as creditunit, courseregister.*
from  courseregister join faculties on faculties.id= courseregister.faculty 
join depts on depts.id= courseregister.dept join level on level.id=courseregister.level 
join course on course.id=courseregister.course
 where  courseregister.matricno='".$_POST['matricno']."' AND courseregister.faculty='".$_POST['faculty']."' AND courseregister.dept='".$_POST['dept']."' AND courseregister.level='".$_POST['level']."' AND courseregister.session='".$_POST['session']."'");
 //$norow=mysqli_num_rows($sql);
   if(mysqli_num_rows($sql) == 0) {
     $failure = "You have not register any course for the selected session and semester, please register your course(s)";
   } else{
  echo '             <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                               
                                                <th>COURSE TITLE</th>
                                               
                                               <th>Mid Text (40%)</th> 
                                                 <th>EXAM SCORE (60%)</th> 
                                                  <th>TOTAL (100%)</th>
                                                 <th>GRADE</th> 
                                                  <th>REMARK</th>    
                                        </tr>
                                    </thead>
                                    <tbody>  '; 
   ?>
                                        
 <?php  
 $initalsum= 0;      
$sn=0;
while($row=mysqli_fetch_array($sql))
{  
$sn =$sn + 1;   
  
?>


                                        <tr>
                                            <td><?php echo $sn;?></td>
                                             
                                             
                                              <td><?php echo htmlentities($row['coursetile']);?></td>
                                            
                                                <td><?php echo $ca= htmlentities($row['second_resusult_text']);?></td> 
                                               <td><?php echo $exam =htmlentities($row['second_resusult_exam']);?></td>  
                                                <td><?php echo  $total=$exam + $ca; ?></td>
                                               <td><?php echo grade($total);?></td>
                                                <td><?php echo remark($total);?></td> 
                                                 
                                            
                                        </tr>
                                        
                                    
                                      
                                      
<?php 
}
$sn++;
$i=$sn-1; 
} ?>  
  <?php
  } 
       
 } 
  elseif( $_SESSION['semester'] == 'THIRD TERM') {
     ?>
        <div class="table-responsive">
                            <table class="table data-table text-nowrap"  id="studentresultdetail">
                                <!--table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example" margin="-20%"-->
                                
                                    <tr>
               
        <td class='tblwidth'>
        <?php 
   $result=mysqli_query($connection,"select DISTINCT faculties.name as facultyname, depts.name  as deptname, level.name as levelname,courseregister.discipline as discipline,
 courseregister.fullname as fullname, courseregister.matricno as matricno, courseregister.session as sessionname
from  courseregister join faculties on faculties.id= courseregister.faculty 
join depts on depts.id= courseregister.dept join level on level.id=courseregister.level  
join course on course.id=courseregister.course
 where  courseregister.matricno='".$_POST['matricno']."' AND courseregister.faculty='".$_POST['faculty']."' AND courseregister.dept='".$_POST['dept']."' AND courseregister.level='".$_POST['level']."' AND courseregister.session='".$_POST['session']."'");        
    if(!$result){
     $failure = "Information not matched";
    }else{
    while($data=mysqli_fetch_array($result)){
    //$picture=$data['picture'];
      echo "<P>".
        "<span class='stddetals'>FULL NAME: </span>"."<br/>".
        "<span class='stddetals'>MATRIC.NO: </span>  "."<br/>".
        "<span class='stddetals'>CLASS:</span>  "."<br/>".  
       "<span class='stddetals'>PROGRAMME:</span>  "."<br/>".
       "<span class='stddetals'>LEVEL: </span>  "."<br/>".
      // "<span class='stddetals'>COURSE OF STUDY: </span>  " ."<br/>". 
       "<span class='stddetals'>SESSION:  </span>"."<br/>".
       "<span class='stddetals'>TERM: </span>  "."<br/>".
      "</P>";
      echo"  </td> "; 
      echo"  <td class='tblwidth'> ". 
         "<span class='stddetals' >" .$name=$data['fullname']."</span><br/>".
        " <span class='stddetals'>" .$name=$data['matricno']."</span><br/>".
         " <span class='stddetals'>" .$name=$data['facultyname']."</span><br/>".  
       " <span class='stddetals'>" .$name=$data['deptname']."</span><br/>".
       " <span class='stddetals'>" .$name=$data['levelname']."</span><br/>".
     //  " <span class='stddetals'>".$name=$data['discipline']."</span><br/>". 
       " <span class='stddetals'>" .$name=$data['sessionname']."</span><br/>".
       "<span class='stddetals'>" .$_SESSION['semester']."</span><br/>".
     " </td> ";
    
    echo "<br/>";
     echo"  <td class='tblwidth'> "; 
 // echo "<img src='$picture' alt=\"My profile picture\" class='prof_img'>"."<br>"."<h3 style='color: white;'>". $name=$data['firstname']." ".$data['lastname']."</h3>";
 }
 ?>  
 
  <img src="img/<?php echo $passport;?>" alt=\"My profile picture\"   width="25%">         
 

   </td>   

 </tr> 
  </table> 
    <br/><br/>
       
  <?php     
$sql=mysqli_query($connection,"select  faculties.name as facultyname, courseregister.courseRegId as CRId, 
 depts.name  as deptname, level.name as levelname,course.name as coursename,
course.coursetitle as coursetile, course.creditunit as creditunit, courseregister.*
from  courseregister join faculties on faculties.id= courseregister.faculty 
join depts on depts.id= courseregister.dept join level on level.id=courseregister.level 
join course on course.id=courseregister.course
 where  courseregister.matricno='".$_POST['matricno']."' AND courseregister.faculty='".$_POST['faculty']."' AND courseregister.dept='".$_POST['dept']."' AND courseregister.level='".$_POST['level']."' AND courseregister.session='".$_POST['session']."'");
 //$norow=mysqli_num_rows($sql);
   if(mysqli_num_rows($sql) == 0) {
     $failure = "You have not register any course for the selected session and semester, please register your course(s)";
   } else{
  echo '             <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                              
                                                <th>COURSE TITLE</th>
                                               
                                               <th>Mid Text (40%)</th> 
                                                 <th>EXAM SCORE (60%)</th> 
                                                  <th>TOTAL (100%)</th>
                                                 <th>GRADE</th> 
                                                  <th>REMARK</th>    
                                        </tr>
                                    </thead>
                                    <tbody>  '; 
   ?>
                                        
 <?php  
 $initalsum= 0;      
$sn=0;
while($row=mysqli_fetch_array($sql))
{  
$sn =$sn + 1;   
  
?>


                                        <tr>
                                            <td><?php echo $sn;?></td>
                                             
                                            
                                              <td><?php echo htmlentities($row['coursetile']);?></td>
                                            
                                                <td><?php echo $ca= htmlentities($row['third_resusult_text']);?></td> 
                                               <td><?php echo $exam =htmlentities($row['third_resusult_exam']);?></td>  
                                                <td><?php echo  $total=$exam + $ca; ?></td>
                                               <td><?php echo grade($total);?></td>
                                                <td><?php echo remark($total);?></td> 
                                                 
                                            
                                        </tr>
                                        
                                    
                                      
                                      
<?php 
}
$sn++;
$i=$sn-1; 
} ?>  
  <?php
  } 
       
 } 
}
 ?>   
 <?php
 if(!$failure)              
                     echo '<tr>
                      <td></td>
                      <td></td>   <td><strong>TOTAL REGISTERED SUBJECTS:</strong></td>';
                      ?>
                      <td><?php if(!(empty($i))){ echo $i ;} ?></td> <td></td> <td></td> <td></td> 
                    </tr>
      
                                    </tbody>
                                </table>
                               
                      <?php 
    if(!empty($failure)){
     echo "<span class='btn btn-warning'>" .$failure."</span>"; 
    }
     if(!empty($success)){
     } 
     ?>
    
     
        </div>  </div>
        
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
 <?php require("includes/footers.php"); ?> 