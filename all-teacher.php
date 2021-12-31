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
        <type!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
        <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">
         <link rel="stylesheet" type="text/css" href="css41/DT_bootstrap.css">
          <?php  require("includes/studentMenu.php");?><script src="jsss/jquery.js" type="text/javascript"></script>
	<script src="jsss/bootstrap.js" type="text/javascript"></script>
	
	<script ="text/javascript" charset="utf-8" language="javascript" src="jsss/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf-8" language="javascript" src="jsss/DT_bootstrap.js"></script>
    <!-- Normalize csss -->
   </head><body>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
     <?php include "headers/admin_header.php";?>
         <!-- Header Menu Area Start Here -->

            
            
           
       
        <!-- Header Menu Area End Here -->
       
        <!-- Page Area Start Here -->
        
        <div class="dashboard-page-one">
        <?php  include"side_bars/admin_sidebar.php"; ?>
            <!-- Sidebar Area Start Here -->
            
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Students</h3>
                    <ul>
                        <li>
                            <a href="administration.php">Home</a>
                        </li>
                        <li>Students</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Teacher Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                         <h1 style="font-weight: bolder;text-align:center" > <img src="images/depotter_logo.png"  style="width:; height:;margin:left:%;"><br/>DE POTTER COLLEGE OF HEALTH TECHNOLOGY
                              <p style="font-size:12px; text-align:center">KM 2, Oru/Ijebu-Igbo Road Oru-Ijebu Ogun State.</p></h1>
                        
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>All Staff Data</h3>
                            </div>
                          
                        </div>
                      
                        <div class="table-responsive">
                           <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                 <thead>
                                    <tr>
                                       
                                         <th align="center">S/N</th>
                                        <!--<th>Image</th-->
                                        <th align="center">Name</th>
                                        <th align="center">Phone</th>
                                        <th align="center">Photo</th>
                                    
                                        <th align="center">Action</th>
                                         <th align="center">Status</th>
                                        <th align="center">Action</th>
                                         
                                      
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
                        $select="SELECT * FROM admlogin";
                       // $select="SELECT * FROM applicants";
                        $result=mysqli_query($connection,$select);
                        
                        if(!$result){
                            die("failed").mysqli_connect_error();
                        }while($row=mysqli_fetch_array($result)){
                          $firstname = $row['fullname'];
                            $phone = $row['phone'];
              $picture = $row['picture'];
              $status = $row['user_status'];
             
                        ?>
                                     <td><?php echo $sn++; ?></td>
                                        <!--<td class="text-center"><img src="img/<?php //echo $row['file']; ?>" style="border:50%" width="5%" alt="student"></td-->
                                        <td><?php echo   $firstname ;?></td>
                                        <td><?php echo $phone ;?></td>
                                        <td class="text-center"><img src="img/<?php echo  $picture; ?>" style="border:%" width="20%" alt=""></td>
                                       
                                      
                                        <td class="badge badge-pill badge-success d-block mg-t-8"><a style="color:white" href="enable.php?staffED=<?php echo $row['id'];?>" >Enable</a></td>
                                        <!--<td>+ 123 9988568</td-->
                                         <td><?php echo $status ;?></td>
                                 <td class="badge badge-pill badge-success d-block mg-t-8"><a style="color:red" href="disenable.php?staffEDt=<?php echo $row['id'];?>" >Disable</a></td>
                                           
                                        
                                    </tr>
                                    <?php }  ?>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Teacher Payment Area End Here -->
                <footer class="footer-wrap-layout1">
                     <div class="copyright">© Copyrights <a href="#"></a> 2021, De Potter College of Health Technology <a
                            href="#"></a></div>
                </footer>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
   
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