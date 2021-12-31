<?php
session_start();

$_SESSION['timeout'] = time(); 
if (time()-$_SESSION['timeout'] > 1800){
   unset($_SESSION['timeout']);
  // echo "<script> location.href='forget.php' <script>";
}
if(( $_SESSION['LOGGEDict']) !="true"){
    echo"<script> location.href='stafflogin.php'  </script>";
}

?>

<!doctype html>
<html>
<head>
<title>De Potter College || Re-defining lost hope</title>
		<link href="css41/bootstrap.css" rel="stylesheet" type="text/css" media="screen"> 
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
        <link rel="icon" href="images/logo.png">
</head>
	<script src="jsss/jquery.js" type="text/javascript"></script>
	<script src="jsss/bootstrap.js" type="text/javascript"></script>
	
	<script type="text/javascript" charset="utf-8" language="javascript" src="jsss/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf-8" language="javascript" src="jsss/DT_bootstrap.js"></script>

<style>
</style>

<body style="color:black">
   
    <h5><a href="adminict.php">Previous</a></h5>
    
	    <div class="row-fluid">
	        <div class="span12">
	            	<form method="post" action="">
    <form method="post" action="javascript:void(0);">
	<button name="print" onclick="printPageArea('printableArea')">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
  <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
  <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
</svg></button>
	</form>
    <div id="printableArea">

	            <div class="container-fluid" style="width:100%;padding-left:2%;padding-right:2%">
		<br />
		<h1 style="text-align: center;"><p>ADMISSION LIST (<?php
    date_default_timezone_set('Africa/Lagos');
    echo date('Y',time());?>/<?php
    date_default_timezone_set('Africa/Lagos');
    echo date('Y',time())+1;?> Session)</h2></p></h1>
       <!-- <h5 style="text-align: center;">search for applicant</h5--->	
		<br />
	<form method="post" action="">
		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="eexample">
			<thead>
			    <tr>
 <th align="center">S/N</th>
    <th align="center">Full name</th>
    <th align="center">Faculty</th>
    <th align="center">Department</th>
    <!--<th>first choice</th>
    <th>second choice</th>
    <th>Date submitted</th----->
    <th align="center">P-UTME Score</th>
    <th align="center">Admission status</th>
    <!--<th>Action</th---->
</tr>
<?php
$error ="";
?>
<?php
// $connection = mysqli_connect("localhost","root","","depotter");
//$id=$_GET['id'];
include "config.php";
$sn=0;
$sn=$sn+1;
$admitted="ADMITTED";
$level="";
$select = mysqli_query($connection, "SELECT * FROM application WHERE admissionstatus='$admitted' AND level = '$level'");

if(!$select){
    $error = "not selected";
}while($row =mysqli_fetch_assoc($select)){
    $idd = $row['appId'];
     $fname = $row['surname']; $lname = $row['middlename'];  $mnane = $row['lastname']; $stu_email = $row['email'];
      //$stu_no = $row['teller_no']; $address = $row['address'];  $state = $row['state'];  $lga = $row['stu_lga'];
      $faculty= $row['faculty']; $department = $row['department'];  //$religion = $row['religion']; $marital = $row['relationship'];
      //$stu_img = $row["stu_image"]; 
     // $sponsor = $row['sfuulname']; $relationship = $row['srelation'];
      // $spon_add = $row['saddress'];
      //$spon_no = $row['snumber']; $spon_mail = $row['semail']; $spon_occ = $row['soccupied'];
     // $curricular = $row['hobby'];
      //$disable = $row['disability']; $lang = $row['language']; $kin_name = $row['nkin']; $kin_add = $row['nkinadres']; 
      //$kin_no = $row['nkinphone'];
      //$sch_name = $row['Nameschool']; $sch_date = $row['dateattenteed']; //$certificate = $row['certificate']; 
      //$firstchoice = $row['fchoice'];
      //$secondchoice = $row['schoice']; 
     // $imgsrc ='img/'.$row['passport'];
       $fullname =$fname ." ".$lname." ".$mnane ;
      ?>
    <tr>
<td><?php echo $sn++;?></td>
  <td><?php echo $fullname;?></td>
  <td><?php echo $faculty;?></td>
  <td><?php echo $department;?></td>
  
 
  
           <td><?php echo $row['score'] ;?>%</td>
  <td><?php echo $row['admissionstatus'] ;?></td>
  
        
   <!-- <td><input type="submit" value="UPDATE RECORD"  name="submit"/></td-->					
<!--<td class="badge badge-pill badge-success d-block mg-t-8"><a style="color:white" href="?submit=<?php //echo $row['id'];?>">
    <input type="submit" value="UPDATE RECORD" name="submit"></a></td-->
                              
    						
       					</td></tr>
<?php


} 

?>

</thead>
</table>

</form>
</div>
 </div>
          </body> 
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
</html>