<?php
session_start();

$_SESSION['timeout'] = time(); 
if (time()-$_SESSION['timeout'] > 1800){
   unset($_SESSION['timeout']);
  // echo "<script> location.href='forget.php' <script>";
}
if(( $_SESSION['LOGGED']) !="true"){
  //  echo"<script> location.href='stafflogin.php'  </script>";
}

?>
  <?php
  include_once "config.php";
if (isset($_POST['update'])) {
    $id = $_GET['edit'];
 // $admittedED =  "ADMITTED";
          	$statusS=0;
		$status=1;
     	$scoreS =mysqli_real_escape_string($connection,$_POST['scoreS']);
     	$department = mysqli_real_escape_string($connection,$_POST['department']);
     	$faculty = mysqli_real_escape_string($connection,$_POST['faculty']);
            $admitted =$_POST['admitted'];
  
 
	 include "config.php";
	 $update = "update applicants set admissionstatus='$admitted',department='$department',faculty='$faculty',score='$scoreS',status='$status' where id='$id'";
    $result =mysqli_query($connection,$update);

    if (!$result){
        die (("faileds").mysqli_connect_error());
    } 

   
   
    }
  ?>                     
    	<!doctype html>
<html>
<head>
 <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <link rel="icon" href="img/logo.png" />

       <!-- meta tag -->
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
    <!-- Full Calender csss -->
    <link rel="stylesheet" href="csss/fullcalendar.min.css">
    <!-- Animate csss -->
    <link rel="stylesheet" href="csss/animate.min.css">
    <!-- Custom csss -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernize js -->
    <script src="jsss/modernizr-3.6.0.min.js"></script>
<style>
table{
    border:1px solid #777;
    text-align: center;
    width: 100%;
    color: black;
    background: white;
    text-transform: uppercase;
}
th{
      border:1px solid #777;
}
tr{
      border:1px solid #777;
}
th{
      border:1px solid #777;
}
td{
      border:1px solid #777;
}
body{
    
    
}
</style>

</head>
<body style='background-color:white'>
<div class="container-fluid">

<a href="administration.php" style="color:blue;">Previous</a>
<center> <img src="images/depotter_logo.png" width="150" alt="logo" style="margin-top:2%"></center><br />
<center><h2 style="font-weight: bolder;">APPLICANT ADMISSION STATUS</h2></center>
<form method="POST" action="">
<table>
<thead>
<tr>
<th>photo</th>
<th>S/N</th>
    <th>surname</th>
    <th>middle name</th>
    <th>last name</th>
    <th>email</th>
    <th>phone no</th>
    <th>Address</th>
    <th>state</th>
    <th>LGA</th>
    <th>gender</th>
    <th>Date of birth</th>
    <th>religion</th>
    <th>Marital status</th>
    <th>sponsor Names</th>
    <th>relationship</th>
    <th>Address(sponsor)</th>
    <th>No(sponsor)</th>
    <th>email(sponsor)</th>
    <th>Occupation</th>
    <th>curr_activities</th>
    <th>disability</th>
    <th>language</th>
    <th>kin's name</th>
    <th>kin's address</th>
    <th>kin's no</th>
    <th>sch(s)_Names</th>
    <th>date</th>
    <th>first choice</th>
    <th>second choice</th>
    <th>Date submitted</th>
    <th>input P-UTME score</th>
    <th>Admission status</th>
    <th>Action</th>
</tr>
<?php
$error ="";
?>
<?php
// $connection = mysqli_connect("localhost","root","","depotter");
//$id=$_GET['id'];
include "config.php";
$select = mysqli_query($connection, "SELECT * FROM applicants ORDER BY id DESC");

if(!$select){
    $error = "not selected";
}while($row =mysqli_fetch_assoc($select)){
    $idd = $row['id'];
     $fname = $row['first_name']; $lname = $row['middle_name'];  $mnane = $row['last_name']; $stu_email = $row['email'];
      $stu_no = $row['teller_no']; $address = $row['address'];  $state = $row['state'];  $lga = $row['stu_lga'];
      $gender= $row['gender']; $dbirth = $row['dbirth'];  $religion = $row['religion']; $marital = $row['relationship'];
      //$stu_img = $row["stu_image"]; 
      $sponsor = $row['sfuulname']; $relationship = $row['srelation'];
       $spon_add = $row['saddress'];
      $spon_no = $row['snumber']; $spon_mail = $row['semail']; $spon_occ = $row['soccupied'];
      $curricular = $row['hobby'];
      $disable = $row['disability']; $lang = $row['language']; $kin_name = $row['nkin']; $kin_add = $row['nkinadres']; 
      $kin_no = $row['nkinphone'];
      $sch_name = $row['Nameschool']; $sch_date = $row['dateattenteed']; //$certificate = $row['certificate']; 
      $firstchoice = $row['fchoice'];
      $secondchoice = $row['schoice']; 
      $imgsrc ='img/'.$row['passport'];
      $fullname =$fname ." ".$lname." ".$mnane ;
      ?>
    <tr>
<td><img src='<?php echo $imgsrc;?>' width ="50px" height ="40px" style="border-radius:50%;"/></td>
  <td> <?php echo $idd;?></td>
  <td><?php echo $fname;?></td>
  <td><?php echo $lname;?></td>
  <td> <?php echo $mnane;?></td>
  <td><?php echo $stu_email?></td>
  <td><?php echo $stu_no;?></td>
  <td><?php echo $address;?></td>
  <td><?php echo $state;?></td>
  <td><?php echo $lga;?></td>
  <td><?php echo $gender;?></td>
  <td> <?php echo $dbirth;?></td>
  <td> <?php echo $religion;?></td>
  <td><?php echo $marital;?></td>
  <td><?php echo $sponsor;?></td>
  <td><?php echo $relationship;?></td>
  <td> <?php echo $spon_add;?></td>
  <td><?php echo $spon_no;?></td>
  <td> <?php echo $spon_mail;?></td>
  <td><?php echo $spon_occ;?></td>
  <td><?php echo $curricular;?></td>
  <td><?php echo $disable;?></td>
  <td><?php echo $lang;?></td>
  <td><?php echo $kin_name;?></td>
  <td><?php echo $kin_add;?></td>
  <td><?php echo$kin_no;?></td>
  <td><?php echo $sch_name;?></td>
  <td> <?php echo $sch_date;?></td>
  <td> <?php echo $firstchoice;?></td>
  <td><?php echo $secondchoice;?></td>
  <td><?php echo date('d/m/y',time());?></td>
  
           <td><?php echo $row['score'] ;?></td>
  <td><?php echo $row['admissionstatus'] ;?></td>
  <td>
    <a href="try1.php?edit=<?php echo $row['id'] ;?>">Edit</a>
   </td>
        

    						
       					</td></tr>
<?php


} 

?>

</thead>
</table>

</form>
</div>
</body>
</html>

