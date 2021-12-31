<?php
session_start();

?>
<?php 
include('config.php'); 
$query_parent = mysqli_query($connection,"SELECT appId, level  FROM application group by level") or die("Query failed: ".mysqli_error());

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
		$.get('loadsubcat.php?parent_cat=' + $(this).val(), function(data) {
			$("#sub_cat").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });
     //javascript for room
    
    	$("#room_cat").change(function() {
		$(this).after('<div id="loader"><img src="img_drop/animated.gif" alt="loading subcategory" /></div>');
		$.get('loadsubcat.php?room_cat=' + $(this).val(), function(datas) {
			$("#bunk_cat").html(datas);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

    
    //javascript for room ends herr

});
</script>
          <?php  require("includes/busry.php");?>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
         <!-- Header Menu Area Start Here -->
        <?php  include "headers/busar_header.php";  ?> 
   <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
    <?php  include"side_bars/buser_sidebar.php"; ?>
            
               <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Hostel Allocation</h3>
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
                                <h3>Allocate Boys rooms to students</h3>
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
                        <?php include "config.php";
                        if(isset($_POST['hostel'])){
                            $level = mysqli_real_escape_string($connection,$_POST['parent_cat']);
                            $name = mysqli_real_escape_string($connection,$_POST['sub_cat']);
                            $room = mysqli_real_escape_string($connection,$_POST['room_cat']);
                            $bunk = mysqli_real_escape_string($connection, $_POST['bunk_cat']);
                            $paid = mysqli_real_escape_string($connection,$_POST['paid']);
                            $remain = mysqli_real_escape_string($connection,$_POST['remain']);
                        $insert=mysqli_query($connection,"insert into room_booking(email,room,bunk,paid,remain,gender,level) 
                        values('$name','$room','$bunk','$paid','$remain','male','$level')");
                        if($bunk =="bunk1"){
                            $update= mysqli_query($connection,"update hostel set bunk1='chosen' where id='$room'");
                        }elseif($bunk =="bunk2"){
                            $update= mysqli_query($connection,"update hostel set bunk2='chosen' where id='$room'");
                        }elseif($bunk =="bunk3"){
                            $update= mysqli_query($connection,"update hostel set bunk3='chosen' where id='$room'");
                        }elseif($bunk =="bunk4"){
                            $update= mysqli_query($connection,"update hostel set bunk4='chosen, where id='$room'");
                        }else{
                            echo "not updated";
                        }
                       if(!$insert){
                            echo "Error: " . $insert . "<br>" . mysqli_error($connection);
                            //echo"<script>alert('room allocation error')
                            //location.href='hostelpayment.php'</script>";
                        }else{
                             $to = $name;
        $subject = 'Hostel Allocation .';
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
    $message .= '<h3 style="font-size:18px">Dear '.$to.', you have been allocated to room no '.$room.' '.$bunk.'</h3>';
    $message.='<p style="color:red; font-size: 15px; text-align:center;">and note that your balance payment is'.$remain.' </p>';
    $message.='<p style="color:red; font-size: 13px;">kindly print hostel payment receipt on your bursery system as evidence for room allocation !!!</p>';
   $message .= '<p style="font-size:16px;">Thanks, Admin.</p>';
   $message .= '<p style="font-size:18px;text-align:center;color:#777">© 2021 De Potter. All Rights Reserved.</p>';
   $message .= '</body></html>';
                  
             if (mail($to, $subject, $message, $headers)){
                             echo"<script>alert('room allocation successful')
                            location.href='hostelpayment.php'</script>";
             }
                        }
                       //echo $name.' '.$room.' '.$bunk;
                        }
                        
                        ?>
                        <p id ='boys'>
                        <form class="new-added-form" method='post'>
                            <div class="row">
                                
                               
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>levels *</label>
                                    <select class="select2" name="parent_cat" id="parent_cat" required="">
                                        <option value=""> Select level *</option>
                                          <?php while($row = mysqli_fetch_array($query_parent)): ?>
        <option value="<?php echo $row['level']; ?>"><?php echo $row['level']; ?></option>
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
    	<label for="category">Room(s) * </label>
    <select  class="select2"  name="room_cat" id="room_cat" required="">
    <option>select room*</option>
        <?php $query_room = mysqli_query($connection,"SELECT *  FROM hostel WHERE bunk1='bunk1' OR bunk2='bunk2' OR bunk3='bunk3' OR bunk4='bunk4'") or die("Query failed: ".mysqli_error());
        while($rowed = mysqli_fetch_array($query_room)): ?>
        <option value="<?php echo $rowed['id']; ?>"><?php echo "Room ".$rowed['id']; ?></option>
        <?php endwhile; ?>
    </select>
    </div>
  <div class="col-xl-3 col-lg-6 col-12 form-group">
    <label>Bunks Available</label>
    <select  class="select2" name="bunk_cat" id="bunk_cat" required="">
        <option>select room first*</option></select>
    
    </div>
    
    
    <!---select roow ends-->
                             
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Amount Paid</label>
                                    <input type="text" name="paid" placeholder="amount paid" class="form-control" required="">
                                </div>
                                  <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Amount remaining</label>
                            <input type="text" name="remain" placeholder="amount remaining" class="form-control" required="">
                                </div>
                               
                               
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" name='hostel' class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">post payment</button>
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