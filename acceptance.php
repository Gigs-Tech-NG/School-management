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
         <link rel="stylesheet" type="text/css" href="css41/DT_bootstrap.css">
          <?php  require("includes/studentMenu.php");?><script src="jsss/jquery.js" type="text/javascript"></script>
	<script src="jsss/bootstrap.js" type="text/javascript"></script>
	
	<script type="text/javascript" charset="utf-8" language="javascript" src="jsss/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf-8" language="javascript" src="jsss/DT_bootstrap.js"></script>
    <!-- Normalize csss -->
   </head><body>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
     <?php include "headers/admin_header.php";?>
         <!-- Header Menu Area Start Here -->

            
            
           
       
        <!-- Header Menu Area End Here -->
       
        <!-- Page Area Start Here -->
        
        <div class="dashboard-page-one">
        <?php  include"side_bars/admin_sidebar.php"; ?>
            <!-- Sidebar Area Start Here -->
            
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Applicants</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>All Applicants</li>
                    </ul>
                </div>
                 <form method="post" action="javascript:void(0);">
	<button name="print" onclick="printPageArea('printableArea')">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
  <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
  <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
</svg></button>
	</form>
    <div id="printableArea">
                <!-- Breadcubs Area End Here -->
                <!-- Student Table Area Start Here -->
                <!-- Breadcubs Area End Here -->
                <!-- Student Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                         <h1 style="font-weight: bolder;text-align:center" > <img src="images/depotter_logo.png"  style="width:; height:;margin:left:%;"><br/>DE POTTER COLLEGE OF HEALTH TECHNOLOGY
                              <p style="font-size:12px; text-align:center">KM 2, Oru/Ijebu-Igbo Road Oru-Ijebu Ogun State.</p></h1>
                        <div class="heading-layout1">
                            <div class="item-title">
                              
                                 <?php
    					include('config.php');
    				 $admitted="ADMITTED";
                       $slv="";
                       
    					$quer=mysqli_query($connection,"SELECT acceptancefee FROM application WHERE level='$slv' AND admissionstatus='$admitted'");
                        $total = 0;
    					while($row=mysqli_fetch_array($quer)){
    					    if(empty($row['acceptancefee'])){
                                echo"";
                            }else{
    					   $total += $row['acceptancefee'];
                          
                            }
                           $income =  $total; 
                       
                        }
                    
    				
    						?>
                                <h3>Acceptance FEE Payment History Total Income: #<?php echo $income;?> (<?php
    date_default_timezone_set('Africa/Lagos');
    echo date('Y',time());?>/<?php
    date_default_timezone_set('Africa/Lagos');
    echo date('Y',time())+1;?> Session)</h3> 
                            </div>
                          <!--- <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" 
                                data-toggle="dropdown" aria-expanded="false">...</a>
        
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div--->
                        </div>
                        <!----<form class="mg-b-20">
                            <div class="row gutters-8">
                                
                                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Name ..." class="form-control">
                                </div>
                                
                                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                    <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                </div>
                            </div>
                        </form--->
                         <div class="table-responsive">
                       	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
			<thead>
				<tr>
					<th align="center">S/N</th>
					
                    <th align="center">surname</th>
                    <th align="center">phone</th>
					<th align="center">amount</th>
                    <th align="center">email</th>
                    <th align="center">status</th>
				
					<th align="center">gender</th>
						<th align="center">processed date</th>
                   
                   
				</tr>
                
			</thead>
			<?php
			$sn=0;
			$sn=$sn + 1;
			 $admitted="ADMITTED";
			$query= mysqli_query($connection,"select * from application  WHERE level = '' AND admissionstatus='$admitted' ORDER BY appId DESC");
			while($row=mysqli_fetch_array($query)){
			 $idd = $row['appId'];
     $fname = $row['surname']; $lname = $row['middlename'];  $mname = $row['lastname']; $stu_email = $row['email'];
      $stu_no = $row['phone']; $address = $row['address'];  $state = $row['state'];  $lga = $row['lga'];
      $gender= $row['gender']; $dbirth = $row['dob'];  $religion = $row['religion']; $marital = $row['maritalStatus'];
      //$stu_img = $row["stu_image"]; 
      $sponsor = $row['fullname']; $relationship = $row['relationship'];
       $spon_add = $row['sponsoraddress'];
      $spon_no = $row['sponsorphone']; $spon_mail = $row['sponsoremail']; $spon_occ = $row['sponsoroccupation'];
      //$curricular = $row['curricullar'];
      $disable = $row['disability']; $lang = $row['language']; $kin_name = $row['nokname']; $kin_add = $row['nokaddress']; 
      //$kin_no = $row['nkophone'];
      $sch_name = $row['eduname']; $sch_date = $row['edudate']; //$certificate = $row['certificate']; 
      $firstchoice = $row['firstchoice'];
      $secondchoice = $row['secondchoice']; 
      //$imgsrc ='uploads/'.$row['stu_image'];
      $imgsrc =$row['picture'];
      $admission= $row['admissionstatus'];
				$name=$row['date'];
				 $amount = $row['acceptancefee'];
				$fullname=$fname.' '.$lname.' '.$mname;
			?>
			<tr>
			
				<td>
					<?php echo $sn++ ;?>
				</td>
               
				<td>
					<?php echo $fullname;?>
				</td>
                <td>
                	<?php echo $stu_no;?>
                </td>
                <td>
                	#<?php echo $amount;?>
                </td>
                <td>
                	<?php echo $stu_email ;?>
                </td>
                <td>
                <?php echo $admission ;?>
                </td>
              <td><?php echo $gender;?></td>
                
                
                 <td>
             &nbsp;<?php echo $row['date'];?>
                </td>
                
			
			</tr>
            
			<?php }?>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div> </div>
                </div>
                <!-- Teacher Payment Area End Here -->
                <footer class="footer-wrap-layout1">
                     <div class="copyright">© Copyrights <a href="#"></a> 2021, De Potter College of Health Technology <a
                            href="#"></a></div>
                </footer>
           
            </div>
               <script>
		function printPageArea(areaID){
    var printContent = document.getElementById(areaID);
    var WinPrint = window.open('', '', 'width=900,height=650');
    WinPrint.document.write(printContent.innerHTML);
    WinPrint.document.close();
    WinPrint.focus();
    WinPrint.print();
    WinPrint.close();
}
</script>
<?php if($firstname ==""){ 
unset($_SESSION['LOGGED']);
echo"<script> location.href='index.php'  </script>";
}?>
        </div>
  <script src="jsss/plugins.js"></script>
    <!-- Popper jsss -->
    <script src="jsss/popper.min.js"></script>
    <!-- Bootstrap jsss -->
    <script src="jsss/bootstrap.min.js"></script>
    <!-- Data Table jsss -->
  
    <!-- Smoothscroll jsss -->
    <script src="jsss/jquery.smoothscroll.min.php"></script>
    <!-- Scroll Up jsss -->
    <script src="jsss/jquery.scrollUp.min.js"></script>
    <!-- Custom jsss -->
    <script src="jsss/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/teacher-payment.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 05:35:33 GMT -->
</html>