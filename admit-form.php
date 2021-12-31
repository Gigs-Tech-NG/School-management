<?php
session_start();
 include"config.php";
// include"mail.php";
 //creating connection 
 	function validate(){
  // $error="";
      if(isset($_POST['submit'])){
          include "config.php";
         $surname= mysqli_real_escape_string($connection,($_POST['surname']));
    $middlename= mysqli_real_escape_string($connection,($_POST['middlename'])); 
    $lastname= mysqli_real_escape_string($connection,($_POST['lastname'])); 
    $email= mysqli_real_escape_string($connection,($_POST['email']));
    $phone= mysqli_real_escape_string($connection,($_POST['phone']));
    $utme_no = mysqli_real_escape_string($connection, $_POST['utme_no']);
    $gender= mysqli_real_escape_string($connection,($_POST['gender'])); 
    $dob= mysqli_real_escape_string($connection,($_POST['dob']));
    $religion= mysqli_real_escape_string($connection,($_POST['']));
    $maritalstatus= mysqli_real_escape_string($connection,($_POST[''])); 
    $fullname=htmlspecialchars(strip_tags($_POST[''])); 
     $address= mysqli_real_escape_string($connection,($_POST['']));
    $state= mysqli_real_escape_string($connection,($_POST[''])); 
    $lga= mysqli_real_escape_string($connection,($_POST[''])); 
    $relationship= mysqli_real_escape_string($connection,($_POST['']));
    $sponsoraddress= mysqli_real_escape_string($connection,($_POST['']));
    $sponsorphone= mysqli_real_escape_string($connection,($_POST['']));
    $sponsoremail= mysqli_real_escape_string($connection,($_POST[''])); 
    $sponsoroccupation=mysqli_real_escape_string($connection,($_POST['']));
    $hobbies= mysqli_real_escape_string($connection,($_POST['']));  
    $disability= mysqli_real_escape_string($connection,($_POST[''])); 
    $language= mysqli_real_escape_string($connection,($_POST[''])); 
    $nokname= mysqli_real_escape_string($connection,($_POST['']));
    $nokaddress= mysqli_real_escape_string($connection,($_POST[''])); 
    $nokphone= mysqli_real_escape_string($connection,($_POST[''])); 
    $eduname= mysqli_real_escape_string($connection,($_POST[''])); 
    $edudate= mysqli_real_escape_string($connection,($_POST[''])); 
    $certificate= mysqli_real_escape_string($connection,($_POST[''])); 
    $firstchoice= mysqli_real_escape_string($connection,($_POST[''])); 
    $secondchoice= mysqli_real_escape_string($connection,($_POST[''])); 
   // $attestation=$_POST['attestation'];
    $paymentcode="depotter".rand(0000000,9999999)."".$surname; 
   // $date=date("Y-m-d h:i:sa");
    $pasword=htmlspecialchars(strip_tags($_POST[''])); 
               
              //$phone = mysqli_real_escape_string($connection,$_POST['teller_no']);
           $image=mysqli_real_escape_string($connection,$_POST['']);
             $file=mysqli_real_escape_string($connection,$_POST['']);
           $credential=mysqli_real_escape_string($connection,$_POST['']);
              $balance=mysqli_real_escape_string($connection,$_POST['']);
               $fee=mysqli_real_escape_string($connection,$_POST['']);
             // $studentname=mysqli_real_escape_string($connection,$_POST['']);
             $studentname=  $surname. ' ' .   $middlename.' '. $lastname;
              $paymode=mysqli_real_escape_string($connection,$_POST['']);
              $level=mysqli_real_escape_string($connection,$_POST['']);
               $balance2=mysqli_real_escape_string($connection,$_POST['']);
               $fee2=mysqli_real_escape_string($connection,$_POST['']);
                $paymode2=mysqli_real_escape_string($connection,$_POST['']);
                 $balance3=mysqli_real_escape_string($connection,$_POST['']);
               $fee3=mysqli_real_escape_string($connection,$_POST['']);
                $paymode3=mysqli_real_escape_string($connection,$_POST['']);
                 $balance4=mysqli_real_escape_string($connection,$_POST['']);
               $fee4=mysqli_real_escape_string($connection,$_POST['']);
                $paymode4=mysqli_real_escape_string($connection,$_POST['']);
                $score=mysqli_real_escape_string($connection,$_POST['']);
                $admissionstatus=mysqli_real_escape_string($connection,$_POST['']);
                $department=mysqli_real_escape_string($connection,$_POST['']);
            $faculty=mysqli_real_escape_string($connection,$_POST['']);
            $processedate=htmlspecialchars(strip_tags($_POST[''])); 
            $bankslipno=htmlspecialchars(strip_tags($_POST[''])); 
            $totalatm=htmlspecialchars(strip_tags($_POST[''])); 
            $bankname=htmlspecialchars(strip_tags($_POST[''])); 
            $transdate=htmlspecialchars(strip_tags($_POST[''])); 
            $paymentitem=htmlspecialchars(strip_tags($_POST[''])); 
            $transid=htmlspecialchars(strip_tags($_POST[''])); 
           $status= 0;
           $matricNo=htmlspecialchars(strip_tags($_POST[''])); 
            $rnumb=$_POST['']; 
             $lecturer=$_POST['']; 
           $verify="Not Verify";
           $amount=0;
           $year1date=" ";
            $year2date=" ";
             $year3date=" ";
              $year4date=" ";
           $acceptancefee=$_POST[""];
            //invoice
         function checkkeys($connection,$randstr){
          $sql = "SELECT * FROM application";
       $result = mysqli_query ($connection, $sql);
       
       while ($row = mysqli_fetch_assoc($result)) {
         if ($row ['keystring'] == $randstr){
            $keyexist = true;
            break;
         }    else {
            $keyexist = false;
         }
       
       
        return $keyexist;
    }
    }
        
        function generatekey(){
    
                $keylenght = 8;
                 $str = "1234567890";
    
                $randstr = uniqid(true);
                 //$conn = mysqli_connect("localhost","root","","generateid");
                 $checkkey = checkkeys($connection,$randstr);
                 
                 while ($checkkey == true){
                    $randstr = uniqid(true);
                     $checkkey = checkkeys ($connection, $randStr);
                    
                 }
   
                    return $randstr;
    
 }
    
     $invoice= generatekey();
             date_default_timezone_set('Africa/Lagos');
     $date=date('m/d/Y h:i:s a',time());
            // $target="img/";
   //$targetfile=$_FILES['file']['tmp_name'];
   // $target_arr=$target.basename($image);
    //$size=$_FILES['file']['size'];
  // $max=5*1024*1024;    //5MB
          
if (!preg_match("/^[a-zA-Z-' ]*$/", $fname )) {
 return "Only letters and white space allowed";
  }
   if(strlen($phone)!=11){
                    return "Phone number must be 11 digits "; 
                  }
if (!preg_match("/^[a-zA-Z-' ]*$/", $lname )) {
   return "Only letters and white space allowed";
  }
if (!preg_match("/^[a-zA-Z-' ]*$/", $mnane )) {
   return "Only letters and white space allowed";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 return "Invalid email format";
   }
   //name
    include "config.php";
$select="SELECT * FROM application WHERE surname='$surname' AND middlename='$middlename'";
 $result=mysqli_query($connection,$select);
    if(!$result){
         echo "Error: " . $select . "<br>" . mysqli_error($connection);
	   //die("failed").mysqli_connect_error();
   }
   while($row= mysqli_fetch_array($result)){
	   $surn=mysqli_real_escape_string($connection,$row['surname']);
	     $mid=mysqli_real_escape_string($connection,$row['middlename']);
   }if(($surn == $surname && $mid == $middlename )){
	  return "Name already taken";
   }
   //phone
   include "config.php";
$select="SELECT * FROM application WHERE phone='$phone'";
 $result=mysqli_query($connection,$select);
    if(!$result){
	    echo "Error: " . $select . "<br>" . mysqli_error($connection);
   }
   while($row= mysqli_fetch_array($result)){
	   $number=mysqli_real_escape_string($connection,$row['phone']);
   }if(($number == $phone)){
	  return "Phone number already taken";
   }
//email validation
include "config.php";
$select="SELECT * FROM application WHERE email='$email'";
 $result=mysqli_query($connection,$select);
    if(!$result){
	    echo "Error: " . $select . "<br>" . mysqli_error($connection);
   }
   while($row= mysqli_fetch_array($result)){
	   $mailler=mysqli_real_escape_string($connection,$row['email']);
   }if(($email == $mailler)){
	  return "Email Already Exit";
	  // $_SESSION['record']= "Email Already Exit";
 // echo "<script> location.href='admit-form.php' </script>";
	  }
    //mail

 
// Sending email
    //select file type
    
  // $extension  = strtolower(pathinfo($target_arr,PATHINFO_EXTENSION));
    //valid file extension
   // $extension_arr=array('png','jfif','jpeg','jpg','gif');
    //check
   // if(!in_array($extension,$extension_arr)){
   // return "file not supported";
   // }
       //if file alrady exist
      //  if(file_exists($target_arr)){
         //   return "Image already exit";
       // }
        //check file size
       
  
        include "config.php";
      $select= "INSERT INTO application(surname,middlename,lastname,email,phone,gender,dob,utme_no,address,state,lga,religion,maritalStatus,
      fullname,relationship,sponsoraddress,sponsorphone,sponsoremail,sponsoroccupation,hobbies,disability,language,nokname,nokaddress,nokphone,
      eduname,edudate,certificate,firstchoice,secondchoice,code,date,picture,bankslipno,totalatm,bankname,transdate,paymentitem,transid,
      admissionstatus,department,faculty,score,status,matricNo,level,pasword,amount,invoice,fee,processedate,paymode,name,verify,balance,fee_two,paymode_two,
      balance_two,fee_three,paymode_three,balance_three,fee_four,paymode_four,balance_four,credential,rnumb,acceptancefee,lecturer,year1date,year2date,year3date,year4date) 
      VALUES('$surname','$middlename','$lastname','$email','$phone','$gender','$dob','$utme_no','$address','$state','$lga','$religion','$maritalstatus',
      '$fullname','$relationship','$sponsoraddress','$sponsorphone','$sponsoremail','$sponsoroccupation','$hobbies','$disability','$language','$nokname','$nokaddress','$nokphone',
      '$eduname','$edudate','$certificate','$firstchoice','$secondchoice','$paymentcode','$date','$image','$bankslipno','$totalatm','$bankname','$transdate','$paymentitem','$transid',
       '$admissionstatus','$department','$faculty','$score','$status','$matricNo','$level','$pasword','$amount','$invoice','$fee','$processedate','$paymode','$studentname','$verify','$balance','$fee2','$paymode2'
       ,'$balance2','$fee3','$paymode3','$balance3','$fee4','$paymode4','$balance_four','$credential','$rnumb','$acceptancefee','$lecturer','$year1date','$year2date','$year3date','$year4date')";
  // $select= "INSERT INTO application(surname,middlename,lastname,email,phone,address,state,lga,gender,dob,religion,maritalstatus,
     //  fullname,relationship,sponsoraddress,sponsorphone,sponsoremail,sponsoroccupation,hobbies,disability,language,nokname,nokaddress,nokphone,
     //  eduname,edudate,certificate,firstchoice,secondchoice,code,date,picture,bankslipno,totalatm,bankname,transdate,paymentitem,transid,
      // admissionstatus,department,faculty,score,status,matricNo,level,pasword,amount,file,invoice,fee,processedate,paymode,name,verify,utme_no,balance,fee_two,paymode_two
      // ,balance_two,fee_three,paymode_three,balance_three,fee_four,paymode_four,balance_four)
       // VALUES('$surname','$middlename','$lastname','$email','$phone','$address','$state','$lga','$gender','$dob','$religion','$maritalstatus',
      // '$fullname','$relationship','$sponsoraddress','$sponsorphone','$sponsoremail','$sponsoroccupation','$hobbies','$disability','$language','$nokname','$nokaddress','$nokphone',
      // '$eduname','$edudate','$certificate','$firstchoice','$secondchoice','$paymentcode','$date','$file','$bankslipno','$totalatm','$bankname','$transdate','$paymentitem','$transid',
       //'$admissionstatus','$department','$faculty','$score','$status','$matricNo','$level','$pasword','$amount','$image','$invoice','$fee','$processedate','$paymode','$studentname,'$verify','$utme_no','$balance','$fee2','$paymode2'
       //,'$balance2,'$fee3','$paymode3','$balance3','$fee4','$paymode4','$balance_four')";
      
               $result=mysqli_query($connection,$select);
         if(!$result){
                    echo "Error: " . $select . "<br>" . mysqli_error($connection);
               }
       else{ 
           //mailing to applicantss
           
         
require_once "Mail.php"; // PEAR Mail package
require_once ('Mail/mime.php'); // PEAR Mail_Mime packge


 $from = "admin@depotterhealthtech.sch.ng"; //enter your email address
 $to = $email; //enter the email address of the contact you're sending to
 $subject = "Applicant Account"; // subject of your email

$headers = array ('From' => $from,'To' => $to, 'Subject' => $subject);

$text = ''; // text versions of email.
$html = "<html><body>
<div style='text-align:center'><img src='https://depotterhealthtech.sch.ng/images/logo.png' class='mobile-logo' alt='Logo'></div>
<p style='color:#777;font-size:16px;text-align:center'>WELCOME TO DE POTTER.</p>
<h3 style='font-size:18px'>Dear $surname,Your application was sent successfully! Print your payment slip and proceed to any of the listed bank to make payment.</h3>
<a href='https://depotterhealthtech.sch.ng/depotter/paymentslipform.php'><h2>Print Payment Slip</h2></a>
<p style='font-size:16px;'>Thanks,Admin.</p>
<p style='font-size:18px;text-align:center;color:#777'>© 2021 Depotter. All Rights Reserved.</p></body></html>"; // html versions of email.

$crlf = "\n";

$mime = new Mail_mime($crlf);
$mime->setTXTBody($text);
$mime->setHTMLBody($html);

//do not ever try to call these lines in reverse order
$body = $mime->get();
$headers = $mime->headers($headers);

 $host = "localhost"; // all scripts must use localhost
 $username = "admin@depotterhealthtech.sch.ng/"; //  your email address (same as webmail username)
 $password = "depotter/tech/001"; // your password (same as webmail password)

$smtp = Mail::factory('smtp', array ('host' => $host, 'auth' => true,
'username' => $username,'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
echo("<p>" . $mail->getMessage() . "</p>");
}
else {
 echo '<script> alert("Dear '.$surname.',a verification message has been sent to your mail. Print your payment slip and proceed to the listed bank to make payment")
     window.location = "https://depotterhealthtech.sch.ng";
     </script>';
// header("Location: http://www.example.com/");
}
               // insert
             
              
            }
      }
	}       
              
       ?>  
<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/admit-form.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 05:35:29 GMT -->
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Depotter|| Re-define lost hope</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">
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
</head>

<body>
    <!-- Preloader Start Here -->
    <!--div id="preloader"></div-->
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
        <!-- Header Menu Area Start Here -->
        <div class="navbar navbar-expand-md header-menu-one bg-light">
            <div class="nav-bar-header-one">
                <div class="header-logo">
                    <!--a href="student.php"-->
                        <img src="images/depotter_logo.png" width="150"  alt="logo">
                    <!--/a-->
                </div>
                  <!--<div class="toggle-button sidebar-toggle">
                    <button type="button" class="item-link">
                        <span class="btn-icon-wrap">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                </div--->
            </div>
            <div class="d-md-none mobile-nav-bar">
               <!--<button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse" data-target="#mobile-navbar" aria-expanded="false">
                    <i class="far fa-arrow-alt-circle-down"></i>
                </button>
                <button type="button" class="navbar-toggler sidebar-toggle-mobile">
                    <i class="fas fa-bars"></i>
                </button-->
            </div>
   
        </div>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <!--div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
               <div class="mobile-sidebar-header d-md-none">
                    <div class="header-logo">
                        <a href="student.php"><img src="img/logo1.png" alt="logo"></a>
                    </div>
               </div>
                <div class="sidebar-menu-content">
                    <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="student.php" class="nav-link"><i class="fas fa-angle-right"></i>Admin</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index3.php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Students</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index4.php" class="nav-link"><i class="fas fa-angle-right"></i>Parents</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index5.php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Teachers</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Students</span></a>
                            <ul class="nav sub-group-menu sub-group-active">
                                <li class="nav-item">
                                    <a href="all-student.php" class="nav-link"><i class="fas fa-angle-right"></i>All
                                        Students</a>
                                </li>
                                <li class="nav-item">
                                    <a href="student-details.php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Student Details</a>
                                </li>
                                <li class="nav-item">
                                    <a href="admit-form.php" class="nav-link menu-active"><i
                                            class="fas fa-angle-right"></i>Admission Form</a>
                                </li>
                                <li class="nav-item">
                                    <a href="student-promotion.php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Student Promotion</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i
                                    class="flaticon-multiple-users-silhouette"></i><span>Teachers</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="all-teacher.php" class="nav-link"><i class="fas fa-angle-right"></i>All
                                        Teachers</a>
                                </li>
                                <li class="nav-item">
                                    <a href="teacher-details.php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Teacher Details</a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-teacher.php" class="nav-link"><i class="fas fa-angle-right"></i>Add
                                        Teacher</a>
                                </li>
                                <li class="nav-item">
                                    <a href="teacher-payment.php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Payment</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-couple"></i><span>Parents</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="all-parents.php" class="nav-link"><i class="fas fa-angle-right"></i>All
                                        Parents</a>
                                </li>
                                <li class="nav-item">
                                    <a href="parents-details..php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Parents Details</a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-parents..phpl" class="nav-link"><i class="fas fa-angle-right"></i>Add
                                        Parent</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-books"></i><span>Library</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="all-book.php" class="nav-link"><i class="fas fa-angle-right"></i>All
                                        Book</a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-book.php" class="nav-link"><i class="fas fa-angle-right"></i>Add New
                                        Book</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-technological"></i><span>Acconunt</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="all-fees.php" class="nav-link"><i class="fas fa-angle-right"></i>All Fees
                                        Collection</a>
                                </li>
                                <li class="nav-item">
                                    <a href="all-expense.php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Expenses</a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-expense.php" class="nav-link"><i class="fas fa-angle-right"></i>Add
                                        Expenses</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i
                                    class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i><span>Class</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="all-class.php" class="nav-link"><i class="fas fa-angle-right"></i>All
                                        Classes</a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-class.php" class="nav-link"><i class="fas fa-angle-right"></i>Add New
                                        Class</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="all-subject.php" class="nav-link"><i
                                    class="flaticon-open-book"></i><span>Subject</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="class-routine.php" class="nav-link"><i class="flaticon-calendar"></i><span>Class
                                    Routine</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="student-attendence.php" class="nav-link"><i
                                    class="flaticon-checklist"></i><span>Attendence</span></a>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-shopping-list"></i><span>Exam</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="exam-schedule.php" class="nav-link"><i class="fas fa-angle-right"></i>Exam
                                        Schedule</a>
                                </li>
                                <li class="nav-item">
                                    <a href="exam-grade.php" class="nav-link"><i class="fas fa-angle-right"></i>Exam
                                        Grades</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="transport.php" class="nav-link"><i
                                    class="flaticon-bus-side-view"></i><span>Transport</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="hostel.php" class="nav-link"><i class="flaticon-bed"></i><span>Hostel</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="notice-board.php" class="nav-link"><i
                                    class="flaticon-script"></i><span>Notice</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="messaging.php" class="nav-link"><i
                                    class="flaticon-chat"></i><span>Messeage</span></a>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-menu-1"></i><span>UI Elements</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="notification-alart.php" class="nav-link"><i class="fas fa-angle-right"></i>Alart</a>
                                </li>
                                <li class="nav-item">
                                    <a href="button.php" class="nav-link"><i class="fas fa-angle-right"></i>Button</a>
                                </li>
                                <li class="nav-item">
                                    <a href="grid.php" class="nav-link"><i class="fas fa-angle-right"></i>Grid</a>
                                </li>
                                <li class="nav-item">
                                    <a href="modal.php" class="nav-link"><i class="fas fa-angle-right"></i>Modal</a>
                                </li>
                                <li class="nav-item">
                                    <a href="progress-bar.php" class="nav-link"><i class="fas fa-angle-right"></i>Progress Bar</a>
                                </li>
                                <li class="nav-item">
                                    <a href="ui-tab.php" class="nav-link"><i class="fas fa-angle-right"></i>Tab</a>
                                </li>
                                <li class="nav-item">
                                    <a href="ui-widget.php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Widget</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="map.php" class="nav-link"><i
                                    class="flaticon-planet-earth"></i><span>Map</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="account-settings.php" class="nav-link"><i
                                    class="flaticon-settings"></i><span>Account</span></a>
                        </li>
                    </ul>
                </div>
            </div-->
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Applicants</h3>
                    
                    <ul>
                        <li>
                            <a href="index.php">Return to Homepage</a>
                        </li>
                        <li style="text-align: right; font-size: 36px; font-weight: bold;">Create Account</li>
                        
                    </ul>
                   
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Admit Form Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                             <?php
                            // include 'myconfig.php';
                   //echo $error_message; 
                    ?>
                            <h3 style="font-size:17px;color:#ae3c33;margin-top:-1%;margin-bottom:3px;width:100%"><?php 
    echo validate();
?></h3>
                            </div>
                            <!---<div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="droppdown"
                                    aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div--->
                        </div>
                        <form class="new-added-form" action=""  method="post"  enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                               
                   
                                    <label>Surname *</label>
                                    <input type="text" placeholder="SurName" class="form-control" name="surname" required=""/>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>First Name *</label>
                                    <input type="text" placeholder="Last Name" class="form-control"name="lastname" required=""/>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Middle Name *</label>
                                    <input type="text" placeholder="Middle Name" class="form-control"name="middlename" required=""/>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Date of Birth *</label>
                                    <input type="text" placeholder="dd/mm/yyyy" class="form-control air-datepicker"
                                        data-position='bottom right' name="dob" required=""/>
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Gender *</label>
                                    <select class="select2" name="gender" required="">
                                        <option value="">Please Select Gender *</option>
                                        <option value="Male" >Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Female">Others</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>E-mail *</label>
                                    <input type="email" placeholder="" class="form-control"name="email" required=""/>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>UTME Reg no (Optional) </label>
                                    <input type="text" placeholder="" class="form-control"name="utme_no" />
                                    
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Phone Number *</label>
                                    <input type="tel" placeholder="" class="form-control" name="phone" required=""/>
                                </div>
                                <!--div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Class *</label>
                                    <select class="select2">
                                        <option value="">Please Select Class *</option>
                                        <option value="1">Play</option>
                                        <option value="2">Nursery</option>
                                        <option value="3">One</option>
                                        <option value="3">Two</option>
                                        <option value="3">Three</option>
                                        <option value="3">Four</option>
                                        <option value="3">Five</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Section *</label>
                                    <select class="select2">
                                        <option value="">Please Select Section *</option>
                                        <option value="1">Pink</option>
                                        <option value="2">Blue</option>
                                        <option value="3">Bird</option>
                                        <option value="3">Rose</option>
                                        <option value="3">Red</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Admission ID</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Phone</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Short BIO</label>
                                    <textarea class="textarea form-control" name="message" id="form-message" cols="10"
                                        rows="9"></textarea>
                                </div>
                                <div class="col-lg-6 col-12 form-group mg-t-30">
                                    <label class="text-dark-medium">Upload Payment Receipts (150px X 150px)</label>
                                    <input type="file" class="form-control-file" name="file" required=""/>
                                 
                                </div---->
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="submit">Submit</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                                </form>
                            </div>
                        
                    </div>
                </div>
                <!-- Admit Form Area End Here -->
                <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">De potter</a> 2021. All rights reserved. Designed by <a
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
    <!-- Select 2 jsss -->
    <script src="jsss/select2.min.js"></script>
    <!-- Date Picker jsss -->
    <script src="jsss/datepicker.min.js"></script>
    <!-- Scroll Up jsss -->
    <script src="jsss/jquery.scrollUp.min.js"></script>
    <!-- Custom jsss -->
    <script src="jsss/main.js"></script>

</body>



<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/admit-form.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 05:35:31 GMT -->
</html>