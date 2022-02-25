<?php  $erromessage="";
if (isset($_POST['login'])){
include "config.php";
$matric = mysqli_real_escape_string($connection,$_POST['matricNo']);
 $pass= md5(mysqli_real_escape_string($connection,$_POST['password']));
$select_querry="SELECT * FROM application WHERE matricNo='$matric' AND pasword='$pass' "; 
$result=mysqli_query($connection,$select_querry); 
if(!$result){  die("failed").mysqli_connect_error();
}
while($row= mysqli_fetch_array($result))
{  
 $matricNo=mysqli_real_escape_string($connection,$row['matricNo']);
	$pwod=md5(mysqli_real_escape_string($connection,$row['pasword']));

$status=$row['status'];
	$ids=$row['appId'];
}if
(($matric == $matricNo) && ($pwod ==  md5($pass)) && ($status == 1)){
 echo "<script> location.href= 'student.php'</script>";
 $_SESSION['LOGGEDstudent']="true";
  $_SESSION['matricNo']=$matric;
} 
else{$erromessage="UNAUTHORISED"; }}?>