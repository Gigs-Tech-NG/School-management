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
             $firstnameIG = $row['fullname'];
               $rank = $row['rank'];
                
      //  }
    }
}
    ?>
  <?php 
  include "config.php";
if(isset($_GET['dknkmdksssskdkldksllckdllsdklsokmxxlslslslsmxdlxassxomxmxhgshhnxmxkjskxikmmmnxkjxjksssssssdk'])){
    $ids =$_GET['dknkmdksssskdkldksllckdllsdklsokmxxlslslslsmxdlxassxomxmxhgshhnxmxkjskxikmmmnxkjxjksssssssdk'];
    $amont=5000;
//$status=1;
$veryif="Verified";
  date_default_timezone_set('Africa/Lagos');
     $date=date('m/d/Y h:i:s a',time());
      $select="SELECT * FROM application WHERE appId='$ids'";
    $result=mysqli_query($connection, $select);
    if(mysqli_num_rows($result) > 0){
        while($row=mysqli_fetch_assoc($result)){
          $id = $row['appId'];
            $email_val = $row['email'];
             $firstname = $row['surname'];
              $middlename = $row['middlename'];
           $studentname=  $firstname. ' ' .   $middlename;
              $username = $firstname.$id;
        }
    }
    $subject = 'Application Form.';
$from = 'admin@depotterhealthtech.sch.ng';
//$fromName="qoztore";
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .='From: Depotter '.'<'.$from.'>' ."\r\n".
//$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<div style="text-align:center"><img src="http://depotter.agertechsolutions.com.ng/images/log.png" class="mobile-logo" alt="Logo"></div>';
$message .= '<p style="color:#777;font-size:16px;text-align:center">WELCOME TO DEPOTTER.</p>';
$message .= '<h3 style="font-size:18px">Dear '.$firstname.',Your account has been Verified.</h3>';
//$message .= '<h3 style="font-size:18px">Username: '.$username.'</h3>';
//$message .= '<h3 style="font-size:18px">Password: '.$password.'</h3>';
$message .= '<a href="http://depotter.agertechsolutions.com.ng/admission.php?zdeidhdjkksdkdsakdkkcdTkxjKDLJkjhjdjdgfdskdkdnsmxvxhncikshsdlsnsslksksssssjsooooooooksldfmnokvksnknsklncxxnknjmnchkncksncknsmknxksnkssdkpkknksvkskh1237jhdc678sswwqakckxcnhbkvllszmc0980w87889='.$email_val.'">Register Now</a>';
$message .= '<p style="font-size:16px;">Thanks,Admin.</p>';
$message .= '<p style="font-size:18px;text-align:center;color:#777">© 2021 Depotter. All Rights Reserved.</p>';
$message .= '</body></html>';
 
 // update
 include "config.php";
       // $update = "update applicants set (amount,status) VALUES('$amont','$status') where id='$ids'";  
         $update = "update application set amount='$amont',verify='$veryif',lecturer='$firstnameIG',processedate='$date',name='$studentname' where appId='$ids'";
        $result=mysqli_query($connection,$update);
               
               if(!$result){
                   die("failed").mysqli_connect_error();
               }
        
          else{
    if( $id  ==  $ids){
          //$_SESSION['UPLOADs']="true";
         mail($email_val,$subject, $message,$headers); 
        // $_SESSION['UPLOADs']="true";/upload.php?edit='.$email_val.'">Click here</a>';
        echo "<script> location.href='busary.php'</script>";
      
    }
          }
}
   ?> 
                              