<?php
session_start();
?>
<?php
if(( $_SESSION['LOGGEDpin']) !="true"){
   echo"<script> location.href='Eresult.php'  </script>";
}

$_SESSION['timeout'] = time(); 
if (time()-$_SESSION['timeout'] > 600){
   unset($_SESSION['timeout']);
  // echo "<script> location.href='forget.php' <script>";
}
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
                                    <a href="admisionletter.php" class="nav-link"><i class="fas fa-angle-right"></i>Print Admission letter
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
                                    <a href="acceptanceprint.php" class="nav-link"><i class="fas fa-angle-right"></i>Print Acceptance Fee
                                        </a>
                                </li>
                               
                            </ul>
                        </li>
                            
                       <!-- <li class="nav-item">
                            <a href="myscore.php" class="nav-link"><i class="	fas fa-book-open" aria-hidden="true"></i><span>My score</span></a>
                        </li--->
                       
                         <li class="nav-item">
                            <a href="hostell.php" class="nav-link">  <i class="fas fa-hotel text-red"></i></i><span>Book For Hostel</span></a>
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
                                            class="fas fa-angle-right"></i>REPORT SHEET</a>
                                </li>
                                 </ul>
                        </li>
                          <li class="nav-item">
                            <a href="EClass.php" class="nav-link"><i class="fas fa-video text-red"></i><span>E-Class</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
             <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3> REPORT CARD</h3>
                    <ul>
                         <li>
                       <a href="student.php">Home</a>
                        </li>
 <li>Dashboard</li>
                        <li> REPORT CARD</li>
                        
                    </ul>
                </div>             

  <div class="card height-auto">
                    <div class="card-body">
                       
        <?php
 global $initalsum, $failure ,  $cgpa;
  if(isset($_POST['check'])){ 
 ?>                
                        <div class="item-img" style="text-align:center;border-radius:50%">
                             <div id="print"> 
                                <!--<img src="img/<?php //echo $passport;?>" alt="student" width="15%" height="5%"-->
                             <h1 style="font-weight: bolder;text-align:center" > <img src="images/depotter_logo.png"  style="width:; height:;margin:left:%;"><br/>DEPOTTER COLLEGE OF HEALTH EDUCATION
                              <p style="font-size:12px; text-align:center">KM 2, Oru/Ijebu-Igbo Road Oru-Ijebu Ogun State.</p></h1>

                                     
 <?php
    $matricno=htmlspecialchars($_POST['matricno']);
  
      
   if(empty($matricno)){
     $failure = "Please enter your matric no."; 
   }else {
     ?>

        <div class="table-responsive">
                            <table class="table data-table text-nowrap"  id="studentresultdetail">
                                <!--table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example" margin="-20%"-->
                                
                                    <tr>
               
        <td class='tblwidth'>
     <?php
       //$matricno=$_SESSION['matricNo'];
    $select_profile="SELECT * FROM application WHERE matricNo='$matricno'";
    $result=mysqli_query($connection,$select_profile);     
    if(!$result){
     $failure = "Information not matched";
    }else{
    while($data=mysqli_fetch_array($result)){
    //$picture=$data['picture'];
         echo "<P>".
        "<span class='stddetals'>FULL NAME: </span>"."<br/>".
        "<span class='stddetals'>MATRIC.NO: </span>  "."<br/>".
        "<span class='stddetals'>DEPARTMENT:</span>  "."<br/>".  
       "<span class='stddetals'>PROGRAMME:</span>  "."<br/>".
       "<span class='stddetals'>LEVEL: </span>  "."<br/>".
        
      "</P>";
       echo"  </td> "; 
      echo"  <td class='tblwidth'> ". 
         "<span class='stddetals' >" .$name=$data['surname']." ".$name=$data['middlename']." ".$name=$data['lastname']."</span><br/>".
        " <span class='stddetals'>" .$name=$data['matricNo']."</span><br/>".
         " <span class='stddetals'>" .$name=$data['faculty']."</span><br/>".  
       " <span class='stddetals'>" .$name=$data['department']."</span><br/>".
       " <span class='stddetals'>" .$name=$data['level']."</span><br/>".
        
     " </td> ";
      echo "<br/>";
     echo"  <td class='tblwidth'> "; 
     }
 ?>  
 
  <img src='img/<?php echo $passport;?>' alt=\"My profile picture\"   width="25%">         
 

   </td>   

 </tr> 
  </table> 
    <br/><br/>
  <?php     
  if(isset($_POST['check'])){
  $term=' ';
  //$leves=$_POST['level'];
  
$sql=mysqli_query($connection,"select  faculties.name as facultyname, courseregister.courseRegId as CRId, 
 depts.name  as deptname, level.name as levelname,
semester.name as semestername, course.name as coursename,
course.coursetitle as coursetile, course.creditunit as creditunit, courseregister.*
from  courseregister join faculties on faculties.id= courseregister.faculty 
join depts on depts.id= courseregister.dept join level on level.id=courseregister.level 
join semester on semester.id=courseregister.semester 
join course on course.id=courseregister.course
 where  courseregister.matricno='".$_POST['matricno']."' AND courseregister.class='".$_POST['class']."' AND courseregister.third_term !='$term' AND courseregister.examscore !=0 AND courseregister.examscore !=''  AND courseregister.cascore !=0 AND courseregister.cascore !=''
  ");
 //$norow=mysqli_num_rows($sql);
   if(mysqli_num_rows($sql) == 0) {
     $failure = " RESULTS NOT YET OUT";
   } else{
  echo '             <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                                <th>COURSE CODE</th>
                                                <th>COURSE TITLE</th>
                                            

                                                 <th>First Term (100%)</th> 
                                                <th>Second Term (100%)</th> 
                                                 <th>Mid Text (40%)</th>
                                                 <th>Exam (60%)</th>
                                                 <th>Third Term (100%)</th> 
                                                 <th>Average Score (100%)</th>
                                                 <th>GRADE</th> 
                                                 <th>Total Average Score (100%)</th>    
                                        </tr>
                                    </thead>
                                    <tbody>  '; 
   ?>
                                        
 <?php  
 $initalsum= 0;
 $initalgp= 0;      
$sn=0;
while($row=mysqli_fetch_array($sql))
{  
   
    $exam =htmlentities($row['examscore']);
   $ca= htmlentities($row['cascore']);
    $sfirst=$row['first_term'];
     $second=$row['second_term'];
      $thirdt=$row['third_term'];
   $totallavverage=round((($sfirst + $second + $thirdt)/3),2);
$sn =$sn + 1;     
?>


                                        <tr>
                                            <td><?php echo $sn;?></td>
                                             
                                             <td><?php echo htmlentities($row['coursename']);?></td>
                                              <td><?php echo htmlentities($row['coursetile']);?></td>
                                             
                                               <td><?php
                                                echo  $sfirst; ?></td> 
                                               <td><?php  
                                                echo  $second ;?></td> 
                                                <td> <?php echo $ca;?></td>
                                                <td> <?php echo  $exam;?></td>
                                                <td><?php  
                                                echo  $total=$exam + $ca ;?></td>
                                                   <td><?php echo  $totallavverage ; ?></td>
                                               <td><?php echo grade($totallavverage);?></td>
                                               <td><?php echo cgpa($totallavverage);?></td> 
                                         <?php //$finalsum =$row['creditunit'];
                                              //$initalsum +=$finalsum;
                                                $initalgp = cgpa($totallavverage);
                                                $cgpa +=round($initalgp,2);
                                              ?>            
                                           
                                        </tr>
                                        
                                    
                                      
                                      
<?php 
}
$sn++; 
$i=$sn-1;
}
  } 
 ?>  
   
 <?php
 if(!$failure)              
                     echo '<tr>
                      <td></td>
                      <td></td>   <td><strong>TOTAL REGISTERED SUBJECTS:</strong></td>';
                      ?>
                      <td><?php if(!(empty($i))){ echo $i ;} ?></td><td></td><td></td><td></td><td></td><td></td><td></td><td><?php echo "TOTAL:  ". $cgpa."%" ; ?></td> 
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
      
           <div class="row">  
     <div class="col-md-6"> 
       <div class="form-group">   
          <h4> <?php 
             
              if($initalsum !=0 || $cgpa !=0){
                   $finalCgpa=  $cgpa / $i;
          echo "Average Total Score: = ". round($finalCgpa,2)."%";
           
           ?><br/>
           <?php echo "REMARK: ". finalRemark($finalCgpa); 
             }else{
            echo " No Result found"; 
             } 
           ?>
          </h4>   
      </div>
   </div> 
    </div>
      </div>  
       </div>
      <?php
 } 
  }
  }
 ?> 
 <div class="row">  
     <div class="col-md-6"> 
       <div class="form-group">   
          <input type="button" value="Printout" onclick="javascript:printDiv('print')" />   
      </div>
   </div> 
    </div> 
  <form action="" method="post" role="form">
<div class="controls">
           <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                
                    <input id="form_name" type="hidden" name="matricno" class="form-control" value="<?php echo $matricNo ;?> " >
                    <div class="help-block with-errors"></div>
                </div>
            </div> </div>
             <div class="row">
             <div class="col-md-4">
             
                <div class="form-group">
                 <label>Select Class *</label>
                   <select id="level"  name="class" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;" required>
                            <option value="">Select Class</option>  <option value="PRIMARY1">PRIMARY1</option> 
                             <option value="PRIMARY2">PRIMARY2</option>  <option value="PRIMARY3">PRIMARY3</option> 
                              <option value="JSS1">JSS1</option>  <option>JSS2</option> <option>JSS3</option>  
                              <option value="SS1">SS1</option> <option value="SS2">SS2</option> <option value="SS3">SS3</option>    
                                 <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <input id="form_name" type="submit" name="check" value="CONTINUE" class="btn btn-success btn-send" class="form-control" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div>
        </div>
      
</form> 

               
        
       
         <!-- Add Class Area End Here -->
                   <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">Depotter</a> 2021. All rights reserved. Designed by <a
                            href="#">Agertech Solutions and Consult</a></div>
                </footer>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
 

 <?php require("includes/footers.php"); ?> 