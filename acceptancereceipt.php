<?php
session_start();

$_SESSION['timeout'] = time(); 
if (time()-$_SESSION['timeout'] > 1800){
   unset($_SESSION['timeout']);
  // echo "<script> location.href='forget.php' <script>";
}
if( $_SESSION['LOGGEDsub'] !="true"){
    echo"<script> location.href='stafflogin.php'  </script>";
}

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
<?php

             $db=$connection=mysqli_connect("localhost:3306","alqudust_nujabah","Nujabah22/11,","alqudust_nuja");
 
 
 if(isset($_POST['submit']))
 { 
     $name=mysqli_real_escape_string($db,$_POST['studentname']);
 
 $fee=10000;
  $paymode=10000;
 // $level="3";
 $COde=rand(0000000,9999999);
  $receipt=strlen($fee);
   $receiptinvoice =$COde + $receipt;
 $sql="SELECT * FROM application WHERE name='$name'";
 $result= mysqli_query($db,$sql);
 $row= mysqli_fetch_array($result);
   $id= $row['appId'];
 $count=mysqli_num_rows($result);
 if($count<1){
  
 $_SESSION['record']= "Name Is Not Recorded";
  echo "<script> location.href='acceptfee.php' </script>";
   // echo"<h3 style='color: white; font-weight: bolder; text-align: center;'>Name Is Not Recorded </h3>";
 }else{
 
 //$sqlee="update applicants set fees='$fee',paymode='$paymode',level='$level' where studentname='$studentname'";
  //$sqlee="INSERT INTO applicants(fees,level,paymode) VALUES('$fee','$level','$paymode') where studentname='$studentname'";
  include "config.php";
  $sqlee="INSERT INTO posjss3nd(fee,name,paymode) VALUES('$fee','$name','$paymode')";
 $corr = mysqli_query($db,$sqlee);
    
    $sql="SELECT * FROM application WHERE name='$name'";
 $result= mysqli_query($db,$sql);
 if(!$result){
    die("not availabe").mysqli_connect_error ();
    }while($row = mysqli_fetch_array($result)) {
         $u=$row['acceptancefee'];
         $depart=$row['department'];
        // $paymode2=$row['paymode'];
        // echo $u;
         //echo $fee;
         //$add=$u=+$fee;
         $minus=$u+$fee;
         $balance=$paymode-$minus;
    $update = "update application set acceptancefee='$minus',transid='$receiptinvoice'  where name='$name'";
    if ($db->query($update) === TRUE) {echo "";
  }
         
        }
   
  } 

  } 
  
       
       


?>
<script>
window.print();
</script>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Invoice</title>
		<link rel="stylesheet" href="stylepos.css">
		
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
	
	
<div class="container">
<div class="row">
<div class="col-lg-12">
<form style="border: solid black 1px;background-color: beige;">
<label style="padding-right: 2px; padding-left: 7%;">Receipt No: <?php echo $receiptinvoice;?></label>


    <label for="gender">Payment Mode</label>
    <select id="" name="gender">
      <option value="CASH"> CASH</option>
    
      <option value="TRANSFER">TRANSFER</option>
       
    </select>
    <?php
    date_default_timezone_set('Africa/Lagos');
    echo "Date :" .date('M d/Y',time());?> 
    <label style="padding-right: 1px; padding-left: 5%;"> <?php
    date_default_timezone_set('Africa/Lagos');
    echo "Time :" .date('h:i:s a',time());?><label style="color: red;"></label></label>

<form>
    <h3 class="boy"> 
  <label>Student Name : <?php echo $name; ?></label>
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

			<table>
				<tr>
					<th><span>Total</span></th>
					<td><span>#</span><span><?php echo $paymode; ?></span></td>
				</tr>
				<tr>
					<th><span>Amount Paid</span></th>
					<td><span>#</span><span contenteditable><?php echo $fee; ?></span></td>
				</tr>
				<tr>
					<th><span>Balance Due</span></th>
					<td><span>#</span><span><?php echo $balance; ?></span></td>
				</tr>
			</table>
		
			</address>
			
			<table class="meta">
				<tr>
					<th><span>Receipt No</span></th>
					<td><span><?php echo $receiptinvoice;?></span></td>
				</tr>
				<tr>
					<th><span>Date</span></th>
					<td><span><?php echo date('M d,Y'); ?> </span></td>
				</tr>
<tr>
					<th><span>Student Name</span></th>
					<td><span><?php echo $name; ?></span></td>
				</tr>
				
			</table>
	

		
		</article>
		<aside>
			<h1><span>Acceptance Fee </span></h1>
			<div>
				<p><?php echo $name; ?>, Student <?php echo $depart;?> paid acceptance fEE #<?php echo $fee; ?>.</p><br><br><br>
					<p>SIGNATURE.</p><br><br>
						<p>Bursar.</p>
					
			</div>
		</aside>
		</div>
	
	</body>
</html>