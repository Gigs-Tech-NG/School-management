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
    <?php 
  include "config.php";
      $select="SELECT * FROM paymentfee WHERE level='".$_SESSION['level']."' AND faculty='".$_SESSION['faculty']."'";
    $result=mysqli_query($connection, $select);
    if(mysqli_num_rows($result) > 0){
        while($row=mysqli_fetch_assoc($result)){
            
           
            $faculty = $row['faculty'];
             $level = $row['level'];
              $_SESSION['level']=$level;
                $schfees= $row['amount'];
                $_SESSION['amount']=$schfees;
    					   $medicalfee= $row['medicalfee'];
                           $_SESSION['medicalfee']=$medicalfee;
                
      //  }
    }
}
    ?>
  <?php include "config.php";
  $_SESSION['level'];
        $_SESSION['faculty'];
if(isset($_POST['pays'])){
  
  $email=mysqli_real_escape_string($connection,$_POST['email_val']);
  $lastname=mysqli_real_escape_string($connection,$_POST['fullname']);
   $schfeeeS=($_POST['no3']);
   
   $medicalfee=($_POST['no4'] );
   $chargeES=($schfeeeS + $medicalfee);
   $charged=($schfeeeS + $medicalfee)*100;
     //$charges=(($charged * 2/100)  + $charged);
 $url = "https://api.paystack.co/transaction/initialize";
   if( (($chargeES * 2/100)  + $chargeES) <= 2500){
    
    // $charges=($charged * 2.1/100)+ $charged;
    //}
         $charges=(($charged * 2/100)  + $charged);
 $fields = [
    'email' => "kekereboi@gmail.com",
    'amount' => $charges,
    'subaccount' => "ACCT_1osy1rhzfdipagh",
   //'bearer' => "subaccount"
  ];
    }

   elseif( (($chargeES * 1.9/100 + 10000) + $chargeES) > 2500 && (($chargeES * 1.9/100 + 10000) + $chargeES) <= 126670){
        $charges=(($charged * 1.9/100 + 10000) + $charged);
 $fields = [
    'email' => $email,
    'amount' => $charges,
    'subaccount' => "ACCT_ar23szkmexjhx9p",
  // 'bearer' => "subaccount"
  ];
    } 
   //  $charges=($charged * 2.1/100)+ $charged;
    //}
         elseif(($charged + 200000) > 126670){ 
              $charges=($charged + 20000) ;
 $fields = [
    'email' => "kekereboi@gmail.com",
    'amount' => $charges,
    'subaccount' => "ACCT_ar23szkmexjhx9p",
  // 'bearer' => "subaccount"
  ];
    }
    // elseif($chargeES > 126670 &&  $chargeES >= 126670){
     elseif(($charged + 200000) > 130000){   
     $charges=($charged + 200000) ;
   
 $fields = [
    'email' => "kekereboi@gmail.com",
    'amount' => $charges,
    'subaccount' => "ACCT_psixxke1jmc4z3c",
   'bearer' => "subaccount"
  ];
    }
     //    $charges=(($chargeES * 1.5 + 10000) +($chargeES * .0015) +$chargeES)*100 ;
    //}
   
      
        // $url = "https://api.paystack.co/transaction/initialize";
  //customers
 
 
  $fields_string = http_build_query($fields);
  //open connection
  $ch = curl_init();
  
  //set the url, number of POST vars, POST data
  curl_setopt($ch,CURLOPT_URL, $url);
  curl_setopt($ch,CURLOPT_POST, true);
  curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Authorization: Bearer sk_test_399c6550e74f6c8381faaf470687305b6ef87c4d",
    "Cache-Control: no-cache",
  ));
  
  //So that curl_exec returns the contents of the cURL; rather than echoing it
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 
  
  //execute post
  //$response = curl_exec($ch);
  
  $response = curl_exec($ch);
  $err = curl_error($ch);
  curl_close($ch);
  
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    //echo $response;
    $result = json_decode($response);
  }
  
  if($result->status == true){
    $initializing_url =$result->data->authorization_url;
  //$initializing= json_decode($result);
  //echo $result;
 
  if( $_SESSION['faculty'] == "FIRST TERM"){
     $select=mysqli_query($connection,"SELECT * FROM primary1 WHERE level='". $_SESSION['level']."' AND RegNo='$matricno' AND Session='". $_SESSION['year']."'");
 //to cal the balance
 while($row =mysqli_fetch_array($select)){
    $chool=$row['firstfee_payment'];
     $medicalfeees=$row['firsthostel_payment'];
     $medicalfeed=$medicalfeees+$medicalfee;
    $scholllfee=$chool + $schfeeeS;
    
 }    
   $stmt=mysqli_query($connection,"UPDATE primary1 SET firsthostel_payment='$medicalfeed',email='$email',firstfee_payment='$scholllfee',firstfee_total='". $_SESSION['amount']."',firsthostel_total='".  $_SESSION['medicalfee']."' WHERE level='". $_SESSION['level']."' AND RegNo='$matricno' AND Session='". $_SESSION['year']."'");
   
     if (!$stmt) {
       echo 'There was a problem on your code'.mysqli_error($connection);
       //die"failed".mysqli_connect_error();
     }
     else{
  header("location: ".$initializing_url);
  //$initializing_url=$initializing->data->authorization_url;
 }
 }
// } 
 if( $_SESSION['faculty'] == "SECOND TERM"){
     $select=mysqli_query($connection,"SELECT * FROM primary1 WHERE level='". $_SESSION['level']."' AND RegNo='$matricno' AND Session='". $_SESSION['year']."'");
//to cal the balance
 while($row =mysqli_fetch_array($select)){
    $chool=$row['secondfee_payment'];
     $medicalfeees=$row['secondhostel_payment'];
     $medicalfeed=$medicalfeees+$medicalfee;
    $scholllfee=$chool + $schfeeeS;
    
 }  
   $stmt=mysqli_query($connection,"UPDATE primary1 SET secondhostel_payment='$medicalfeed',email='$email',secondfee_payment='$scholllfee',secondfee_total='". $_SESSION['amount']."',secondhostel_total='".  $_SESSION['medicalfee']."' WHERE level='". $_SESSION['level']."' AND RegNo='$matricno' AND Session='". $_SESSION['year']."'");
   
     if (!$stmt) {
       echo 'There was a problem on your code'.mysqli_error($connection);
       //die"failed".mysqli_connect_error();
     }
     else{
  header("location: ".$initializing_url);
  //$initializing_url=$initializing->data->authorization_url;
 }
 }
 if( $_SESSION['faculty'] == "THIRD TERM"){
     $select=mysqli_query($connection,"SELECT * FROM primary1 WHERE level='". $_SESSION['level']."' AND RegNo='$matricno' AND Session='". $_SESSION['year']."'");
//to cal the balance
 while($row =mysqli_fetch_array($select)){
    $chool=$row['thirdfee_payment'];
     $medicalfeees=$row['thirdhostel_payment'];
     $medicalfeed=$medicalfeees+$medicalfee;
    $scholllfee=$chool + $schfeeeS;
    
 }  
   $stmt=mysqli_query($connection,"UPDATE primary1 SET thirdhostel_payment='$medicalfeed',email='$email',thirdfee_payment='$scholllfee',thirdfee_total='". $_SESSION['amount']."',thirdhostel_total='".  $_SESSION['medicalfee']."' WHERE level='". $_SESSION['level']."' AND RegNo='$matricno' AND Session='". $_SESSION['year']."'");
   
     if (!$stmt) {
       echo 'There was a problem on your code'.mysqli_error($connection);
       //die"failed".mysqli_connect_error();
     }
     else{
  header("location: ".$initializing_url);
  //$initializing_url=$initializing->data->authorization_url;
 }
 }
  }
}
?>
        
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
         
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Payment</h3>
                    <ul>
                        <li>
                            <a href="student.php">Home</a>
                        </li>
                        <li><?php echo $_SESSION['level'];?> <?php echo $faculty ;?> PAYMENT (<?php
    date_default_timezone_set('Africa/Lagos');
    echo date('Y',time());?> )Session</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Student Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                
                                     </div>
                          
                        </div>
                  
  
<script src="https://js.paystack.co/v1/inline.js"></script>
<script> 
var container1 = document.forms.container1;

var con1 = container1.elements;

container1.addEventListener('input', function(e) {
  if (e.target.type === 'number') {
    con1.message1.value = con1.no1.valueAsNumber + con1.no2.valueAsNumber;
  }
}, false);
</script>
                       <form id="container2" method="post" action="" oninput='message2.value = no3.valueAsNumber + no4.valueAsNumber'>
  <div class="container" style="width:100%">
                            <div class="row">
                                
 
                    <input id="form_name" type="hidden" name="matricno"  value="<?php echo $matricNo;?>" class="form-control" placeholder="Please enter your ful name starting with surname. *">
               
                    <input id="fullname" type="hidden" name="fullname"   value="<?php echo  $firstname ;?>" class="form-control">
       <input id="form_name" type="hidden" name="email_val"   value="<?php echo  $email_val ;?>" class="form-control">
       
     
                
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>School fee *</label>

                    <input type="number" id="no3" name="no3"   placeholder="Total amount  #<?php echo  $schfees ;?>" class="form-control">
          
                          </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Medical fee *</label>
               <input type="number" id="no4" name="no4"   placeholder="Total amount  #<?php echo  $medicalfee ;?>" class="form-control">
          
    
    <div class="help-block with-errors"></div>
                                </div>
                                
                                
                                
                            
                           
                        
                                <div class="col-md-6 form-group"></div> 
                                <p style='color:black; font-size:25px; display:block;'>Total Amount: #</p><output id="message2" style='color:black; font-size:25px; display:block;'></output>
                                
                                <div class="col-12 form-group mg-t-8">
                <button type="submit" name="pays" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">PAYMENT</button>
                                     <div class="help-block with-errors"></div>
                                    <!--<button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button--->
                                </div>
                            </div>
                             </div>
                        </form>
                        
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

<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/teacher-payment.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 05:35:33 GMT -->
</html>