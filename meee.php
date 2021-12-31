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

?><?php
if($_GET['edit'] == ""){
    echo"<script> location.href='stafflogin.php'  </script>";
};
?>
     <?php
  include_once "config.php";
if (isset($_POST['update'])) {
    $id = $_GET['edit'];
 // $admittedED =  "ADMITTED";
          	$statusS=0;
		$status=1;
		$mailer =mysqli_real_escape_string($connection,$_POST['mailer']);
     	$scoreS =mysqli_real_escape_string($connection,$_POST['scoreS']);
     	$department = mysqli_real_escape_string($connection,$_POST['department']);
     	$faculty = mysqli_real_escape_string($connection,$_POST['faculty']);
            $admitted =$_POST['admitted'];
            $COdes=rand(000,999); 
      $select="SELECT * FROM application WHERE where appId='$id'";
    $result = mysqli_query($connection, $select);
  if(mysqli_num_rows($result) > 0){
       while($row=mysqli_fetch_assoc($result)){
            $ids = $row['appId'];
         $score = $row['score'];
            $email = $row['email'];
             $first = $row['suranme'];
              $lastname = $row['lastname'];
            $password =  $lastname.$id."ij^d!".$id."3";
             $username = $firstname.$id;
       }
    }    
     date_default_timezone_set('Africa/Lagos');
      $matric=date('Y',time());
     $selected=mysqli_query($connection,"SELECT * FROM matricNo WHERE depts='$department'");
     if(!$selected){
          
      }while($row=mysqli_fetch_assoc($selected)){
         $code=$row['code'];
         $YEAR = $row['years'];
}
     $matricNo= $matric.$YEAR.$COdes.$code;
   $subject = 'ADMITTED.';
$from = 'admin@depotterhealthtech.sch.ng';
//$fromName="qoztore";
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .='From: Depotter '.'<'.$from.'>' ."\r\n".
//$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<div style="text-align:center"><img src="http://depotter.agertechsolutions.com.ng/images/log.png" class="mobile-logo" alt="Logo"></div>';
$message .= '<p style="color:#777;font-size:16px;text-align:center">WELCOME TO DEPOTTER.</p>';
$message .= '<h3 style="font-size:18px">Dear '.$first.',CONGRATULATIONS, you have been admitted to the our nable college.Please pay up the Acceptance fee</h3>';
$message .= '<h3 style="font-size:18px">P-UTME SCORE: '.$scoreS.'%</h3>';
$message .= '<h3 style="font-size:18px">Username: '.$username.'</h3>';
$message .= '<h3 style="font-size:18px">Password: '.$password.'</h3>';
$message .= '<a href="http://depotter.agertechsolutions.com.ng/loggin.php">Login</a>';
$message .= '<p style="font-size:16px;">Thanks,Admin.</p>';
$message .= '<p style="font-size:18px;text-align:center;color:#777">© 2021 Depotter. All Rights Reserved.</p>';
$message .= '</body></html>';
 
 
    // if ($firstnameJ ||  $lastnameJ ||   $phonemailJ  ||  $passwordJ) {
   
  // }
//	$update="UPDATE applicants SET score ='$firstnameJ',admissionstatus ='$lastnameJ', WHERE id='$id'";
if($admitted == "ADMITTED"){
	 include "config.php";
	 $update = "update application set admissionstatus='$admitted',department='$department',faculty='$faculty',score='$scoreS',status='$status',matricNo='$matricNo' where appId='$id'";
   // $result =mysqli_query($connection,$update);
    
}
elseif($admitted == "NOT YET ADMITTED"  or $admitted == "ADMISSION IN PROGRESS"){
    include "config.php";
    $update = "update application set admissionstatus='$admitted',department='$department',faculty='$faculty',score='$scoreS',status='$statusS' where appId='$id'";
   // $result =mysqli_query($connection,$update);
}
      $result =mysqli_query($connection,$update);
     // echo $result;
    if (!$result){
        die (("faileds").mysqli_connect_error());
    } 
  else{
     // if(($id == $email) &&$admitted == "ADMITTED"){
          //$_SESSION['UPLOADs']="true";
          //if(($admitted == "ADMITTED")){
        // mail($mailer,$subject, $message,$headers); 
        // $_SESSION['UPLOADs']="true";/upload.php?edit='.$email_val.'">Click here</a>';
     echo "<script> location.href='adminissionstatus.php' </script>";
      
    //}
      
  }
   
   
    }
  ?> 
<!doctype html>
<html>
<head>
<title>Applicant search</title>
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
<body style="color:blue">
    <h5><a href="adminict.php">Previous</a></h5>
	    <div class="row-fluid">
	        <div class="span12">
	            <div class="container-fluid" style="width:100%;padding-left:2%;padding-right:2%">
		<br />
		<h1 style="text-align: center;"><p>Applicant Admission Status</p></h1>
       <!-- <h5 style="text-align: center;">search for applicant</h5--->	
		<br />
		<form method="post" action="">
		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
			<thead>
			    <tr>
<th align="center">Full Name</th>
    <th align="center">Email</th>
    <th align="center">Phone Number</th>
    <th align="center">input P-UTME score</th>
    <th align="center">Admission status</th>
    
      <th align="center">Faculty</th>
       <th align="center">Department</th>
    <th>Action</th>
</tr>
<?php
$error ="";
?>
<?php
// $connection = mysqli_connect("localhost","root","","depotter");
//$id=$_GET['id'];
if (isset($_GET['edit'])){
    $id = $_GET['edit'];
include "config.php";
$select = mysqli_query($connection, "SELECT * FROM application where appId='$id'");

if(!$select){
    $error = "not selected";
}while($row =mysqli_fetch_assoc($select)){
   	 $idd = $row['appId'];
     $fname = $row['surname']; $lname = $row['middlename'];  $mname = $row['lastname']; $stu_email = $row['email'];
      $stu_no = $row['phone']; $address = $row['address'];  $state = $row['state'];  $lga = $row['lga'];
      $gender= $row['gender']; $dbirth = $row['dob'];  $religion = $row['religion']; $marital = $row['maritalStatus'];
      //$stu_img = $row["stu_image"]; 
      $sponsor = $row['fullname']; $relationship = $row['relationship'];
       $spon_add = $row['sponsoraddress'];
      $spon_no = $row['sponsorphone']; $spon_mail = $row['sponsoremail']; $spon_occ = $row['sponsoroccupation'];
      $curricular = $row['curricullar'];
      $disable = $row['disability']; $lang = $row['language']; $kin_name = $row['nokname']; $kin_add = $row['nokaddress']; 
      $kin_no = $row['nkophone'];
      $sch_name = $row['eduname']; $sch_date = $row['edudate']; //$certificate = $row['certificate']; 
      $firstchoice = $row['firstchoice'];
      $secondchoice = $row['secondchoice']; 
      //$imgsrc ='uploads/'.$row['stu_image'];
      $imgsrc =$row['picture'];
				$name=$row['date'];
      $imgsrc ='img/'.$row['passport'];
      $fullname =$fname ." ".$lname." ".$mnane ;
      ?>
    <tr>
<td><?php echo  $fullname;?></td>
  <td><input type="text" value="<?php echo $stu_email;?>" name="mailer" disabled="" required></td>
  <td><?php echo  $stu_no;?></td>
           <td><input type="text"  value="<?php echo $row['score'];?>"  name="scoreS" required></td>
  <td>
      <!---<input type="text"   value="<?php //echo $row['admissionstatus']?>" name="admitted" placeholder="Admision status"-->
       <select class="select2" name="admitted" required="">
                                        <option value="">Please select *</option>
                                          <option>ADMISSION IN PROGRESS</option>
                                        <option>ADMITTED</option>
                                         <option>NOT YET ADMITTED</option>
                                        
                                    </select> 
   </td>
   <td>
      <!---<input type="text"   value="<?php //echo $row['admissionstatus']?>" name="admitted" placeholder="Admision status"-->
       <select class="select2" name="faculty">
                                        <option value="">Faculty *</option>
                                        <?php     
 $query =$connection->query("SELECT * FROM faculties"); 
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
   </td>
   <td>
       <select class="select2" name="department">
                                        <option value="">Programme *</option>
                                         <option value="'Community Health Extension Worker">community of health extension worker</option>
                                        <option value="Junior Community Health Extension Workers">junior community health extension worker</option>
                                        <option value="Health Assistant (Medical)">department of environmental health technology</option>
                                        <option value="Environmental Health Technology">environmental health technology</option>
                                        
                                         <option value="Environmental Health Technician">environmental health technician</option>
                                        <option value="Environmental Health Assistant">environmental health assistance</option>
                                        <option value="department of public health assistance">department of public health assistance</option>
                                        <option value="Health Education and Promotion">health education and promotion</option>
                                        
                                         <option value="Food Hygiene">food hygiene</option>
                                        <option value="Health Information Management Technician">health information management</option>
                                        <option value="Computer Studies">computer science</option>
                                        <option value="Science Laboratory Technology">science laboratory technology</option>
                                        <?php     
 //$query =$connection->query("SELECT * FROM depts"); 
 //$rowCount=$query->num_rows;
  
       //if($rowCount > 0){
  //while($row=$query->fetch_assoc()){ 
  // echo '<option value= "'.$row['name'].'">'.$row['name'].'</option>';
 //}
   //}else{
     //echo '<option value="">dept not found </option>';
   //}
 ?>
          
                                       
                                    </select>
   </td>
  
 <td> <button class="signupbtn" type="submit" name="update">update</button></td>
   <!-- <td><input type="submit" value="UPDATE RECORD"  name="submit"/></td-->					
<!--<td class="badge badge-pill badge-success d-block mg-t-8"><a style="color:white" href="?submit=<?php //echo $row['id'];?>">
    <input type="submit" value="UPDATE RECORD" name="submit"></a></td-->
                              
    									</td></tr>
<?php

}
} 

?>

</thead>
</table>

</form>
</div>
</body>
</html>