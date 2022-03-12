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
                       <!--- <li class="nav-item sidebar-nav-item">
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
                        </li--->
                         <li class="nav-item">
                            <a href="payment.php" class="nav-link"><i class="fas fa-book-reader"></i><span>Payment</span></a>
                        </li>
                         <li class="nav-item">
                            <a href="token.php" class="nav-link"><i class="fas fa-file-invoice-dollar text-orange"></i><span>Purchase Token</span></a>
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
                    <h3>Student Dashboard</h3>
                    <?php //if(isset($_POST['send'])){ $errormessage='';
                    //echo //$errormessage;}?>
                    <ul>
                        <li>
                       <a href="index.php">Home</a>
                        </li>
                        <li>Student</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Dashboard summery Start Here -->
                <div class="row gutters-20">
                   
                    <div class="col-xl-4 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-blue">
                                        <i class="fa fa-users" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <a href="studentadmission.php"><div class="item-title">Admission</div></a>
                                        <!--div class="item-number"><span class="counter" data-num="2250">2,250</span></div-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-yellow">
                                        <i class="fas fa-file-invoice-dollar text-orange"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Bursery</div>
                                        <!--div class="item-number"><span class="counter" data-num="5690">5,690</span></div-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--div class="col-xl-3 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-red">
                                        <i class="fas fa-hotel text-red"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <a href="hostell.php" target="_blank"><div class="item-title">Hostel</div></a>
                                        <div class="item-number"><span>$</span><span class="counter" data-num="193000">1,93,000</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div-->
                     <div class="col-xl-4 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-green ">
                                        <i class="fas fa-book-open text-green"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <a href="Library.php"><div class="item-title">Library</div></a>
                                        <!--div class="item-number"><span class="counter" data-num="150000">1,50,000</span></div-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row gutters-20">
                   
                    <div class="col-xl-4 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-blue">
                                       <i class="fa fa-address-book" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                       <a href='COURSES.php'> <div class="item-title">Course Reg</div></a>
                                        <!--div class="item-number"><span class="counter" data-num="2250">2,250</span></div-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-yellow">
                                        <i class="fas fa-poll text-orange"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <a href='Eresult.php'><div class="item-title">Resuts</div></a>
                                        <!--div class="item-number"><span class="counter" data-num="5690">5,690</span></div-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-red">
                                        <i class="fas fa-video text-red"></i <i class="fas fa-poll text-orange"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <a href="EClass.php" target="_blank"><div class="item-title">E-Class</div></a>
                                        <!--div class="item-number"><span>$</span><span class="counter" data-num="193000">1,93,000</span></div-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                

<div class="form-popup" id="myForm">
  <form action="#" method="POST" class="form-container">
    <h3 style="font-size: 24px; font-weight:bold; font-family:monospace;">HOSTEL REQUEST ACCESS</h3>
<p style="font-weight: normal; color:tomato; font-style:italic; font-family:sans-serif; font-size:12px;">N.B : MINIMUM OF TWENTY THOUSAND NAIRA (#20,000) IS ALLOWED AS FIRST PAYMENT  </p>
    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" value="<?php echo $email_val?>"name="email" required>

    <label for="psw"><b>Amount payable</b></label>
    <input type="tel" value="#40,000" name="" disabled>
    
     <label for="psw"><b>Amount paid </b>(numbers only)</label>
   <input type="tel" placeholder="Enter amount to pay" name="amount_paid" required >

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
<?php 
if (isset($_POST['send'])){
    $mailer = mysqli_real_escape_string($connection,$_POST['email']);
    $amount_paid = mysqli_real_escape_string($connection,$_POST['amount_paid']);
    $subtract = 40000 - $amount_paid;
    $connection=mysqli_connect("localhost:3306","depotte1","h05fB*m7G5i","depotte1_depotter");
    $select= mysqli_query($connection,"select * from hostel_request where email='$mailer'");
    
    if(!$select){
        echo "fail to connect";
    }
   while( $row = mysqli_fetch_array($select)){
    $mailer = mysqli_real_escape_string($connection,$_POST['email']);
    $amount_paid = mysqli_real_escape_string($connection,$_POST['amount_paid']);
    $subtract = 40000 - $amount_paid;
    $email = mysqli_real_escape_string($connection,$row['email']);
    $add = $row['amount_paid'] + $amount_paid ;
    $remain = $row['amount_remaining'] - $row['amount_paid'];
  $amount_paid = mysqli_real_escape_string($connection,$_POST['amount_paid']);
    
    if($email == $mailer ){
        $update = mysqli_query($connection,"update hostel_request set amount_paid='$add',amount_remaining='$remain' where email='$mailer' group by email");
        echo "amount updated successfully";
    }}
    if($amount_paid < 20000){
    echo "payment cannot be accessed";
  }else{
       $to = $_POST['email'];
        $subject = 'Hostel Booking Payment.';
       $from = ' admin@depotterhealthtech.sch.ng';
     //$fromName="Deppotter";
 
    // To send HTML mail, the Content-type header must be set
   $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
    $headers .='From: De Potter '.'<'.$from.'>' ."\r\n".
//$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
    $message = '<html><body>';
    $message .= '<div style="text-align:center"><img src="http://Depotter.agertechsolutions.com.ng/images/depotter_logo.png" class="mobile-logo" alt="Logo"></div>';
    $message .= '<p style="color:#777;font-size:16px;text-align:center">WELCOME TO De Potter.</p>';
    $message .= '<h3 style="font-size:18px">Dear '.$mailer.', kindly proceed to the stated bank to make payment.
             <p>Account No: 2028183963</p>
             <p>Account Name: De Potter College of Health Technology</p>
             <p>Bank Name: First Bank Plc</p></h3>';
   $message .= '<p style="font-size:16px;">Thanks, Admin.</p>';
   $message .= '<p style="font-size:18px;text-align:center;color:#777">© 2021 De Potter. All Rights Reserved.</p>';
   $message .= '</body></html>';
   
    $connection=mysqli_connect("localhost:3306","depotte1","h05fB*m7G5i","depotte1_depotter");
    $insert= mysqli_query($connection,"insert into hostel_request(name,email,amount_paid,amount_remaining,status,phone,gender) 
        values('$firstname','$mailer','$amount_paid','$subtract','','$phone','$gender')");
   
  if(!$insert){
    echo "error:"."<br>".$insert.mysqli_connect_error($connection);
  }
  else{
             if (mail($to, $subject, $message, $headers))
                {
        echo "<script>alert('dear $mailer an hostel payment details message has been sent to your mail ')
        location.href='hostelrequest.php'; </script>";
    
    
}

        
    }}
   
  

}


?>

                            
                <!-- Social Media End Here -->
                <!-- Footer Area Start Here -->
               <footer class="footer-wrap-layout1">
                    <div class="copyright">Â© Copyrights <a href="#">De Potter</a> 2021. All rights reserved. Designed by <a
                            href="#">Agertech Solutions and Consult</a></div>
                </footer>
                <!-- Footer Area End Here -->
            </div>
        </div>
         <!-- Page Area End Here -->
    </div>
   
  <?php require("includes/footers.php"); ?> 