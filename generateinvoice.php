<?php
session_start();

?>
<?php 
include('config.php'); 
$query_parent = mysqli_query($connection,"SELECT admissionstatus  FROM application group by admissionstatus") or die("Query failed: ".mysqli_error());

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
         <link rel="stylesheet" href="csss/bootstrap.min.css">
    <!-- Normalize csss -->
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
    <!-- Select 2 csss -->
    <link rel="stylesheet" href="csss/select2.min.css">
    <!-- Date Picker csss -->
    <link rel="stylesheet" href="csss/datepicker.min.css">
    <!-- Custom csss -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernize jsss -->
    <script src="jsss/modernizr-3.6.0.min.js"></script>
         <script type="text/javascript" src="js_drop/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    
	$("#parent_cat").change(function() {
		$(this).after('<div id="loader"><img src="img_drop/loading.gif" alt="loading subcategory" /></div>');
		$.get('loadsubcat3.php?parent_cat=' + $(this).val(), function(data) {
			$("#sub_cat").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });
     //javascript for room
    
    
    //javascript for room ends herr

});
</script>
          <?php  require("includes/busry.php");?>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
         <!-- Header Menu Area Start Here -->
       <?php   include "headers/busar_header.php";  ?>
   <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
    
            
           <?php  include"side_bars/buser_sidebar.php"; ?>   
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Invoice</h3>
                    <ul>
                         <li>
                       <a href="busary.php">Home</a>
                        </li>
 <li>Dashboard</li>
                        <li>Profile</li>
                        
                    </ul>
                </div>                
                <!-- Breadcubs Area End Here -->
                <!-- Add Class Area Start Here -->
               <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Generate Invoice</h3>
                            </div>
                            
                           <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" 
                                data-toggle="dropdown" aria-expanded="false">...</a>
        
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                       
                        <p id ='boys'>
                        <form class="new-added-form" method='post' action='invoiceprint.php'>
                            <div class="row">
                                
                               
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Admission status *</label>
                                    <select class="select2" name="parent_cat" id="parent_cat" required="">
                                        <option value=""> Select Status *</option>
                                          <?php while($row = mysqli_fetch_array($query_parent)): ?>
        <option value="<?php echo $row['admissionstatus']; ?>"><?php echo $row['admissionstatus']; ?></option>
        <?php endwhile; ?>
                                       
                                    </select>
                                </div>
                               
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Names *</label>
                                    <select class="select2" name="sub_cat" id="sub_cat" required="">
                                        <option value=""> Select level first *</option>
                                       
                                    </select>
                                </div>
                                 <!----select form room-->
    <div class="col-xl-3 col-lg-6 col-12 form-group">
    	<label for="category">Department(s) * </label>
    <select  class="select2"  name="room_cat" id="" required="">
    <option>select depts*</option>
        <?php $query_room = mysqli_query($connection,"SELECT *  FROM depts ") or die("Query failed: ".mysqli_error());
        while($rowed = mysqli_fetch_array($query_room)): ?>
        <option value="<?php echo $rowed['name']; ?>"><?php echo $rowed['name']; ?></option>
        <?php endwhile; ?>
    </select>
    </div>
  <div class="col-xl-3 col-lg-6 col-12 form-group">
    <label>Amount</label>
    <select  class="select2" name="bunk_cat" id="" required="">
        <option>select amount *</option>
        <?php $query_room = mysqli_query($connection,"SELECT *  FROM paymentfee ") or die("Query failed: ".mysqli_error());
        while($rowed = mysqli_fetch_array($query_room)): ?>
        <option value="<?php echo $rowed['amount']; ?>"><?php echo $rowed['amount']; ?></option>
        <?php endwhile; ?>
        </select>
    
    </div>
    
    
    <!---select roow ends-->
                             
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Amount Paying</label>
                                    <input type="text" name="paid" placeholder="amount paid" class="form-control" required="">
                                </div>
                                
                               
                               
                                <div class="col-12 form-group mg-t-8">
                            <button type="submit" name='invoice' class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Generate Invoice</button>
                                    <!--button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button--->
                                </div>
                            </div>
                        </form>
                        </p>
                    </div>
                </div>
                <!-- Add Class Area End Here -->
                   <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">De Potter</a> 2021. All rights reserved. Designed by <a
                            href="#">Agertech Solutions and Consult</a></div>
                </footer>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
     <?php if($firstname ==""){ 
unset($_SESSION['LOGGEDsub']);
echo"<script> location.href='index.php'  </script>";
}?>
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


</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/add-class.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 05:35:34 GMT -->
</html>