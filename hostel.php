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
 <link rel="stylesheet" href="csss/bootstrap.min.css"><?php  require("includes/studentMenu.php");?>
   </head><body>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
         <!-- Header Menu Area Start Here -->
          <?php include "headers/admin_header.php";?>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
             <?php  include"side_bars/admin_sidebar.php"; ?>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>ADD New Hostel</h3>
                    <ul>
                        <li>
                            <a href="administration.php">Home</a>
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
                                        <h3>Add New Room</h3>
                                    </div>
               
                                </div>
                   
                                                      
                                             <?php
                                include"config.php";
                                if(isset($_POST['submit'])){
                                
                                    $rnumb="Depotter Hostel";
                                   
                                    $bunk1="bunk1";
                                    $bunk2="bunk2";
                                    $bunk3="bunk3";
                                    $bunk4="bunk4";
                               
                                 $sql="SELECT * FROM hostel WHERE rnumb ='$rnumb'";
                                
                                $result= mysqli_query($connection,$sql);

   $sqlee= "INSERT  INTO hostel (rnumb,bunk1,bunk2,bunk3,bunk4) VALUES ('$rnumb','$bunk1','$bunk2','$bunk3','$bunk4')";
 
	
 $corr = mysqli_query($connection,$sqlee);
 
echo("<h3 style='color: red; font-weight: bolder; text-align: center;'>Boy Hostel Has Been Sucessfully  Registered</h3>");
 
 }
 if(isset($_POST['hostel'])){
                                
                                    $rnumb="Depotter Hostel";
                                   
                                    $bunk1="bunk1";
                                    $bunk2="bunk2";
                                    $bunk3="bunk3";
                                    $bunk4="bunk4";
                               
                                 $sqli="SELECT * FROM hostel2 WHERE rnumb ='$rnumb'";
                                
                                $results= mysqli_query($connection,$sqli);

   $sqleed= "INSERT  INTO hostel2 (rnumb,bunk1,bunk2,bunk3,bunk4) VALUES ('$rnumb','$bunk1','$bunk2','$bunk3','$bunk4')";
 
	
 $correct = mysqli_query($connection,$sqleed);
 if($correct){
 
echo("<h3 style='color: red; font-weight: bolder; text-align: center;'>Girl Hostel Has Been Sucessfully  Registered</h3>");
}
 
 }
  
      
 ?>
 
                                <form method="POST" class="new-added-form">
                                    <div class="row">
                                      
                                        
                                        
                                        <div class="col-12 form-group mg-t-8">
                                            <button type="submit" name="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Add New Boy Hostel</button>
                                            <button type="hotel" name="hostel" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Add New Girl Hostel</button>
                                            
                                        </div>
                                    </div>
                                </form>
          
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

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="table-responsive">
                                  <table class="table display data-table text-nowrap">
                                               <thead>
                                                <tr>
                                                     <th>HOSTEL NUMBER</th>
                                                     <th>HOSTEL NAME</th>
                                                     
                                                     
                                                    
                                                

                                                </tr>
                                            </thead>
                                            <tbody>
                                                
    				<?php
    					include('config.php');
    					$query=mysqli_query($connection,"SELECT * FROM hostel");
    					while($row=mysqli_fetch_array($query)){
    						?>
    						<tr>
    							<td style="width:5%"><?php echo "Room". $row['id']. " is available"; ?></td>
                                <td style="width:25%"><?php echo $row['rnumb']; ?></td>
  							
                               
                                
                                                               
                                
    							
       	       
    						
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
                     
                    <div class="copyright">© Copyrights <a href="#">De Potter</a>  2021. All rights reserved. Designed by
                        <a href="#">Agertech Solutions and Consults</a></div>
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
    <!-- Scroll Up jsss -->
    <script src="jsss/jquery.scrollUp.min.js"></script>
    <!-- Date Picker jsss -->
    <script src="jsss/datepicker.min.js"></script>
    <!-- Data Table jsss -->
    <script src="jsss/jquery.dataTables.min.js"></script>
    <!-- Custom jsss -->
    <script src="jsss/main.js"></script>
  <?php if($firstname ==""){ 
unset($_SESSION['LOGGED']);
echo"<script> location.href='index.php'  </script>";
}?>
</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/hostel.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 05:35:34 GMT -->
</html>