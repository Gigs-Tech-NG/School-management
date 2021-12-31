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
        </div>        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">

            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h2>Hostel List</h2>
                    <ul>
                        <li>
                            <a href="student.php">Home</a>
                        </li>
                        <li>Hostel</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <div class="row">
                    <!-- Add Room Area Start Here -->
                    <div class="col-4-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Book New Room</h3>
                                    </div>
               
                                </div>
                     <?php
    	include('config.php');
        //include "update.php";
          
    	$query=mysqli_query($db,"select * from hostel");
    	$row=mysqli_fetch_array($query);
        
    ?>
                                                      
                                      
                                
          
                            </div>
                        </div>
                    </div>
                    <!-- Add Room Area End Here -->
                    <!-- All Room List Area Start Here -->
                    <div class="col-8-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Hostel Room Lists</h3>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-expanded="false">...</a>

                                     
                                    </div>
                                </div>
                                
                                <div class="table-responsive">
                                    <table class="table display data-table text-nowrap">
                                               <thead>
                                                <tr>
                                                     <th>HOSTEL ROOM NUMBER</th>
                                                     
                                                    
                                                     
                                                    
                                                     <th>ACTION</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                
    				<?php
    					include('config.php');
    				//	$bunking = ($row['bunk1'] &&  $row['bunk2'] &&  $row['bunk3'] &&  $row['bunk4']);
    				$bunks = (bunk1 && bunk2 && bunk3 && bunk4);
    	
    					$chosen = "chosen";
    					$query=mysqli_query($connection,"SELECT * FROM hostel where bunk1 ='bunk1'OR bunk2='bunk2' OR bunk3='bunk3' OR bunk4='bunk4' ");
    					while($row=mysqli_fetch_array($query)){
    						?>
    						<tr>
    							<td style="width:5%"><?php 
    						
    							echo "Room". $row['id']. " is  available"; 
    					
    							?></td>
                                
          
  							
                            
                                
                                                               
                                
    							
       	       <td ><a href="booking.php?id=<?php echo $row['id']; ?>">Book  Hostel</a>	</td>
    						
    						</tr>
    						<?php
    					}
    				?>
    			</tbody>
    		</table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- All Room List Area End Here -->
                </div>
                <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">De Potter</a> 2021. All rights reserved. Designed by <a
                            href="#">Agertech Solutions and Consult</a></div>
                </footer>
                <!-- Footer Area End Here -->
            </div>
        </div>
         <!-- Page Area End Here -->
    </div>
     <?php require("includes/footers.php"); ?> 