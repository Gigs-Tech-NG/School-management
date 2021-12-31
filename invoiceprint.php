<?php
session_start();

?>

<script>
window.print();
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
		 <?php //require("includes/busry.php");?>
		
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
                     include"config.php";
                            $status = mysqli_real_escape_string($connection,$_POST['parent_cat']);
                            $name = mysqli_real_escape_string($connection,$_POST['sub_cat']);
                            $depts = mysqli_real_escape_string($connection,$_POST['room_cat']);
                            $schfee = mysqli_real_escape_string($connection, $_POST['bunk_cat']);
                            $payin = mysqli_real_escape_string($connection,$_POST['paid']);
                            //$remain = mysqli_real_escape_string($connection,$_POST['remain']);
                        //$insert=mysqli_query($connection,"insert into room_booking(email,room,bunk,paid,remain,gender,level) 
                        //values('$name','$room','$bunk','$paid','$remain','male','$level')");
                      
                    
                    $select=mysqli_query($connection,"select *  from application where name='$name'");
                    // $invoice= generatekey();
             //date_default_timezone_set('Africa/Lagos');
                    $row=mysqli_fetch_array($select);
                      
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
    echo date('Y',time())+1;?> Session Invoice Receipt</h1>
			<address>
			<strong><h1 style="background-color:#000099; margin-left:3rem;">DEPOTTER COLLEGE OF HEALTH TECHNOLOGY <br>KM 2, Oru/Ijebu-Igbo Road, Oru Ijebu, Ogun State.<br>info@depotterhealthtech.sch.ng</h1></strong>
				
			</address>
			<span><a href=""><img src="images/depotter_logo.png" alt="logo"></a></span>
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
					<td><span></span><span><?php echo $name; ?></span></td>
				</tr>
			    
			    <tr>
					<th><span>Department</span></span></th>
					<td><span></span><span><?php echo $depts; ?></span></td>
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
					<td><span></span><span><?php echo $row['level'];?></span></td>
				</tr>
				
				<tr>
					<th><span>Due Fee</span></th>
					<td><span>#</span><span><?php echo $schfee; ?></span></td>
				</tr>
				<tr>
					<th><span>Amount Paid</span></th>
					<td><span>#</span><span><?php echo $payin; ?></span></td>
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