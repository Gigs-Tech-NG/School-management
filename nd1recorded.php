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
     <script src="jsss/jquery.js" type="text/javascript"></script>
	<script src="jsss/bootstrap.js" type="text/javascript"></script>
	    <link rel="stylesheet" href="csss/normalize.css">
    <!-- Main csss -->
    <link rel="stylesheet" href="csss/main.css">
    <!-- Bootstrap csss -->
    <link rel="stylesheet" href="csss/bootstrap.min.css">
    <!-- Fontawesome csss -->
    <link rel="stylesheet" href="csss/all.min.css">
    <!-- Flaticon csss -->
    <link rel="stylesheet" href="fonts/flaticon.css">
    <!-- Animate csss -->
    <link rel="stylesheet" href="csss/animate.min.css">
    <!-- Data Table csss -->
    <link rel="stylesheet" href="csss/jquery.dataTables.min.css">
    <!-- Custom csss -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernize jsss -->
    <script src="jsss/modernizr-3.6.0.min.js"></script>
	
	<script type="text/javascript" charset="utf-8" language="javascript" src="jsss/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf-8" language="javascript" src="jsss/DT_bootstrap.js"></script>
     <?php  require("includes/busry.php");?>
    <!-- Normalize csss -->
    <style>
      .button {
        background-color: #1c87c9;
        -webkit-border-radius: 60px;
        border-radius: 40px;
        border: none;
        color: #eeeeee;
        cursor: pointer;
        display: inline-block;
        font-family: sans-serif;
        font-size: 20px;
        padding: 5px 15px;
        text-align: center;
        text-decoration: none;
      }
      @keyframes glowing {
        0% {
          background-color: #2ba805;
          box-shadow: 0 0 5px #2ba805;
        }
        50% {
          background-color: #49e819;
          box-shadow: 0 0 20px #49e819;
        }
        100% {
          background-color: #2ba805;
          box-shadow: 0 0 5px #2ba805;
        }
      }
      .button {
        animation: glowing 1300ms infinite;
      }
    </style>
   </head><body>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
         <!-- Header Menu Area Start Here -->
         
        <?php  include "headers/busar_header.php";  ?> 
        <!-- Header Menu Area End Here -->
         <div class="dashboard-page-one">
     
             <?php  include"side_bars/buser_sidebar.php"; ?>
           <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    
                    <ul>
                        <li>
                            <a href="administration.php">Home</a>
                        </li>
                        
                    </ul>
                </div>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Dashboard</h3>
                    <ul>
                        <li>
                            <a href="administration.php">Home</a>
                        </li>
                        <li>Students</li>
                    </ul>
                </div>
                  <!-- Sidebar Area End Here -->
            <form method="post" action="javascript:void(0);">
	<button class='button' name="print" onclick="printPageArea('printableArea')">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
  <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
  <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
</svg></button>
	</form>
    <div id="printableArea">
          
            
                <!-- Breadcubs Area End Here -->
                <!-- Student Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                         <h1 style="font-weight: bolder;text-align:center" > <img src="images/depotter_logo.png"  style="width:; height:;margin:left:%;"><br/>DE POTTER COLLEGE OF HEALTH TECHNOLOGY
                              <p style="font-size:12px; text-align:center">KM 2, Oru/Ijebu-Igbo Road Oru-Ijebu Ogun State.</p></h1>
                         <div class="heading-layout1">
                            <div class="item-title">
                                <?php
    					include('config.php');
    					$quer=mysqli_query($connection,"SELECT fee FROM application WHERE level=100");
                        $total = 0;
    					while($row=mysqli_fetch_array($quer)){
    					   
    					   $total += $row['fee'];
                          
    					   }
                           $income =  $total; 
    						?>
    						      <?php
    					include('config.php');
    					$quer1=mysqli_query($connection,"SELECT balance FROM application WHERE level=100");
                        $total = 0;
    					while($row=mysqli_fetch_array($quer1)){
    					   
    					   $total += $row['balance'];
                          
    					   }
                           $income1 =  $total; 
    						?>
                                
                            </div>
                           <!---<div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" 
                                data-toggle="dropdown" aria-expanded="false">...</a>
        
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div--->
                        </div>
                        <!---<form class="mg-b-20">
                            <div class="row gutters-8">
                                
                                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Name ..." class="form-control">
                                </div>
                                
                                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                    <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                </div>
                            </div>
                        </form---->
                        <div class="table-responsive">
                           	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                <thead>
                                    <tr>
                                       
                                         <th align="center">S/N</th>
                                        <!--<th>Image</th-->
                                        <th align="center">Name</th>
                                        <th align="center">Gender</th>
                                        <!--<th>Class</th>
                                        <th>Subject</th--->
                                        <th align="center">Amount Paid</th>
                                        <th align="center">Debt</th>
                                        <th align="center">School Fee</th>
                                         <th align="center">Level</th>
                                        
                                        <!--th align="center">E-mail</th-->
                                        <th align="center">Payment Date</th>
                                        
                                       
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
                        $sn=0;
                        $sn=$n+1;
                        $select="SELECT * FROM application WHERE level=100";
                       // $select="SELECT * FROM applicants";
                        $result=mysqli_query($connection,$select);
                        
                        if(!$result){
                            die("failed").mysqli_connect_error();
                        }while($row=mysqli_fetch_array($result)){
                          $firstname = $row['surname'];
                            $amountpaid = $row['fee'];
                             $balance = $row['balance'];
                               $paymode = $row['paymode'];
              $lastname = $row['lastname'];
              $middle = $row['middlename'];
              $fullnames = $firstname . ' ' . $middle. ' ' . $lastname;
                $date=$row['year1_date'];
                $level= $row['level'];
              $newDate = new DateTime($date);
                        ?>
                                     <td><?php echo $sn++; ?></td>
                                        <!--<td class="text-center"><img src="img/<?php //echo $row['file']; ?>" style="border:50%" width="5%" alt="student"></td-->
                                        <td><?php echo   $fullnames ;?></td>
                                        <td><?php echo $row['gender']; ?></td>
                                        <!--<td>2</td--->
                                        <!---<td>English</td--->
                                        <td>#<?php echo $amountpaid; ?></td>
                                        <td>#<?php echo $balance; ?></td>
                                        <td>#<?php echo $paymode; ?></td>
                                        <td><?php echo $level;?></td>
                                        
                                      
                                     
                                        <!--td><//?php echo $row['email']; ?></td-->
                                         <td><?php echo $date; ?></td>
                                         <!----<td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </td---->
                                    </tr>
                                    <?php }  ?>
                                  
                                </tbody>
                            </table>
                        </div></div>
                    </div>
                </div>
                <!-- Teacher Payment Area End Here -->
                <footer class="footer-wrap-layout1">
                     <div class="copyright">© Copyrights <a href="#"></a> 2021, De Potter College of Health Technology <a
                            href="#"></a></div>
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
        </div>
    <?php if($firstname ==""){ 
unset($_SESSION['LOGGED']);
echo"<script> location.href='index.php'  </script>";
}?>
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