<?php
session_start();
if(( $_SESSION['LOGGEDstudent']) !="true"){
    echo"<script> location.href='loggin.php'  </script>";
}

$_SESSION['timeout'] = time(); 
if (time()-$_SESSION['timeout'] > 600){
   unset($_SESSION['timeout']);
  // echo "<script> location.href='forget.php' <script>";
}
?>
 <?php 
  include "config.php";
//if(isset($_GET['zJitKoljsddkyhkajswkjwnwkaasjddddjytdnastkjdawndjdtyjsstzgzzstsAFDRSGSjkssjiaakskajaksoasaihahosoajs20kdjoAFDHSDHNHNDMNSJ109'])){
 //   $idss =$_GET['zJitKoljsddkyhkajswkjwnwkaasjddddjytdnastkjdawndjdtyjsstzgzzstsAFDRSGSjkssjiaakskajaksoasaihahosoajs20kdjoAFDHSDHNHNDMNSJ109'];
  //  $amont=10500;

  
     $select="SELECT * FROM application WHERE matricNo='".$_SESSION['matricNo']."'";
    $result=mysqli_query($connection, $select);
    if(mysqli_num_rows($result) > 0){
        while($row=mysqli_fetch_assoc($result)){
             $genderJ=$row['dob'];
             $marital=$row['relationship'];
            $address=$row['address'];
            $firstchoice=$row['firstchoice'];
            $secondchoice=$row['secondchoice'];
            $phone=$row['phone'];
            $faculty=$row['faculty'];
            $department=$row['department'];
            $level=$row['level'];
             $sfuulname=$row['fullname'];
            $sponsoraddress=$row['sponsoraddress'];
            $sponsorphone=$row['sponsorphone'];
            $gender= $row['gender'];
            $matricNo=$row['matricNo'];
              $state= $row['state'];
                $religion= $row['religion'];
             $passport=$row['picture'];
            $id = $row['appId'];
      $state=$row['state'];
$local=$row['lga'];
$fullnames=$row['fullname'];
$sponsoraddress=$row['sponsoraddress'];
$sponsorphone=$row['sponsorphone'];
            $email_val = $row['email'];
             $firstnameS = $row['surname'];
                 $lastname = $row['lastname'];
                  $middle = $row['middlename'];
           $firstname = $firstnameS. ' ' .$middle;
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
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

   <script>
$(document).ready(function() {
	$('#state').change(function(){
		var state= $(this).val();
		$("#lga"wink.load("applicantform.php",{state:state, ajax: 'true'});
	});
});
</script> 
    
    
    
    
    
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
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
     
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Hostel List</h3>
                    <ul>
                        <li>
                            <a href="student.php">Home</a>
                        </li>
                        <li>Hostel</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <div class="row">
                    <!-- Add Room Area Start Here -->
                    <div class="col-4-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Choose a Room</h3>
                                    </div>
               
                                </div>
                   
                             <?php
                             
    	include('config.php');
        $ids=$_GET['id'];
        $qu=mysqli_query($connection,"SELECT * FROM hostel WHERE id='$ids'");
        $roww=mysqli_fetch_array($qu);
           if(isset($_POST['submit'])){
                                
                                    
                                    $email=$_POST['email'];

        $sqli="SELECT * FROM application WHERE email ='$email'";
 $result= mysqli_query($connection,$sqli);
 $row= mysqli_fetch_array($result);
 $count=mysqli_num_rows($result);
 
  $sql="SELECT * FROM hon WHERE email ='$email'";
 $resultt= mysqli_query($connection,$sql);
 $col = mysqli_fetch_array($resultt);
 $counted=mysqli_num_rows($resultt);
 if($count<1){
echo("<h3 style='color: red; font-weight: bolder; text-align: center;'> $email  does not Exist</h3>");
 }elseif($counted>0){
    echo("<h3 style='color: red; font-weight: bolder; text-align: center;'> $email email has  Already Booked</h3>");
    }
    
    
    else{
        include "deletebunk.php";
      }           
             
 
 }

         
    ?>
 
                                <form method="POST" class="new-added-form">
                                    <div class="row">
                                      <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>email on Profile</label>
                                            <input type="email" placeholder="" name="email" value="<?php echo $email_val;?>" class="form-control">
                                        </div>
                                        
                                          <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                                       	<?php
    					include('config.php');
                        $ids=$_GET['id'];
    					$qu=mysqli_query($connection,"SELECT * FROM hostel WHERE id='$ids'");
    					while($roww=mysqli_fetch_array($qu)){
    						?>
                                          <label>Select Bunk</label>
                                          <select value="" name="bunk"class="select2" required="">
                                        <option value="">Select Bunk *</option>
                                        <option value="bunk1"><?php echo $roww['bunk1'] ?></option>
                          
                                    
                                        <option value="bunk2"><?php echo $roww['bunk2'] ?></option>
                                          <option value="bunk3"><?php echo $roww['bunk3'] ?></option>
                                          <option value="bunk4"><?php echo $roww['bunk4'] ?></option>
                            
                                    </select>
                                    		<?php
    					}
                        
                       
                        
    				?>
                                           
                                        </div>
                                        
                                      
                                     
                                        
                                        <div class="col-12 form-group mg-t-8">
                                            <button type="submit" name="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Book</button>
                                            
                                        </div>
                                    </div>
                                </form>
          
                            </div>
                        </div>
                    </div>
                    <h4 style="color:red;">Note:It Is Not Advisable For Student To Choose The Choosen Bunks Else Such Student With The email Wont Be Able To BooK for Any Hostel In The School Campuses</h4>
        
                    <!-- All Room List Area End Here -->
                </div>
                <footer class="footer-wrap-layout1">
         
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
    <!-- Scroll Up jsss -->
    <script src="jsss/jquery.scrollUp.min.js"></script>
    <!-- Date Picker jsss -->
    <script src="jsss/datepicker.min.js"></script>
    <!-- Data Table jsss -->
    <script src="jsss/jquery.dataTables.min.js"></script>
    <!-- Custom jsss -->
    <script src="jsss/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/hostel.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 05:35:34 GMT -->
</html>

