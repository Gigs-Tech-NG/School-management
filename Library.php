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
         <link rel="stylesheet" type="text/css" href="css41/DT_bootstrap.css">
         <?php  require("includes/constants.php");?><script src="jsss/jquery.js" type="text/javascript"></script>
	<script src="jsss/bootstrap.js" type="text/javascript"></script>
	<script type="text/javascript" charset="utf-8" language="javascript" src="jsss/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf-8" language="javascript" src="jsss/DT_bootstrap.js"></script>
    <!-- Normalize csss -->
    <style>
      .open-button  {
        background-color: #1c87c9;
        -webkit-border-radius: 60px;
        border-radius: 60px;
        border: none;
       
        color: #eeeeee;
        cursor: pointer;
        display: inline-block;
        font-family: sans-serif;
        font-size: 20px;
        padding: 10px 10px;
        text-align: center;
        text-decoration: none;
      }
      @keyframes glowing {
        0% {
          background-color:#000099;
          box-shadow: 0 0 5px #2ba805;
        }
        50% {
          background-color:#3333ff;
          box-shadow: 0 0 20px #49e819;
        }
        100% {
          background-color: #6666ff;
          box-shadow: 0 0 5px #2ba805;
        }
      }
      .open-button  {
        animation: glowing 1300ms infinite;
      }
    
    .open-button {
    color: #1c5169;
    background-color: #86dbff;
    -webkit-transition: .3s all ease-in;
    transition: .3s all ease-in;
    border: 2px solid transparent;
}
    .open-button {
  
  color: white;
  padding: 12px 16px;
  border-radius:60px;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 80px;
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
.form-container input[type=text], .form-container input[type=tel] {
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
.form-container input[type=text]:focus, .form-container input[type=tel]:focus {
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
   </head><body>
       
    <!-- P
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
                           <li class="nav-item">
                            <a href="Eresult.php" class="nav-link"><i class="fas fa-book-reader"></i><span>Check Results</span></a>
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
                    <h3>Library</h3>
                    <ul>
                        <li>
                            <a href="student.php">Home</a>
                        </li>
                        <li>All Library Books</li>
                         <?php 
            include "config.php";
            if(isset($_POST['send'])){
                $name = $firstname;
                $book= mysqli_real_escape_string($connection,$_POST['book']);
                $insert = mysqli_query($connection,"insert into book_request (name,book_requested,status)values('$name','$book','unread')");
                if(!$insert){
                    echo "not sent";
                }else{
                    echo "<h2 style='color:red'>message sent</h2>";
                }
            }
               
               
               
               ?>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Teacher Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <h1 style="font-weight: bolder;text-align:center" > <img src="images/depotter_logo.png"  style="width:; height:;margin:left:%;"><br/>DE POTTER COLLEGE OF HEALTH EDUCATION
                              <p style="font-size:12px; text-align:center">KM 2, Oru/Ijebu-Igbo Road Oru-Ijebu Ogun State.</p></h1>
                        
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>All Books</h3>
                             <h4 style="color:red" ><?php if(!empty ($_SESSION['mesg'])){
                                  echo  ($_SESSION['mesg']);
                              }?></h4>
                            </div>
                          
                        </div>
                       
                        <div class="table-responsive">
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                 <thead>
                                    <tr>
                                       
                                         <th  align="center">S/N</th>
                                        <th  align="center">TItle</th>
                                        <th  align="center">Keywords</th>
                                        <th  align="center">Download</th>
                                        <th  align="center">Remove</th>
                                        
                                        
                                       
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                                                                    <!---<td>
                                           
                                 <div class="form-check">
                                                
                                                <input type="checkbox" class="form-check-input">
                                                
						                  <label class="form-check-label"></label>
                                            </div>
                                                        </td-->           
							   <?php
                        include "config.php";
                        $admitted="";
                          $sn=0;
			  $sn =$sn + 1; 
                        $select="SELECT * FROM book";
                       // $select="SELECT * FROM applicants";
                        $result=mysqli_query($connection,$select);
                        
                        if(!$result){
                            die("failed").mysqli_connect_error();
                        }while($row=mysqli_fetch_array($result)){
                          $BTITLE = $row['BTITLE'];
                           $KEYWORDS= $row['KEYWORDS'];
                           $file= $row['FILE'];
             
                        ?>
                         <td><?php echo   $sn++;?></td>
                                         
                                          <td><?php echo   $BTITLE ;?></td>
                                       
                                   
                                        <td><?php echo  $KEYWORDS ;?></td>
                                         <td><a href="downloadstudent.php?file=<?php echo ($file) ;?>"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                          <td><a href="deletestudent.php?del=<?php echo   $row['id'];?>"><i class="fa fa-trash"  style="color:red" aria-hidden="true"></i></a></td>
                                               
                    
                            
                                        
                                    </tr>
                                    <?php }  ?>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
               <button class="open-button" onclick="openForm()"><i class="fas fa-book-reader"><br/><p style='font-size:14px; color:white;'>new request</p></i></button>
<div class="form-popup" id="myForm">
  <form action="#" method="POST" class="form-container">
    <h3 style="font-size: 24px; font-weight:bold; font-family:monospace;">NEW BOOKS REQUEST </h3>
<p style="font-weight: normal; color:tomato; font-style:italic; font-family:sans-serif; font-size:12px;"></p>
    <label for="email"><b>name</b></label>
    <input type="text" placeholder="Enter Full name" value="<?php echo $firstname;?>" name="fullname" disabled='' required>
    
     <label for="psw"><b>Describe book</b></label>
   <input type="text" placeholder="make a request" name="book" required >

    <button type="submit" class="btn" style="font-size: 15px;" name="send">send request</button>
    <button type="button" class="btn cancel" onclick="closeForm()" style="font-size: 15px;">Close</button>
  </form>
</div>


<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
                <!-- Teacher Table Area End Here -->
                 <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">Depotter</a> 2021. All rights reserved. Designed by <a
                            href="#">Agertech Solutions and Consult</a></div>
                </footer>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
   <script src="jsss/plugins.js"></script>
    <!-- Popper jsss -->
    <script src="jsss/popper.min.js"></script>
    <!-- Bootstrap jsss -->
    <script src="jsss/bootstrap.min.js"></script>
    <!-- Data Table jsss -->
  
    <!-- Smoothscroll jsss -->
    <script src="jsss/jquery.smoothscroll.min.php"></script>
    <!-- Scroll Up jsss -->
    <script src="jsss/jquery.scrollUp.min.js"></script>
    <!-- Custom jsss -->
    <script src="jsss/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/teacher-payment.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 05:35:33 GMT -->
</html>