<?php
session_start();

$_SESSION['timeout'] = time(); 
if (time()-$_SESSION['timeout'] > 1800){
   unset($_SESSION['timeout']);
  // echo "<script> location.href='forget.php' <script>";
}
if( $_SESSION['leveled'] !="true"){
    echo"<script> location.href='loggin.php'  </script>";
}

?>
<script>
//window.print();
</script>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
	 <title>De Potter College || Re-defining lost hope</title>
	  <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
        <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">
		<link rel="stylesheet" href="stylepos.css">
		 <?php require("includes/session.php");
		 include"config.php";
$select = mysqli_query($connection,"select * from room booking where email='$email_val'");
if(!$select){
    echo "error:".$select.mysqli_error($connection);
}elseif(mysqli_num_rows($select)> 0)while($row=mysqli_fetch_array($select)){
    $email= $row['email'];
    $room = $row['room'];
    $bunk= $row['bunk'];
    $amount_paid = $row['paid'];
    $remain= $row['paid'];
    $room_gender= $row['gender'];
    $level= $row['level'];
}
		 
		 
		 
		 ?>
		
	</head>
<style>
.boy {
    width: 600px;
    padding: 15px;
    border: 5px solid brown;
    margin: 5px;
}



</style>
	<body>
	<?php
	if(empty($amount_paid)){
	   echo '<script> alert("payment not accessed")
    window.location = "hostelreceipt.php";
     </script>';
	}
	?>
<div class="container">
<div class="row">
<div class="col-lg-12">
<form style="border: solid black 1px;background-color: beige;">
<!---<label style="padding-right: 2px; padding-left: 7%;">Receipt No:<?php //echo $receiptinvoice;?></label>


    <label for="gender">Payment Mode</label>
    <select id="" name="gender">
      <option value="CASH"> CASH</option>
    
      <option value="TRANSFER">POS</option>
       
    </select----->
    <?php
    date_default_timezone_set('Africa/Lagos');
    echo "Date :" .date('M d/Y',time());?> 
    <label style="padding-right: 1px; padding-left: 5%;"> <?php
    date_default_timezone_set('Africa/Lagos');
    echo "Time :" .date('h:i:s a',time());?><label style="color: red;"></label></label>

<form>
    <h3 class="boy"> 
  <label>Student Name : <?php echo $fullname; ?></label>
            </h3> 
 
</form>


</div>
</div>
</div>

<form>
<label></label>

</form>
		<header>
			<h1>RECEIPT</h1>
			<address>
				<h3>DEPOTTER COLLEGE OF HEALTH</h3>
				<h4>KM 2, Oru/Ijebu-Igbo Road, Oru Ijebu, Ogun State.</h4>
				<h5>info@depotterhealthtech.sch.ng</h5>
			</address>
			<span><a href="index.php"><img src="images/depotter_logo.png" alt="logo"></a></span>
		</header>
		<article>

		<h1>Recipient</h1>
			<address>
			<img src="img/<?php echo $passport;?>" alt="Admin" width="25%" height="15%">
				<p></p>
		
			<table>
				<tr>
					<th><span>Total</span></th>
					<td><span>#</span><span>40,000</span></td>
				</tr>
				<tr>
					<th><span>Amount Paid</span></th>
					<td><span>#</span><span><?php echo $amount_paid; ?></span></td>
				</tr>
				<tr>
					<th><span>Balance Due</span></th>
					<td><span>#</span><span><?php echo $remain; ?></span></td>
				</tr>
			</table>
		
			</address>
			
			<table class="meta">
				<tr>
					<th><span>Level</span></th>
					<td><span><?php echo $level ;?></span></td>
				</tr>
				<tr>
					<th><span>Date</span></th>
					<td><span><?php echo date('M d,Y'); ?> </span></td>
				</tr>
<tr>
					<th><span>Student Name</span></th>
					<td><span><?php echo $fullname; ?></span></td>
				</tr>
				
			</table>
	

		
		</article>
		<aside>
			<h1><span>HOSTEL FEE PAYMENT <?php echo $level;?> Level</span></h1>
			<div>
				<p><?php echo $fullname; ?>, <?php echo $level;?> Level student <?php echo $depart;?> paid Hostel Fee #<?php echo $amount_paid; ?>.</p><br><br><br>
					
						<h4>SIGNATURE:___________Date:______________<br/><br>HEAD OF DEPARTMENT</h4> 
					
			</div>
		</aside>
		</div>
	
	</body>
</html>