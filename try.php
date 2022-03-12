<?php
session_start();
?>
<!doctype html>
<html>
<head>
<title>De Potter College || Re-defining lost hope</title>
		<link href="css41/bootstrap.css" rel="stylesheet" type="text/css" media="screen"> 
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
        <link rel="icon" href="images/logo.png">
      </head><?php include("addnew.php");?>
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
     /// $curricular = $row['curricullar'];
      $disable = $row['disability']; $lang = $row['language']; $kin_name = $row['nokname']; $kin_add = $row['nokaddress']; 
      $kin_no = $row['nokphone'];
      $sch_name = $row['eduname']; $sch_date = $row['edudate']; //$certificate = $row['certificate']; 
      $firstchoice = $row['firstchoice'];
      $secondchoice = $row['secondchoice']; 
      //$imgsrc ='uploads/'.$row['stu_image'];
      $imgsrc =$row['picture'];
				$name=$row['date'];
      $imgsrc ='img/'.$row['picture'];
      $fullname =$fname ." ".$lname." ".$mname ;
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