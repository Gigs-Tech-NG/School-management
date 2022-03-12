<?php
session_start();
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
    <div id="preloader"></div>
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

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/add-class.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 05:35:34 GMT -->
</html>