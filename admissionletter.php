<?php session_start();?><?php require("includes/constant.php"); ?> 
  <?php
 if( $admissionstatus != "ADMITTED"){
          echo '<script> alert("Not Yet Admitted")
     window.location = "applicantdashboard.php";
     </script>';
      }
    ?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title>Depotter | Applicant dashboard</title>
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
    <!-- Custom csss -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernize jsss -->
    <script src="jsss/modernizr-3.6.0.min.js"></script>
</head>


<body>
    <!-- Preloader Start Here -->
    <div id="prel/oader"></div>
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
                                <h5 class="item-title"><?php echo  $firstnames ;?></h5>
                               
                                <span>Student</span>
                            </div>
                            <div class="admin-img">
                                <img src="img/<?php echo $passport;?>" alt="Admin" width="30px" height="15px">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title"><?php echo  $firstnames ;?></h6>
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
<div class="container" style="size: a4;">
<div class="row">


<div class="col-lg-12 col-xl-12 col-md-12 col-12">
       <h1 style="font-weight: bolder;text-align:center" > <img src="images/depotter_logo.png"  style="width:; height:;margin:left:%;"><br/>DEPOTTER COLLEGE OF HEALTH EDUCATION
                              <p style="font-size:12px; text-align:center">KM 2, Oru/Ijebu-Igbo Road Oru-Ijebu Ogun State.</p></h1>
 
     </div>
     </div>
       </div>  
    <!--h3 style="margin-left: 100;"> KM 2, Oru/Ijebu-Igbo Road
Oru-Ijebu Ogun State.</h3-->
<div class="container">
<h3>Name : <?php echo $fullname;?></h3>
<h3>Post -UTME/Aggregate Score : <?php echo $score;?>%</h3>

<h3>PROVISIONAL OFFER FOR ADMISSION  : <?php echo $department;?></h3>

<p style="font-size: 18px;">I am pleased to inform you that you have been offered provisional admission into the College to pursue a <?php echo $department;?> <?php   $date=$row['date'];
              $newDate = new DateTime($date);
               echo ($newDate->format('Y')) ."/"; 
               echo ($newDate->format('Y') +1); ?> Academic Session for a duration of
               <?php
               include'config.php';
               $select = mysqli_query($connection,"select years from matricNo where depts='$department'");
               if(mysqli_num_rows($select)>0)while($row=mysqli_fetch_array($select)){
                   $years= $row['years'];
                   
               }
               if($years=='2'){
                   echo "two ";
               }elseif($years=="3"){
                   echo"three ";
               }elseif($years=="4"){
                   echo "four ";
               }
               
               ?>years.</p>
<p style="font-size: 18px;">This admission is provisional. You are expected to have read through the requirements for the chosen course and
possess the requisite qualifications as stated in the College advertisement. You should also visit the JAMB website
to accept this provisional offer of admission.
The confirmation of the provisional admission is however, subject to your fulfilling the following conditions:</p>
<p><li>Payment of a non-refundable Acceptance Fee of twenty thousand Naira (N20,000) only through the web pay
platform not later than school given date to secure placement. Please note that failure to
pay the acceptance fee on or before the deadline automatically nullifies the offer of provisional admission.</li></p>
<p><li>Acceptance of the course offered on the JAMB website and Printing of the JAMB Admission Letter</li></p>
<p><li style="font-size: 18px;">You are to visit the Admissions Office two days after you have paid School Fees with the following<br />
documents:</li>Original copy of the online Acceptance fee receipt<br />
Duly completed online Acceptance form, Application form, Application receipt<br />
A copy of your online Verified O`level Result(s)<br />
JAMB Result Slip/Acknowledgement Slip/Admission Letter<br />
Reference letter from a Public/Civil Servant of a status not below GL12 or equivalent.<br />
Tax Clearance and Photocopies of credentials</ol></p>
<p style="font-size: 18px;">After fulfilling the above conditions, you are to login to your profile on the DEPOTTER portal to pay school fees, print
school fees receipt, clearance certificate and proceed to your department with those documents for clearance
formalities.</p>

<p style="font-size: 18px;">Candidates are to note that they are not yet bonafide students of the DE POTTER COLLEGE OF HEALTH TECHNOLOGY until they
fulfill all admissions requirements and are duly cleared by the departments and the Admissions Office.</p>
<p style="font-size: 18px;">The above notwithstanding, the College reserves the right to withdraw the offer if it is discovered that there are
discrepancies/variance in the requirements submitted for admission.</p>
<p style="font-size: 18px;">In view of high demand, subscription to the college's brand new and highly secured hostel facilities shall be on first
come, first served basis. Students are advised to pay promptly via their profile on the Admission portal.</p>
<p style="font-size: 18px;">Congratulations!</p>
<p style="font-size: 18px;">Seyi Adeware</p>
<p style="font-size: 18px;">REGISTRAR</p>

</div>
<?php if($firstname ==""){ 
unset($_SESSION['LOGGEDstudent']);
echo"<script> location.href='index.php'  </script>";
}?>
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

    <!-- Custom jsss -->
    <script src="jsss/main.js"></script>
<link rel="stylesheet" type="text/css" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css"> 
   <link rel="stylesheet" type="text/css" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker3.min.css"> 
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script> 
</body>
</html>