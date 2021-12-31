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
         <link rel="stylesheet" href="csss/bootstrap.min.css">
          <?php  require("includes/busry.php");?>
    <div id="wrapper" class="wrapper bg-ash">
         <!-- Header Menu Area Start Here -->
         <?php  include "headers/busar_header.php";  ?>
   <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">

            <?php  include"side_bars/buser_sidebar.php"; ?>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Payment</h3>
                    <ul>
                        <li>
                            <a href="busary.php">Back</a>
                        </li>
                        <li>Acceptance Fee (<?php
    date_default_timezone_set('Africa/Lagos');
    echo date('Y',time());?>/<?php
    date_default_timezone_set('Africa/Lagos');
    echo date('Y',time())+1;?> Session)</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Student Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                 <?php
    					include('config.php');
    				 $admitted="ADMITTED";
                       $slv="";
                       
    					$quer=mysqli_query($connection,"SELECT acceptancefee FROM application WHERE level='$slv' AND admissionstatus='$admitted'");
                        $total = 0;
    					while($row=mysqli_fetch_array($quer)){
    					   
    					   //$total += $row['acceptancefee'];
                          
    					   }
                           $income =  $total; 
                       
                          
    				
    						?>
                                <h3>Acceptance FEE Payment History Total Income: #<?php echo $income;?></h3>
                            </div>
                          
                        </div>
                        
                        <form class="mg-b-20">
                            <div class="row gutters-8">
                                
                                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
      <input type="text" autocomplete="off" class="form-control" placeholder="Search..." id="category" />
       <div class="result">
       
     </div>                           </div>
                                
                                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                    <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                    <div class="result">
       
     </div>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <p><?php 
    if(!empty($_SESSION['record'])){
        echo ($_SESSION['record']);
        unset($_SESSION['record']);
    }
?></p>
                            <table class="table data-table text-nowrap">
                                <thead>
                                    <tr>
                                       
                                         <th>Student Name</th>
                                        <!--<th>Image</th-->
                                        <th>Acceptance Fee Amount</th>
                                    
                                    <th>Amount to Paid</th>
                                       <!-- <th>Date</th--->
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
						 <form method="POST" action="acceptancereceipt.php" >
                                     <td><input type="text" name="studentname" placeholder="Enter Surname and Middle name" required></td>
                                        <td><input type="text" class="cost" value="#20,000" disabled="" required></td>
                                       
                                        <td><input type="tel"    value="20000" disabled="" name="fee" required=""> </td><br><br>
                                        
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                               
                                            </div>
                                        </td>
                                    </tr>
                                   
                                   
                                </tbody>
                            </table>
                            	<input type="submit" name="submit" value="Payment" />
                </form>
               
                        </div>
                    </div>
                </div>
                <!-- Teacher Payment Area End Here -->
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
    <!-- Data Table jsss -->
    <script src="jsss/jquery.dataTables.min.js"></script>
    <!-- Smoothscroll jsss -->
    <script src="jsss/jquery.smoothscroll.min.php"></script>
    <!-- Scroll Up jsss -->
    <script src="jsss/jquery.scrollUp.min.js"></script>
    <!-- Custom jsss -->
    <script src="jsss/main.js"></script>

</body>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
$(document).ready(function(){
    $('#category').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backenedacceptance.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/teacher-payment.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 05:35:33 GMT -->
</html>