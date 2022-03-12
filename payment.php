<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
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
         <link rel="stylesheet" href="csss/normalize.css">
         <?php  require("includes/constants.php");?>
   <style>
/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=email], .form-container input[type=tel] {
  width: 95%;
  padding: 12px;
  margin: 5px 0 22px 0;
  border: 2px ;
  border-radius: 5px ;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=tel] {
  width: 100%;
  padding: 12px;
  margin: 5px 0 22px 0;
  border: 2px ;
  border-radius: 5px ;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=email]:focus, .form-container input[type=tel]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: midnightblue;
  color: white;
  padding: 13px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
        <!-- bootstrap v4 css -->
    <!-- Normalize csss -->
          
              <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
         <!-- Header Menu Area Start Here -->
        <div class="navbar navbar-expand-md header-menu-one bg-light">
            <div class="nav-bar-header-one">
                <div class="header-logo">
                    <a href="student.php">
                        <img src="images/depotter_log.png" width="150"  alt="logo">
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
                            <marquee behavior="scroll" direction="left" style="">DE POTTER COLLEGE OF HEALTH</marquee>
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
                                <img src="img/<?php echo $passport;?>" alt="student" width="30px" height="15px">
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
                                   </li>
                                <li class="nav-item">
                                    <a href="hostelreceipt.php" class="nav-link" target="_blank"><i class="fas fa-angle-right"></i>Print Hostel receipt
                                        </a>
                                </li>
                               
                            </ul>
                        </li>
                            
                       <!-- <li class="nav-item">
                            <a href="myscore.php" class="nav-link"><i class="	fas fa-book-open" aria-hidden="true"></i><span>My score</span></a>
                        </li--->
                       
                         <!--li class="nav-item">
                            <a href="hostell.php" class="nav-link" target="_blank">  <i class="fas fa-hotel text-red"></i></i><span>Book For Hostel</span></a>
                        </li-->
                         <li class="nav-item">
                            <a href="Library.php" class="nav-link"><i class="fas fa-book-reader"></i><span>E-Library</span></a>
                        </li>
                            <li class="nav-item">
                            <a href="viewtime.php" class="nav-link" target="_blank"><i class="fas fa-book-reader"></i><span>View Timetable</span></a>
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
                         <li class="nav-item">
                            <a href="payment.php" class="nav-link"><i class="fas fa-book-reader"></i><span>Payment</span></a>
                        </li>
                           <li class="nav-item">
                            <a href="Eresult.php" class="nav-link"><i class="fas fa-book-reader"></i><span>Check Results</span></a>
                        </li>
                          <li class="nav-item">
                            <a href="EClass.php" class="nav-link" target="_blank"><i class="fas fa-video text-red"></i><span>E-Class</span></a>
                        </li>
                     <li class="nav-item sidebar-nav-item">
                            <a href="" class="nav-link">  <i class="fas fa-file-invoice-dollar text-orange"></i><span>Miscellaneous Fee</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link" class="open-button" onclick="openForm()"><i
                                            class="fas fa-angle-right"></i>Request For Hostel</a>
                                            <!--button class="open-button" onclick="openForm()">Hostel Request</button-->
                                </li>
                                <li class="nav-item">
                                    <a href="grad.php" class="nav-link"><i class="fas fa-angle-right"></i>Graduating Fee
                                        </a>
                                </li>
                                  <li class="nav-item">
                                    <a href="extra.php" class="nav-link"><i class="fas fa-angle-right"></i>Carry Over
                                        </a>
                                </li>
                                <li class="nav-item">
                                    <a href="trans.php" class="nav-link"><i class="fas fa-angle-right"></i>Transcript Fee
                                        </a>
                                </li>
                               
                            </ul>
                     
                </div>
            </div>
            </div>
            <?php
    if(isset($_POST['addept'])){
   
   
   $level=htmlspecialchars($_POST['level']);
   $faculty=htmlspecialchars($_POST['term']);
    $session=htmlspecialchars($_POST['session']);

   if(!empty($faculty)) {
       $_SESSION['paymed']="true";
       $_SESSION['level']=$level;
         $_SESSION['year']=$session;
        $_SESSION['faculty']=$faculty;
      echo"<script> location.href='makepayment.php'  </script>";
   } else{
      $failure =  "Please fill the field"; 
   }
    
  //  }
    
    }
?> 
 
     
   <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>YEAR1</h3>
                    <ul>
                        <li>
                            <a href="busary.php">Home</a>
                        </li>
                        <li>Select Department</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add New Teacher Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>PAYMENT</h3>
                                 <h3 style="color:red">
                                    <?php 
   // if(!empty($_SESSION['pending'])){
     //   echo ($_SESSION['pending']);
      //  unset($_SESSION['pending']);
  //  }
?>
  </h3>         
                                    
  <?php 
    if(!empty($failure)){
     echo "<span class='btn btn-danger'>" .$failure."</span>"; 
    }
     if(!empty($success)){
     echo "<span class='btn btn-success'>" .$success."</span>";
     } 
     ?>          
        
                                
                            </div>
               
 
                </div>
         <form id="contact-form" method="post" action="" role="form">
             <div class="controls">
               <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Session</label>
              CURRENT SESSION (YEAR):<span style="color:red">*</span>
                   
  <?php
   $already_selected_value = '- Select current Session-';
   $earliest_year = 1950;

print '<select name="session" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;" onblur="sessionValidation(this)" required>';
echo ' <option  value="">- Select current Session-</option>';  
foreach (range(date('Y'), $earliest_year) as $x) {
    print '<option value="'.($x-1).'/'.$x.'"'.($x === $already_selected_value ? ' selected="selected"' : '').'>'.($x-1).'/'.$x.'</option>';
}
print '</select>';
echo '<div id="session"></div>';
?>
             
             
              <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
              <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Class</label>
                <select name="level" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;" required>
 <option value="">Select Class</option>
   <?php  
                 
 $query =$connection->query("SELECT * FROM LEVEL"); 
 $rowCount=$query->num_rows;
 
       if($rowCount > 0){
 while($row=$query->fetch_assoc()){ 
   $faculted=$row['id'];
   $named=$row['name'];
  echo '<option value= "'.$row['name'].'">'.$row['name'].'</option>'; }
 }else{
 echo '<option value="">Level not found </option>';
  }
 ?>    
   </select>    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                
                    <label for="form_name">Term</label>
                    <select  name="term" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;" required>
 <option value="">Select Term</option>
  <option value="FIRST TERM">FIRST TERM</option>
   <option value="SECOND TERM">SECOND TERM</option>
    <option value="THIRD TERM">THIRD TERM</option>
   
   </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        
            
            <div class="col-md-12">
                <input type="submit" name="addept" class="btn btn-success btn-send" value="Continue">
            </div>
        </div>
   </div>
</form>
    </div>
                </div>
                <!-- Add New Teacher Area End Here -->
               <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">Depotter</a> 2021. All rights reserved. Designed by <a
                            href="#">Agertech Solutions and Consult</a></div>
                </footer>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
  
          
 
   <?php require("includes/footers.php"); ?>