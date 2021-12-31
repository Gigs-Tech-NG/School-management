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
		 <?php require("includes/session.php");?>
		
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
	if(empty($fee)){
	    echo '<script> alert("Not Allow")
     window.location = "schoolfeeprint.php";
     </script>';
	}elseif(($verify)!='confirmed'){
	    echo '<script> alert("payment not yet confirmed, contact admin office to confirm
	    ")
     window.location = "schoolfeeprint.php";
     </script>';
	}
	   //invoice
         function checkkeys($connection,$randstr){
          $sql = "SELECT * FROM application";
       $result = mysqli_query ($connection, $sql);
       
       while ($row = mysqli_fetch_assoc($result)) {
         if ($row ['keystring'] == $randstr){
            $keyexist = true;
            break;
         }    else {
            $keyexist = false;
         }
       
       
        return $keyexist;
    }
    }
        
        function generatekey(){
    
                $keylenght = 8;
                 $str = "1234567890";
    
                $randstr = uniqid(true);
                 //$conn = mysqli_connect("localhost","root","","generateid");
		 include "config.php";
                 $checkkey = checkkeys($connection,$randstr);
                 
                 while ($checkkey == true){
                    $randstr = uniqid(true);
                     $checkkey = checkkeys ($connection, $randStr);
                    
                 }
   
                    return $randstr;
    
 }
    
     $invoice= generatekey();
             date_default_timezone_set('Africa/Lagos');
     $date=date('m/d/Y h:i:s a',time());
                    
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
 
 
</form>


</div>
</div>
</div>

<form>
<label></label>

</form>
		<header>
		 
			<h1>    <?php
    date_default_timezone_set('Africa/Lagos');
    echo date('Y',time());?>/<?php
    date_default_timezone_set('Africa/Lagos');
    echo date('Y',time())+1;?> Session SCHOOL FEE  RECEIPT</h1>
			<address>
			<strong><h1 style="background-color:#000099; margin-left:3rem;">DEPOTTER COLLEGE OF HEALTH TECHNOLOGY <br>KM 2, Oru/Ijebu-Igbo Road, Oru Ijebu, Ogun State.<br>info@depotterhealthtech.sch.ng</h1></strong>
				
			</address>
			<span><a href="index.php"><img src="images/depotter_logo.png" alt="logo"></a></span>
		</header>
		<article>

		<h1> Recipient</h1>
			<address>
		<img src="images/BARCODE2.jfif" style=" position:absolute;top:230px; " alt="Admin" width="12%" height="11%" >
				<p></p>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
			<table>
			    	<tr>
					<th><span>Full Name</span></th>
					<td><span></span><span><?php echo $fullname; ?></span></td>
				</tr>
			    
			    <tr>
					<th><span>Department</span></span></th>
					<td><span></span><span><?php echo $depart; ?></span></td>
				</tr>
				
					<tr>
					<th><span>Session</span></th>
					<td><span></span><span><?php
    date_default_timezone_set('Africa/Lagos');
    echo date('Y',time());?>/<?php
    date_default_timezone_set('Africa/Lagos');
    echo date('Y',time())+1;?></span></td>
				</tr>
				
					<tr>
					<th><span>Discription</span></th>
					<td><span></span><span>School Fee</span></td>
				</tr>
				<tr>
					<th><span>Level</span></th>
					<td><span></span><span>100</span></td>
				</tr>
				
				<tr>
					<th><span>Total</span></th>
					<td><span>#</span><span><?php echo $paymode; ?></span></td>
				</tr>
				<tr>
					<th><span>Amount Paid</span></th>
					<td><span>#</span><span><?php echo $fee; ?></span></td>
				</tr>
				
			
				<tr>
					<th><span>Balance Due</span></th>
					<td><span>#</span><span><?php echo $balance; ?></span></td>
				</tr>
				
				
			
			
				<tr>
					<th><span>Invoice</span></th>
					<td><span></span><span><?php echo $invoice; ?></span></td>
				</tr>
			</table>
		
			</address>
			
			<table class="meta">

				
			</table>
	

		
		</article>

		</div>
	
	</body>
</html>