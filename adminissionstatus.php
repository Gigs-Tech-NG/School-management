<?php
session_start();
?>
<?php
$_SESSION['timeout'] = time(); 
if (time()-$_SESSION['timeout'] > 1800){
   unset($_SESSION['timeout']);
  // echo "<script> location.href='forget.php' <script>";
}
if(( $_SESSION['LOGGEDict']) !="true"){
    echo"<script> location.href='stafflogin.php'  </script>";
}

?>
<html>
<head>
<title>De Potter College || Re-defining lost hope</title>
		<link href="css41/bootstrap.css" rel="stylesheet" type="text/css" media="screen"> 
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
        <link rel="icon" href="images/logo.png">
     </head><?php //include("addnew.php");?>
 <link rel="stylesheet" type="text/css" href="css41/DT_bootstrap.css">
	<script src="jsss/jquery.js" type="text/javascript"></script>
	<script src="jsss/bootstrap.js" type="text/javascript"></script>
	
	<script type="text/javascript" charset="utf-8" language="javascript" src="jsss/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf-8" language="javascript" src="jsss/DT_bootstrap.js"></script>

<style>
</style>
<body style="color:black";>
    <h5><a href="adminict.php">Previous</a></h5>
	    <div class="row-fluid">
	        <div class="span12">
	            <div class="container-fluid" style="width:100%;padding-left:2%;padding-right:2%">
		<br />
		<h1 style="text-align: center;"><p>Applicant Admission Status</p></h1>
       <h5 style="text-align: center;">search for applicant</h5>	
		
		
		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example" margin="-20%">
			<thead>
				<tr>
					<th align="center">S/N</th>
					<th align="center">photo</th>
                    <th align="center">Full name</th>
                    
                    <th align="center">Email</th>
                    <th align="center">Phone_no</th>
					<th align="center">Address</th>
                    <th align="center">state</th>
                    <th align="center">LGA</th>
					<th align="center">gender</th>
                    <th align="center">Date_of_birth</th>
                    <th align="center">religion</th>
					<th align="center">Marital_status</th>
                    <th align="center">sponsor_Names</th>
                    <th align="center">relationship</th>
					<th align="center">sponsor_address</th>
                    <th align="center">sponsor_no</th>
                    <th align="center">sponsor_email</th>
                    <th align="center">sponsor_Occupation</th>
                    <th align="center">curricular_activities</th>
					<th align="center">disability</th>
                    <th align="center">language</th>
                     <th align="center">kin_name</th>
                    <th align="center">kin_address</th>
                    <th align="center">kin_no</th>
					<th align="center">sch(s)_Names</th>
                    <th align="center">Years_attend</th>
                    <th align="center">first_choice</th>
                    <th align="center">second_choice</th>
                    <th align="center">Date_of_Application</th>
					<th align="center">Post_UTME_score</th>
                    <th align="center">Admission_status</th>
                    	<th align="center">Faculty</th>
                    <th align="center">Department</th>
                    <th>Action</th>
                   
				</tr>
                
			</thead>
			<?php
			include "config.php";
			$sn=0;
			$sn=$sn+1;
		$select = mysqli_query($connection, "SELECT * FROM application ORDER BY appId DESC");

if(!$select){
    $error = "not selected";
}while($row =mysqli_fetch_assoc($select)){
   	 $idd = $row['appId'];
     $fname = $row['surname']; $lname = $row['middlename'];  $mnane = $row['lastname']; $stu_email = $row['email'];
      $stu_no = $row['phone']; $address = $row['address'];  $state = $row['state'];  $lga = $row['lga'];
      $gender= $row['gender']; $dbirth = $row['dob'];  $religion = $row['religion']; $marital = $row['maritalStatus'];
      //$stu_img = $row["stu_image"]; 
      $sponsor = $row['fullname']; $relationship = $row['relationship'];
       $spon_add = $row['sponsoraddress'];
      $spon_no = $row['sponsorphone']; $spon_mail = $row['sponsoremail']; $spon_occ = $row['sponsoroccupation'];
      $curricular = $row['hobbies'];
      $disable = $row['disability']; $lang = $row['language']; $kin_name = $row['nokname']; $kin_add = $row['nokaddress']; 
      $kin_no = $row['nokphone'];
      $sch_name = $row['eduname']; $sch_date = $row['edudate']; //$certificate = $row['certificate']; 
      $firstchoice = $row['firstchoice'];
      $secondchoice = $row['secondchoice']; 
      //$imgsrc ='uploads/'.$row['stu_image'];
     // $imgsrc =$row['passport'];
				$name=$row['date'];
      $imgsrc ='img/'.$row['picture'];
      $fullname =$fname ." ".$lname." ".$mnane ;
			?>
			<tr>
			
				<td>
					<?php echo $sn++ ;?>
				</td>
                <td>
                
                                        <img src=<?php echo $imgsrc;?> width = "60" height = "60" style="border-radius:0%;"/>
                </td>
				<td>
					<?php echo $fullname;?>
				</td>
               
                <td>
                	<?php echo $stu_email ;?>
                </td>
                <td>
                <?php echo $stu_no ;?>
                </td>
                 <td>
                <?php echo $address ;?>
                </td>
                 <td>
                <?php echo $state ;?>
                </td>
                 <td>
                <?php echo $lga ;?>
                </td>
                 <td>
                <?php echo $gender ;?>
                </td>
                 <td>
                <?php echo $dbirth ;?>
                </td>
                 <td>
                <?php echo $religion ;?>
                </td>
                 <td>
                <?php echo $marital ;?>
                </td>
                 <td>
                <?php echo $sponsor ;?>
                </td>
                 <td>
                <?php echo $relationship ;?>
                </td>
                 <td>
                <?php echo $spon_add ;?>
                </td>
                 <td>
                <?php echo $spon_no ;?>
                </td>
                <td>
                <?php echo $spon_mail ;?>
                </td>
                 <td>
                <?php echo $spon_occ ;?>
                </td>
                 <td>
                <?php echo $curricular ;?>
                </td>
                 <td>
                <?php echo $disable ;?>
                </td>
                 <td>
                <?php echo $lang ;?>
                </td>
                <td>
                <?php echo $kin_name ;?>
                </td>
                 <td>
                <?php echo $kin_add ;?>
                </td>
                 <td>
                <?php echo $kin_no ;?>
                </td>
                 <td>
                <?php echo $sch_name ;?>
                </td>
                 <td>
                <?php echo $sch_date ;?>
                </td>
                <td>
                <?php echo $firstchoice ;?>
                </td>
                 <td>
                <?php echo $secondchoice ;?>
                </td>
                 <td>
             &nbsp;<?php echo $row['date'];?>
                </td>
                 <td>
                <?php echo  $row['score'];?> 
                </td>
                 <td>
                <?php echo $row['admissionstatus'] ;?>
                </td>
                  <td><?php echo $row['faculty'] ;?></td>
  <td><?php echo $row['department'] ;?></td>
  <td>
    <a href="try.php?edit=<?php echo $row['appId'] ;?>">Update Record</a>
   
                                <!--a href="meee.php?edit=<?php// echo $row['appId'] ;?>" >Admission Records ii
                                        </a-->
                                
   </td>
			</tr>
			</tr>
            
			<?php }?>
		</table>
        
	</div>
	</div>
	</div>
</body>
<br />
<br />
</html>