<?php
session_start();
include "config.php";

$_SESSION['timeout'] = time(); 
if (time()-$_SESSION['timeout'] > 600){
   unset($_SESSION['timeout']);
    session_destroy();
 // echo "<script> location.href='index.php' <script>";
}

if($_GET['zdeidhdjkksdkdsakdkkcdTkxjKDLJkjhjdjdgfdskdkdnsmxvxhncikshsdlsnsslksksssssjsooooooooksldfmnokvksnknsklncxxnknjmnchkncksncknsmknxksnkssdkpkknksvkskh1237jhdc678sswwqakckxcnhbkvllszmc0980w87889'] == ""){
    echo"<script> location.href='apply.php'  </script>";
}

$messages="";
 if (isset($_GET['zdeidhdjkksdkdsakdkkcdTkxjKDLJkjhjdjdgfdskdkdnsmxvxhncikshsdlsnsslksksssssjsooooooooksldfmnokvksnknsklncxxnknjmnchkncksncknsmknxksnkssdkpkknksvkskh1237jhdc678sswwqakckxcnhbkvllszmc0980w87889'])){
    $id = $_GET['zdeidhdjkksdkdsakdkkcdTkxjKDLJkjhjdjdgfdskdkdnsmxvxhncikshsdlsnsslksksssssjsooooooooksldfmnokvksnknsklncxxnknjmnchkncksncknsmknxksnkssdkpkknksvkskh1237jhdc678sswwqakckxcnhbkvllszmc0980w87889'];
   // echo "$id";
  
             //FETCH APPLICATION FORM       
$select_qry= "SELECT * FROM application WHERE email = '$id'";

//echo $select_qry;
                     $sel_result = mysqli_query($connection, $select_qry);
                     if (mysqli_num_rows ($sel_result) > 0){
                         while ($row = mysqli_fetch_assoc($sel_result)){
                        
                       $nameJ=  $row['surname'];
                         $middleJ=  $row['middlename'];
                           $lastJ=  $row['lastname'];
                             $emailj=  $row['email'];
                               $utmeJ=  $row['utme_no'];
                                 $genderJ=  $row['gender'];
                                  $dbirth=  $row['dob'];
                                   $phonej=  $row['phone'];
                                     $verify =  $row['verify'];
                                     $state=$row['state'];
                                         $passworded=$row['pasword'];
                       
                     
                       
      }
      }
      
      if( $verify == "Not Verify"){
           echo '<script> alert("Not Authorised")
     window.location = "https://depotterhealthtech.sch.ng";
     </script>';
      }
      elseif($passworded != ""){
           echo '<script> alert("Not Authorised")
     window.location = "https://depotterhealthtech.sch.ng";
     </script>';
      }
         }              
           //UPDATE ADMISSION FORM   
           	//function validate(){
if (isset($_POST['update'])) {
    $id = $_GET['zdeidhdjkksdkdsakdkkcdTkxjKDLJkjhjdjdgfdskdkdnsmxvxhncikshsdlsnsslksksssssjsooooooooksldfmnokvksnknsklncxxnknjmnchkncksncknsmknxksnkssdkpkknksvkskh1237jhdc678sswwqakckxcnhbkvllszmc0980w87889'];
      $images = array();  
          $addressj = mysqli_real_escape_string($connection,$_POST['address']);
          $state = mysqli_real_escape_string($connection,$_POST['state']);
          $religion  = mysqli_real_escape_string($connection,$_POST['religion']);
          $relationship = mysqli_real_escape_string($connection,$_POST['relationship']);
          // $relationship = mysqli_real_escape_string($connection,$_POST['relationship']);
            $sfuulname = mysqli_real_escape_string($connection,$_POST['sfuulname']);
             $srelation = mysqli_real_escape_string($connection,$_POST['srelation']);
              $saddress = mysqli_real_escape_string($connection,$_POST['saddress']);
               $snumber = mysqli_real_escape_string($connection,$_POST['snumber']);
                $semail = mysqli_real_escape_string($connection,$_POST['semail']);
               $soccupied = mysqli_real_escape_string($connection,$_POST['soccupied']);
               $password= md5(mysqli_real_escape_string($connection,$_POST['password']));
                $hobby=mysqli_real_escape_string($connection,$_POST['hobby']);
                $disability=mysqli_real_escape_string($connection,$_POST['disability']);
                $language=mysqli_real_escape_string($connection,$_POST['language']);
                $nkin=mysqli_real_escape_string($connection,$_POST['nkin']);
                 $lga=mysqli_real_escape_string($connection,$_POST['lga']);
                 $nkinadres=mysqli_real_escape_string($connection,$_POST['nkinadres']);
                $nkinphone=mysqli_real_escape_string($connection,$_POST['nkinphone']);
                $Nameschool=mysqli_real_escape_string($connection,$_POST['Nameschool']);
                $dateattenteed=mysqli_real_escape_string($connection,$_POST['dateattenteed']);
                 $certificate=mysqli_real_escape_string($connection,$_POST['certificate']);
                $fchoice=mysqli_real_escape_string($connection,$_POST['fchoice']);
                $schoice=mysqli_real_escape_string($connection,$_POST['schoice']);
          //upload passport
$passport = ($_FILES['passport']['name']);
$target="img/";
$targetfile1 = $_FILES['passport']['tmp_name'];
    $target_arr1=$target.basename($passport);
     //select file type
    
  // $extension  = strtolower(pathinfo($target_arr1,PATHINFO_EXTENSION));
    //valid file extension
   // $extension_arr=array('png','jfif','jpeg','jpg','gif');
    //check
   // if(!in_array($extension,$extension_arr)){
   // return "file not supported";
   // }
       //if file alrady exist
      //  if(file_exists($target_arr1)){
         //   return "Image already exit";
       // }
     $n_array = ($_FILES['files']['name']);
   $tmp_name_array = ($_FILES['files']['tmp_name']);
  $desired_dir="img/";
  //upload credential
      for($i = 0; $i < count($tmp_name_array); $i++)
   {
        $targetfilepath =  $desired_dir.$n_array[$i];
    $uploadedFileStr = implode( ',',$targetfilepath); 
    //file exist
    $images[] = $n_array[$i];
   $all_images = implode(",",$images);
     if(file_exists($targetfilepath )) {
    //return ("file already exit");
    }  
    //select file type
   $extension = strtolower(pathinfo( $targetfilepath,PATHINFO_EXTENSION));
    //valid file extension
    $extension_img=array('jpg', 'png', 'jpeg','jfif','gif'); 
   if(!in_array($extension,$extension_img)){
        // return ("file not supported");
        
        
        $name = ''; 
$type = ''; 
$size = ''; 
$error = ''; 
function compress_image($source_url, $destination_url, $quality) 
{ 
$info = getimagesize($source_url); 
if ($info['mime'] == 'image/jpeg') $image = imagecreatefromjpeg($source_url); 
elseif ($info['mime'] == 'image/gif') $image = imagecreatefromgif($source_url); 
elseif ($info['mime'] == 'image/png') $image = imagecreatefrompng($source_url); 
imagejpeg($image, $destination_url, $quality); 
return $destination_url; 
} 
      }
      
      
	$update="UPDATE application SET address= '$addressj',lga='$lga',credential='$all_images',picture='$passport',state='$state',religion='$religion',maritalStatus='$relationship',
	pasword='$password',
	fullname='$sfuulname', relationship='$srelation',sponsoraddress='$saddress',sponsorphone='$snumber', sponsoremail='$semail', sponsoroccupation='$soccupied',hobbies='$hobby',
	disability='$disability',language='$language',nokname='$nkin',nokaddress='$nkinadres',nokphone='$nkinphone',eduname='$Nameschool',edudate='$dateattenteed',
	certificate='$certificate',
firstchoice='$fchoice',	secondchoice='$schoice'
	WHERE email = '$id'";
//$update="UPDATE applicants SET credential='$all_images',picture='$passport'	WHERE email = '$id'";
    $result =mysqli_query($connection,$update);
     // echo $result;
    if (!$result){
        die ("failed").mysqli_connect_error();
    } 
    else{
       if(move_uploaded_file($tmp_name_array[$i],$desired_dir.$n_array[$i]) && 
              move_uploaded_file($targetfile1, $target_arr1)  ){
                    $_SESSION['print']="true";
                  echo "<script> location.href='formprint.php?zkTYJljsksbjsjkaoshjaoajasbpfgstsgbsjgfsshhsjssfjmabakakaiassggsRTWHWJHgagasjswjgssjwtwtwhsbnwkiiwjwkkqjwjan=$id'</script>";
           
       
    }
    }
    }  
}
   // }
   
?>

<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/admit-form.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 05:35:29 GMT -->
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Deportter || Admission Form</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
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
                        <li style="text-align: right; font-size: 36px; font-weight: bold;">Application Form</li>
                        
                    </ul>
                </div>                
                <!-- Breadcubs Area End Here -->
                <!-- Add Class Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                         <h3 style="font-size:17px;color:#ae3c33;margin-top:-1%;margin-bottom:3px;width:100%"><?php// echo validate(); ?></h3>
                        <div class="heading-layout1">
                            
        <div class="item-title" style="width: 100%;border: 2px solid #c4e3f3; border-radius: 10px; background: #c4e3f3; border: none;">
            
             <h3 style=" margin-left:7%; text-transform: uppercase; color: red;">Personal Information</h3>
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
                        <form class="new-added-form" method="post" action="" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>First Name*</label>
                                    <input type="text" placeholder="" disabled="" value="<?php echo $nameJ;?>" name="first_name" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Middle Name</label>
                                    <input type="text" placeholder="" disabled="" disabled="" value="<?php echo $middleJ;?>" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Last name*</label>
                                    <input type="text" placeholder=""  disabled="" value="<?php echo $lastJ;?>" name="last_name"class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>E-mail Address</label>
                                   <input type="email" placeholder="" disabled=""  value="<?php echo $emailj;?>" class="form-control"name="email" required=""/>
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Gender *</label>
                                    <select class="select2" name="gender" disabled=""  required="">
                                        <option value=""><?php echo $genderJ;?>*</option>
                                        <option value="Male" >Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Female">Others</option>
                                    </select>
                                </div>
                                 <!---<div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>UTME Reg no *</label>
                                    <input type="text" placeholder="" disabled="" value="<?php echo $utmeJ;?>" class="form-control"name="utme_no" required=""/>
                                    
                                </div---->
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Date of Birth*</label>
                                    <input type="text" placeholder="dd/mm/yyyy" disabled="" name="dbirth"  value="<?php echo $dbirth;?>" class="form-control air-datepicker" data-position="bottom right">
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Phone Number *</label>
                                    <input type="tel" placeholder="" disabled="" value="<?php echo$phonej ;?>" class="form-control">
                                </div>
                                  <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Contact Address *</label>
                                    <input type="text" placeholder="" name="address" class="form-control" required>
                                </div>
                               <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>State *</label>
                                   <select onchange="toggleLGA(this);" name="state" id="state" class = "form-control" required>
                                         <option value="" selected="selected">- Select -</option>
                                      <option value="Abia">Abia</option>
                                      <option value="Adamawa">Adamawa</option>
                                      <option value="AkwaIbom">AkwaIbom</option>
                                      <option value="Anambra">Anambra</option>
                                      <option value="Bauchi">Bauchi</option>
                                      <option value="Bayelsa">Bayelsa</option>
                                      <option value="Benue">Benue</option>
                                      <option value="Borno">Borno</option>
                                      <option value="Cross River">Cross River</option>
                                      <option value="Delta">Delta</option>
                                      <option value="Ebonyi">Ebonyi</option>
                                      <option value="Edo">Edo</option>
                                      <option value="Ekiti">Ekiti</option>
                                      <option value="Enugu">Enugu</option>
                                      <option value="FCT">FCT</option>
                                      <option value="Gombe">Gombe</option>
                                      <option value="Imo">Imo</option>
                                      <option value="Jigawa">Jigawa</option>
                                      <option value="Kaduna">Kaduna</option>
                                      <option value="Kano">Kano</option>
                                      <option value="Katsina">Katsina</option>
                                      <option value="Kebbi">Kebbi</option>
                                      <option value="Kogi">Kogi</option>
                                      <option value="Kwara">Kwara</option>
                                      <option value="Lagos">Lagos</option>
                                      <option value="Nasarawa">Nasarawa</option>
                                      <option value="Niger">Niger</option>
                                      <option value="Ogun">Ogun</option>
                                      <option value="Ondo">Ondo</option>
                                      <option value="Osun">Osun</option>
                                      <option value="Oyo">Oyo</option>
                                      <option value="Plateau">Plateau</option>
                                      <option value="Rivers">Rivers</option>
                                      <option value="Sokoto">Sokoto</option>
                                      <option value="Taraba">Taraba</option>
                                      <option value="Yobe">Yobe</option>
                                      <option value="Zamfara">Zamafara</option>
                                    </select>
  
                                    
                                    <!--<td id="response">
                                         <!--Response will be inserted here>
                                      </td-->
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>L.G.A *</label>
                                    <select  name="lga" id="lga"  class="form-control select-lga"  required >
                                    </select>
                                </div>
                                <!--process local government starts here--->
                                
                                
                                
                                
                                <!--- process local govt ends here--->
                                
                                
                               
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Religion *</label>
                                    <select class="select2" name="religion" required>
                                        <option value="">Please Select *</option>
                                        <option>Islam</option>
                                        <option>Christianity</option>
                                        <option>Others</option>
                                    </select>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Marital Status *</label>
                                    <select class="select2" name="relationship" required>
                                        <option value="">Please Select *</option>
                                        <option>Married</option>
                                        <option>Single</option>
                                        <option>Divorced</option>
                                    </select>
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Password *</label>
                                    <input type="password" placeholder="Password" name="password" class="form-control" required>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Upload Your Photo *</label>
                                    <input type="file" placeholder="" name="passport" class="form-control" required>
                                </div>
                                </div>
                                
                                
                            <div class="heading-layout1">
        <div class="item-title" style="width: 100%;border: 2px solid #c4e3f3; border-radius: 10px; background: #c4e3f3; border: none;">
             <h3 style=" margin-left:7%; text-transform: uppercase; color: red;">Sponsor Information</h3>
                            </div>
                           <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" 
                                data-toggle="dropdown" aria-expanded="false">...</a>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Full Name *</label>
                                    <input type="text" placeholder="" name="sfuulname" class="form-control" required>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Relationship *</label>
                                    <input type="text" placeholder=""  name="srelation" class="form-control" required>
                                </div>
                                 <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Address *</label>
                                    <input type="text" placeholder="" name="saddress" class="form-control" required>
                                </div>
                                 <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Phone Number *</label>
                                    <input type="text" placeholder=""  name="snumber" class="form-control" required>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>E-mail Address *</label>
                                    <input type="email" placeholder=""  name="semail" class="form-control" required>
                                </div>
                                 <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Occupation  *</label>
                                    <input type="text" placeholder="" name="soccupied" class="form-control" required>
                                </div>
                                </div>
                                     
                            <div class="heading-layout1">
        <div class="item-title" style="width: 100%;border: 2px solid #c4e3f3; border-radius: 10px; background: #c4e3f3; border: none;">
             <h3 style=" margin-left:7%; text-transform: uppercase; color: red;">Other Information</h3>
                            </div>
                           <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" 
                                data-toggle="dropdown" aria-expanded="false">...</a>
                            </div>
                        </div>
                         <div class="row">
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Extra-curricullar activities *</label>
                                    <input type="text" placeholder="Hobbies/Sport" name="hobby" class="form-control" required>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Physical Disability*</label>
                                    <input type="text" placeholder="Physical disability if any"  name="disability" class="form-control">
                                </div>
                                 <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Language *</label>
                                    <input type="text" placeholder=""  name="language" class="form-control" required>
                                </div>
                                 <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Next of Kin Name *</label>
                                    <input type="text" placeholder="" name="nkin" class="form-control" required>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Next of kin Address *</label>
                                    <input type="text" placeholder=""  name="nkinadres" class="form-control" required>
                                </div>
                                 <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Next of kin Phone No  *</label>
                                    <input type="text" placeholder="" name="nkinphone" class="form-control" required>
                                </div>
                                </div>
                                
                                          
                            <div class="heading-layout1">
        <div class="item-title" style="width: 100%;border: 2px solid #c4e3f3; border-radius: 10px; background: #c4e3f3; border: none;">
             <h3 style=" margin-left:4%; text-transform: uppercase; color: red; font-size: 16.7px;font-weight:bolder;">Educational Information/
             List of Schools/colleges attended with date and certificate obtained</h3>
                            </div>
                           <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" 
                                data-toggle="dropdown" aria-expanded="false">...</a>
                            </div>
                        </div>
                        <div class="row">
                               <div class="col-lg-4 col-12 form-group">
                                    <label>Names/Address of School(s)</label>
                                    <textarea class="textarea form-control" name="Nameschool" id="form-message" cols="10" rows="4" required></textarea>
                                </div>
                                 <div class="col-lg-4 col-12 form-group">
                                    <label>Date/Month/Year</label>
                                    <textarea class="textarea form-control" name="dateattenteed" id="form-message" cols="10" rows="4" required></textarea>
                                </div>
                                  <div class="col-lg-4 col-12 form-group">
                                    <label>Certificate Awarded</label>
                                    <textarea class="textarea form-control" name="certificate" id="form-message" cols="10" rows="4" required></textarea>
                                </div>
                                </div>
                                 <div class="heading-layout1">
        <div class="item-title" style="width: 100%;border: 2px solid #c4e3f3; border-radius: 10px; background: #c4e3f3; border: none;">
<h3 style=" margin-left:4%; text-transform: uppercase; color: red; font-size: 20px;font-weight:bolder;">programme index :-
 specify fisrt and second programme you wish to enrol for</h3>
                            </div>
                           <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" 
                                data-toggle="dropdown" aria-expanded="false">...</a>
                            </div>
                        </div>
                        <div class="row">
                               <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>First choice  *</label>
                                    <select class="select2" name="fchoice" required>
                                        <?php     
 $query =$connection->query("SELECT * FROM depts"); 
 $rowCount=$query->num_rows;
  
       if($rowCount > 0){
  while($row=$query->fetch_assoc()){ 
   echo '<option value= "'.$row['name'].'">'.$row['name'].'</option>';
 }
   }else{
     echo '<option value="">dept not found </option>';
   }
 ?>
                                       
                                    </select>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Second Choice  *</label>
        
                                    <select class="select2" name="schoice" required>
                                        <option value="">Please Second Choice *</option>
                                       <?php     
 $query =$connection->query("SELECT * FROM depts"); 
 $rowCount=$query->num_rows;
  
       if($rowCount > 0){
  while($row=$query->fetch_assoc()){ 
   echo '<option value= "'.$row['name'].'">'.$row['name'].'</option>';
 }
   }else{
     echo '<option value="">dept not found </option>';
   }
 ?>
          
                                       
                                    </select>
                                </div>
                                 <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Upload Credentials: max file size:4mb  *</label>
                       <input type="file" placeholder="" name="files[]"  multiple class="form-control"/ required><span><p>you can upload any number of file,Arrange all the
                        file(credentials) you wish to upload in one folder. select them and upload at the same time </p></span>
                                </div>
                                </div>
                         <div class="heading-layout1">
        <div class="item-title" style="width: 100%;border: 2px solid #c4e3f3; border-radius: 10px; background: #c4e3f3; border: none;">
<h3 style=" margin-left:4%; text-transform: uppercase; color: red; ;font-weight:bolder;">Attestation</h3>
                            </div>
                           <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" 
                                data-toggle="dropdown" aria-expanded="false">...</a>
                            </div>
                        </div>
                         <div class="row">
                               <div class="col-xl-12 col-lg-6 col-12 form-group">
                                    <p>I attest that I have finished all information requested in this application ,that submitting any false information to the college, or withholding information about any previous academic history will make my application for admission to the college, null and void.</p>
                           I've read the attesstation <input type="checkbox" / required></span>
                                </div>
                                </div>
                        
                                <div class="col-md-6 form-group"></div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" name="update" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Submit</button>
                                    <!---<button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button--->
                                </div>
                            </div>
                        </form>
             
                </div>
                <!-- Add Class Area End Here -->
                   <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">Depotter</a> 2021. All rights reserved. Designed by <a
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
    <!-- state and local govt jsss -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="jsss/lga.min.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/add-class.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 05:35:34 GMT -->
</html>