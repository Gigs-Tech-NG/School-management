<?php
session_start();

$_SESSION['timeout'] = time(); 
if (time()-$_SESSION['timeout'] > 1800){
   unset($_SESSION['timeout']);
  // echo "<script> location.href='forget.php' <script>";
}
if( $_SESSION['LOGGEDsaff'] !="true"){
    echo"<script> location.href='stafflogin.php'  </script>";
}

?>
 <?php 
  include "config.php";
//if(( $_SESSION['username']) == "Nubian"){
//if(isset($_GET['zdeidhdjkksdkdsakdkkikshsdlsnsslksksssssjsksldfmnokvsvkskh1237jhdc678sswwqakckxcnhbkvllszmc0980w87889'])){
  //  $idss =$_GET['zdeidhdjkksdkdsakdkkikshsdlsnsslksksssssjsksldfmnokvsvkskh1237jhdc678sswwqakckxcnhbkvllszmc0980w87889'];
   
   // $_SESSION['username']="ade"; // Initializing Session
	//    $_SESSION['password']=$passd;
	
      $select="SELECT * FROM admlogin WHERE username='".$_SESSION['username']."' AND password='".$_SESSION['password']."'";
    $result=mysqli_query($connection, $select);
    if(mysqli_num_rows($result) > 0){
        while($row=mysqli_fetch_assoc($result)){
            
             $passport=$row['picture'];
            $id = $row['id'];
            $email_val = $row['email'];
             $firstname = $row['fullname'];
               $rank = $row['rank'];
                
      //  }
    }
}
    ?>
<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/add-class.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 05:35:34 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Depotter|| Re-define lost hope</title>
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
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>

<body>
     <!-- Preloader Start Here -->
    <div id="preloader"></div><?php require("includes/footer.php");?>
    
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
                                <h5 class="item-title"><?php echo  $firstname ;?></h5>
                                <span>Student</span>
                            </div>
                            <div class="admin-img">
                                <img src="img/<?php echo $passport;?>" alt="Admin" width="30px" height="15px">
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
                      
                       
                        <!---<li class="nav-item sidebar-nav-item">
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
                        </li-->
                            
                         <!---<li class="nav-item sidebar-nav-item">
                            <a href="" class="nav-link">  <i class="fas fa-file-invoice-dollar text-orange"></i><span>Busery</span></a>
                            <ul class="nav sub-group-menu">
                                
                                <li class="nav-item">
                                    <a href="schoolfeeprint.php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Print School Fee Receipt</a>
                                </li>
                                 <li class="nav-item">
                           <a href="Staff.php" class="nav-link"><i class="fa fa-home " ></i></i><span>Home</span></a>
                        </li>
                                <li class="nav-item">
                                    <a href="COURSES.php" class="nav-link"><i class="fa fa-address-card" aria-hidden="true"></i><span>Add Students to Classes</span></a>
                                   
                                </li>
                               
                            </ul>
                        </li--->
                           <li class="nav-item">
                           <a href="Staff.php" class="nav-link"><i class="fa fa-home " ></i></i><span>Home</span></a>
                        </li>
                                <li class="nav-item">
                                    <a href="COURSES.php" class="nav-link"><i class="fa fa-address-card" aria-hidden="true"></i><span>Add Students to Classes</span></a>
                                   
                                </li> 
                                 <li class="nav-item">
                            <a href="Staff.php" class="nav-link"><i class="fa fa-address-card" aria-hidden="true"></i><span>Lecture</span></a>
                           
                        </li> 
                          <li class="nav-item">
                                <a href="myprofilestaff.php" class="nav-link"><i class="fa fa-user-md" aria-hidden="true"></i><span>Profile</span>
                            </a> 
                            </li>
                       <!-- <li class="nav-item">
                            <a href="myscore.php" class="nav-link"><i class="	fas fa-book-open" aria-hidden="true"></i><span>My score</span></a>
                        </li--->
                       

                        
                        <!---<li class="nav-item sidebar-nav-item">
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
                            <a href="Eresult.php" class="nav-link"><i class="fas fa-book-reader"></i><span>Check Results</span></a>
                        </li>
                          <li class="nav-item">
                            <a href="EClass.php" class="nav-link" target="_blank"><i class="fas fa-video text-red"></i><span>E-Class</span></a>
                        </li--->
                    </ul>
                </div>
            </div>
            </div>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>LECTURES</h3>
                    <ul>
                        <li>
                            <a href="staff.php">Home</a>
                        </li>
                        <li>Lecture</li>
                    </ul>
                </div>
                 <!-- Breadcubs Area End Here -->
                <!-- Add Class Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="item-img" style="text-align:center;border-radius:50%">
                               
                            </div>  <div class="heading-layout1">
                            
      
               <h4 style="color:red">Create Lectures</h4>
          
                            
                           <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" 
                                data-toggle="dropdown" aria-expanded="false">...</a>
        
                               <!-- <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div--->
                            </div>
                        </div>
                        <form class="new-added-form" method="post"   enctype="multipart/form-data">
                               <div class="container" style="width:100%">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                   <label>Course Title</label>
                                            <input type="text" placeholder="course title" name="Title" class="form-control" required=""/>
                                </div>
                                
                               <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> Course Code</label>
                                            <input type="text" placeholder="course code" name="code" class="form-control" required=""/>
                                </div>
                                 
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Levels *</label>
                                    <select class="select2" name="level"required="" >
                                        <option value="" >Please Select *</option>
                                        <option value="Year1">Year 1</option>
                                        <option value="Year2">Year 2</option>
                                        <option value="Year3">Year 3</option>
                                        <option value="Year4">Year 4</option>
                                    </select>
                                </div>
                               
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                     <label>Topic *</label>
                                    <textarea class="textarea form-control" name="details" id="form-message" cols="20" rows="2"required=""></textarea>
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>paste link to lecture here, *** do not include https:// ***</label>
                                            <input type="text" placeholder="lecture link" name="link" class="form-control" required=""/>
                                </div>
                                
                                  <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Posted By * </label>
                                            <input type="text" placeholder="" name="poster" class="form-control" required=""/>
                                            <i class="fas fa-user"></i>    </div>
                            
                            
                             <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Date</label>
                                            <input type="text" placeholder="" name="Date" class="form-control air-datepicker" required=""/>
                                            <i class="far fa-calendar-alt"></i>    </div>
           
                        
                                <div class="col-md-6 form-group"></div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" name="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                            </div>
                             </div>
                        </form>
              <?php
                                 include "config.php";
                                //$connection = mysqli_connect("localhost","root","","depotter");
                                if(isset($_POST['submit'])){
                                    $code = mysqli_real_escape_string($connection,$_POST['code']);
                                    $link =mysqli_real_escape_string($connection, $_POST['link']);
                                    $class = $_POST['level'];
                                    $title = mysqli_real_escape_string($connection,$_POST['Title']);
                                    $detail =mysqli_real_escape_string($connection, $_POST['details']);
                                    $poster = mysqli_real_escape_string($connection,$_POST['poster']);
                                    $date = mysqli_real_escape_string($connection,$_POST['Date']);
                                    if($class=="Year1"){
                                    $insert=mysqli_query($connection,"insert into year_1(title,detail,poster,date,course_code,course_link)
                                     values
                                    ('$title','$detail','$poster','$date','$code','$link')");
                                    if($insert){
                                        echo "<script>window.alert('posted into year 1');
                                        location.href='post_lecture.php';
                                       </script>";
                                    }
                                    }
                                    elseif($class=="Year2"){
                                        $inserted =mysqli_query($connection,"insert into year_2(title,detail,poster,date,course_code,course_link)
                                         values
                                    ('$title','$detail','$poster','$date','$code','$link')");
                                    if($inserted){
                                        echo "<script>window.alert('posted into year 2');
                                        location.href='post_lecture.php';
                                       </script>";
                                    }
                                    }elseif($class=="Year3"){
                                        $inserting =mysqli_query($connection,"insert into year_3(title,detail,poster,date,course_code,course_link)
                                         values
                                    ('$title','$detail','$poster','$date','$code','$link')");
                                    if($inserting){
                                        echo "<script>window.alert('posted into year 3 ');
                                        location.href='post_lecture.php';
                                       </script>";
                                    }
                                    }
                                    elseif($class=="Year4"){
                                        $insertion =mysqli_query($connection,"insert into year_4(title,detail,poster,date,course_code,course_link) 
                                        values
                                    ('$title','$detail','$poster','$date','$code','$link')");
                                    if($insertion){
                                        echo "<script>window.alert('posted into year 4');
                                        location.href='post_lecture.php';
                                       </script>";
                                    }
                                    } else{
                                       if(!$insert){
                                        echo("not inserted to year 1");
                                       }elseif(!$inserted){
                                        echo"not inserted to year 2";
                                       }elseif(!$inserting){
                                        echo "not inseted into year 3";
                                       }elseif(!$insertion){
                                        echo "not inserted into year 4";
                                       }
                                    }  
                                    
                                
                                }
                                
                                
                                ?>
                </div> </div>
                <!-- Add Class Area End Here -->
                   <footer class="footer-wrap-layout1">
                    <div class="copyright">?? Copyrights <a href="#">Depotter</a> 2021. All rights reserved. Designed by <a
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


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/add-class.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 05:35:34 GMT -->
</html>