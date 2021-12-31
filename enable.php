<?php
session_start();

$_SESSION['timeout'] = time(); 
if (time()-$_SESSION['timeout'] > 1800){
   unset($_SESSION['timeout']);
  // echo "<script> location.href='forget.php' <script>";
}
if(( $_SESSION['LOGGED']) !="true"){
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
  include "config.php";
if(isset($_GET['staffED'])){
    $ids =$_GET['staffED'];
   
$status="Active";

      $select="SELECT * FROM admlogin WHERE id='$ids'";
    $result=mysqli_query($connection, $select);
    if(mysqli_num_rows($result) > 0){
        while($row=mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $email_val = $row['email'];
             $firstnameD = $row['fullname'];
             
        }
    }
   
 
 // update
 include "config.php";
       // $update = "update applicants set (amount,status) VALUES('$amont','$status') where id='$ids'";  
         $update = "update admlogin set user_status='$status' where id='$ids'";
        $result=mysqli_query($connection,$update);
               
               if(!$result){
                   die("failed").mysqli_connect_error();
               }
        
          else{
    if( $id  ==  $ids){
          //$_SESSION['UPLOADs']="true";
       //  mail($email_val,$subject, $message,$headers); 
        // $_SESSION['UPLOADs']="true";/upload.php?edit='.$email_val.'">Click here</a>';
        echo "<script> location.href='all-teacher.php'</script>";
      
    }
          }
}
   ?> 
