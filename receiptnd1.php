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

           $connection=mysqli_connect("localhost","root","","depotte1_depotter");
 
 if(isset($_POST['submit']))
 { 
     $name=mysqli_real_escape_string($connection,$_POST['studentname']);
    // $idss=mysqli_real_escape_string($connection,$_POST['id']);
 
 $fee= mysqli_real_escape_string($connection,$_POST['fee']);
  $paymode=$_POST['paymode'];
  $level=100;
    date_default_timezone_set('Africa/Lagos');
     $dae=date('m/d/Y h:i:s a',time());
        $newDate = new DateTime($dae);
        $date=$newDate->format('M d,Y h:i:s a');
        
  $COde=rand(0000000,9999999);
  $receipt=strlen($fee);
   $receiptinvoice =$COde + $receipt;
 $sql="SELECT * FROM application WHERE name ='$name'";
 $result= mysqli_query($connection,$sql);
 $row= mysqli_fetch_array($result);
   //$id= $row['appId'];
 $count=mysqli_num_rows($result);
 if($count<1){
  
 $_SESSION['record']= "Name Is Not Recorded";
  echo "<script> location.href='nd1payment.php' </script>";
   // echo"<h3 style='color: white; font-weight: bolder; text-align: center;'>Name Is Not Recorded </h3>";
 }else{
 
 //$sqlee="update applicants set fees='$fee',paymode='$paymode',level='$level' where studentname='$studentname'";
  //$sqlee="INSERT INTO applicants(fees,level,paymode) VALUES('$fee','$level','$paymode') where studentname='$studentname'";
  //include "config.php";
  $sqlee="INSERT INTO posjss3nd(fee,name,paymode,status) VALUES('$fee','$name','$paymode','')";
 $corr = mysqli_query($connection,$sqlee);
 if(!$corr){
     echo "error".$corr.mysqli_error($connection);
 }
 if($corr){
     echo "<script> window.alert('tution paid');
     location.href='pos2dplicate.php'</script>";
 }
    
    $sql="SELECT * FROM application WHERE name ='$name'";
 $result= mysqli_query($connection,$sql);
 if(!$result){
    die("not availabe").mysqli_connect_error ();
    }while($row = mysqli_fetch_array($result)) {
         $u=$row['fee'];
         $department=$row['department'];
        // $paymode2=$row['paymode'];
        // echo $u;
         //echo $fee;
         //$add=$u=+$fee;
         $minus=$u+$fee;
         $balance=$paymode-$minus;
    $update = "update application set fee='$minus',level='$level',year1date='$date',paymode='$paymode',balance='$balance'  where name='$name'";
    if ($connection->query($update) === TRUE) {echo "";
  }
         
        }
   
  } 

  } 
  
       
       


?>
