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
        <!-- bootstrap v4 css -->
    <!-- Normalize csss -->
          
</head>
<style>
     .openBtn {
        display: flex;
        justify-content: left;
      }
      .openButton {
        border: none;
        border-radius: 5px;
        background-color: #1c87c9;
        color: white;
        padding: 14px 20px;
        cursor: pointer;
        position: fixed;
      }
      .loginPopup {
        position: relative;
        text-align: center;
        width: 100%;
      }
      .formPopup {
        display: none;
        position: fixed;
        left: 45%;
        top: 5%;
        transform: translate(-50%, 5%);
        border: 3px solid #999999;
        z-index: 9;
      }
      .formContainer {
        max-width: 300px;
        padding: 20px;
        background-color: #fff;
      }
      .slect {
        width: 100%;
        padding: 15px;
        margin: 5px 0 20px 0;
        border: none;
        background: #eee;
      }
      .slect {
        background-color: #ddd;
        outline: none;
      }
      .formContainer .btn {
        padding: 12px 20px;
        border: none;
        background-color: #8ebf42;
        color: #fff;
        cursor: pointer;
        width: 100%;
        margin-bottom: 15px;
        opacity: 0.8;
      }
      .formContainer .cancel {
        background-color: #cc0000;
      }
      .formContainer .btn:hover,
      .openButton:hover {
        opacity: 1;
      }
    </style>
 <?php  require("includes/constants.php");?>
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
                    <h3>Purchase Token</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Payment Histroy</li>
                    </ul>
                </div>
               
    <div id="pringtdableArea">
         
                <!-- Breadcubs Area End Here -->
                <!-- Student Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                         <div class="openBtn">
      <button class="openButton" onclick="openForm()"><strong>Purchase Token</strong></button>
    </div>    <h1 style="font-weight: bolder;text-align:center" > <img src="images/depotter_logo.png"  style="width:; height:;margin:left:%;"><br/>DEPOTTER COLLEGE OF HEALTH TECHNOLOGY
                              <p style="font-size:12px; text-align:center">KM 2, Oru/Ijebu-Igbo Road Oru-Ijebu Ogun State.</p></h1>
                        
                        <div class="heading-layout1">
                            <div class="item-title">
                              
                            
                                <h3></h3>
                            </div>
                          
                        </div>
                      
                        <div class="table-responsive">
                          <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                <thead>
                                    <tr>
                                       <th align="center">Class</th>
                                         <th align="center">Invoice</th>
                                         <th align="center">Token Fee</th>
                                        <!--<th>Image</th>
                                        <th align="center">Form Fee</th>
                                        
                                        <th>Class</th>
                                        <th>Subject</th>
                                        <th align="center">Acceptance Paid</th---->
                                        
                                         <th  align="center" colspan="2">Token Pin</th>
                                        
                                         
                                    </tr>
                                </thead>
                                 <?php
                                   include "config.php";
                                    $select=mysqli_query($connection,"SELECT * FROM pincheck WHERE email='$email_val' AND matricNo='$matricNo'");
        
         while($row=mysqli_fetch_array($select)){
           $email=$row['email'] ;
            $matric=$row['matricNo'] ;
             $levl=$row['class'] ;  
             $invoice=$row['invoice'] ; 
             $amount=$row['amount']; 
              $pin=$row['pin']; 
                 
            ?>      
                                <tbody>
                                    <tr>
                                                                      <!---<td>
                                        
                                 <div class="form-check">
                                                
                                                <input type="checkbox" class="form-check-input">
                                                
						                  <label class="form-check-label"></label>
                                            </div--->
                              <td><?php echo $levl;?></td>
                                     <td><?php echo $invoice;?></td>
                                          <td><?php if($amount){ echo  '#'.$amount ; }?></td>
                                       
                             <td> <?php echo  $pin ;?></td>
                            
                                    </tr>
                                   
                                   
                                  </tbody>
                                   <?php } ?>
                              </table>
                             
 
   
    <?php
    include"config.php";
    if(isset($_POST['receipt'])){
        $LVL=$_POST['level'];
        $token_number=rand(00000000000,99999999999);
         $invoice=$firstnameS.rand(00000,99999);
        $email_val;$matricNo;$firstname;
        $date= time();
         $select=mysqli_query($connection,"SELECT * FROM pincheck");
        
         while($row=mysqli_fetch_array($select)){
           $email=$row['email'] ;
            $matric=$row['matricNo'] ;
             $levl=$row['class'] ;
         }if(($email == $email_val) && ($LVL == $levl)&& ($matric == $matricNo)){
            $update=mysqli_query($connection,"Update pincheck SET pin='$token_number',xpired='0',Date='$date',invoice='$invoice' WHERE email='$email_val' AND matricNo='$matricNo' AND class='$LVL'");
         }
       else{ 
        $insert=mysqli_query($connection,"INSERT INTO pincheck (pin,xpired,email,matricNo,invoice,class,amount,Date) VALUES('$token_number'
       ,'0','$email_val','$matricNo','$invoice','$LVL','500','$date')");
        
    }
    }
    ?>   <div class="loginPopup">
       <div class="formPopup" id="popupForm">
        <form action="" class="formContainer" method="post">
         
          <label for="email">
            <strong>Select Level</strong>
          </label>
         <select name="level" class="slect" required>
             <option value="" selected="selected">SELECT Class</option>
            <?php  
           $query =$connection->query("SELECT * FROM level"); 
 $rowCount=$query->num_rows;
       if($rowCount > 0){
  while($row=$query->fetch_assoc()){ 
   echo '<option value= "'.$row['name'].'">'.$row['name'].'</option>';
 }
   }else{
     echo '<option value="">dept not found </option>';
   }
 ?></select>
         
          <button type="submit" name="receipt" class="btn">Purchase</button>
          <button type="button" class="btn cancel" onclick="closeForm()">CLOSE</button>
        </form>
      </div>
    </div>
    <script>
      function openForm() {
        document.getElementById("popupForm").style.display = "block";
      }
      function closeForm() {
        document.getElementById("popupForm").style.display = "none";
      }
    </script>
                        </div></div>
                    </div>
                </div>
                <!-- Teacher Payment Area End Here -->
                <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">Depotter</a> 2021. All rights reserved. Designed by <a
                            href="#">Agertech Solutions and Consult</a></div>
                </footer>
            </div>
        </div>
               <script>
		function printPageArea(areaID){
    var printContent = document.getElementById(areaID);
    var WinPrint = window.open('', '', 'width=900,height=650');
    WinPrint.document.write(printContent.innerHTML);
    WinPrint.document.close();
    WinPrint.focus();
    WinPrint.print();
    WinPrint.close();
}
</script>
       
        <!-- Page Area End Here -->
    </div>
  <?php require("includes/footers.php"); ?> 