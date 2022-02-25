
<?php
$erromessage="";
 if (isset($_POST['login']))  {
 include "config.php";
$Username = mysqli_real_escape_string($connection,$_POST['Username']);
   $pass= md5(mysqli_real_escape_string($connection,$_POST['password']));
  //$select_querry="SELECT payed.id,payed.email,payed.image,payment.id,payment.password,payment.email,payment.date FROM payed INNER JOIN payment
   //ON payed.email= payment.email WHERE email='$mail' AND password='$pass' ";
  // $select_querry="SELECT * FROM `payed` INNER JOIN payment ON payed.email= payment.email WHERE email='$mail' AND password='$pass' ";
   $select_querry="SELECT * FROM admlogin
     WHERE username='$Username' AND password='$pass' ";
   $result=mysqli_query($connection,$select_querry);
   
   if(!$result){
	   die("failed").mysqli_connect_error();
   }
   while($row= mysqli_fetch_array($result)){
	   $Uname=mysqli_real_escape_string($connection,$row['username']);
		$pwod=md5(mysqli_real_escape_string($connection,$row['password']));
		$rank=mysqli_real_escape_string($connection,$row['rank']);
			$users_status=mysqli_real_escape_string($connection,$row['user_status']);
				$acty=mysqli_real_escape_string($connection,$row['active']);
	//	$status=$row['status'];
		$ids=$row['id'];
   }if(($Uname == $Username) && ($pwod ==  md5($pass)) && ($users_status == "Active") && ($rank == "admin") && $acty == 1){
	 $_SESSION['LOGGED']="true";
	  $_SESSION['username']=$Username; // Initializing Session
	    $_SESSION['password']=$pass;
	    echo "<script> location.href='administration.php' </script>";
	       exit();
 // echo "<script> location.href='administration.php?zdeidhdjkksdkdsakdkkikshsdlsnsslksksssssjsksldfmnokvsvkskh1237jhdc678sswwqakckxcnhbkvllszmc0980w87889=$ids'</script>";
  // header("location:studentportal.php");rank = 'admin' OR rank = 'ict')
   }
  elseif(($Uname == $Username) && ($pwod ==  md5($pass)) && ($users_status == "Active") && ( $rank == "ict") && $acty == 1){
	 $_SESSION['LOGGEDict']="true";
	  $_SESSION['username']=$Username; // Initializing Session
	    $_SESSION['password']=$pass;
	    echo "<script> location.href='adminict.php' </script>";
	       exit();
 // echo "<script> location.href='administration.php?zdeidhdjkksdkdsakdkkikshsdlsnsslksksssssjsksldfmnokvsvkskh1237jhdc678sswwqakckxcnhbkvllszmc0980w87889=$ids'</script>";
  // header("location:studentportal.php");rank = 'admin' OR rank = 'ict')
   }
   elseif(($Uname == $Username) && ($pwod ==  md5($pass)) && ($users_status == "Active") && ($rank == "burser") && ($acty == 1)){
        $_SESSION['LOGGEDsub']="true";
    
	  $_SESSION['username']=$Username; // Initializing Session
	    $_SESSION['password']=$pass;
 echo "<script> location.href='busary.php'</script>";
   }
    elseif(($Uname == $Username) && ($pwod ==  md5($pass)) && ($users_status == "Active") && ($rank == "lecturer") && ($acty == 1)){
        $_SESSION['LOGGEDsaff']="true";
    
	  $_SESSION['username']=$Username; // Initializing Session
	    $_SESSION['password']=$pass;
 echo "<script> location.href='Staff.php'</script>";
   }
    elseif(($Uname == $Username) && ($pwod ==  md5($pass)) && ($users_status == "Active") && ($rank == "libarian") && ($acty == 1)){
        $_SESSION['LOGGEDlib']="true";
    
	  $_SESSION['username']=$Username; // Initializing Session
	    $_SESSION['password']=$pass;
 echo "<script> location.href='libarian.php'</script>";
   }
   else{
	 $erromessage="UNAUTHORISED";
	// $_SESSION['LOGGED']="true";
  // echo "<script> location.href='advertised.php'</script>";
   }
   
   
}

 
?>
<?php
 if(isset( $_SESSION['LOGGED'])){
  echo "<script> location.href='administration.php' </script>";
  exit();
 } 
?>
<?php
 if(isset( $_SESSION['LOGGEDict'])){
  echo "<script> location.href='adminict.php' </script>";
  exit();
 } 
?>
 <?php
 if(isset( $_SESSION['LOGGEDsub'])){
   echo "<script> location.href='busary.php' </script>";
  exit();
 } 
?>
 <?php
 if(isset($_SESSION['LOGGEDsaff'])){
   echo "<script> location.href='Staff.php' </script>";
  exit();
 } 
?>
<?php
 if(isset($_SESSION['LOGGEDlib'])){
   echo "<script> location.href='libarian.php' </script>";
  exit();
 } 
?>