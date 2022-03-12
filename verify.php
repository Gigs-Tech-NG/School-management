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
             $lastname= $row['lastname'];
              $middlename = $row['middlename'];
           $studentname=  $firstname. ' ' .   $middlename.' '.$lastname;
              $username = $firstname.$id;
        }
    }
               
require_once "Mail.php"; // PEAR Mail package
require_once ('Mail/mime.php'); // PEAR Mail_Mime packge


 $from = "admin@depotterhealthtech.sch.ng"; //enter your email address
 $to = $email_val; //enter the email address of the contact your sending to
 $subject = "Application Form."; // subject of your email

$headers = array ('From' => $from,'To' => $to, 'Subject' => $subject);

$text = ''; // text versions of email.
$html = "<html><body>
<div style='text-align:center'><img src='https://depotterhealthtech.sch.ng/images/logo.png' class='mobile-logo' alt='Logo'></div>
<p style='color:#777;font-size:16px;text-align:center'>WELCOME TO DE POTTER.</p>
<h3 style='font-size:18px'>Dear $firstname,Your account has been Verified.</h3>
<a href='https://depotterhealthtech.sch.ng/depotter/admission.php?zdeidhdjkksdkdsakdkkcdTkxjKDLJkjhjdjdgfdskdkdnsmxvxhncikshsdlsnsslksksssssjsooooooooksldfmnokvksnknsklncxxnknjmnchkncksncknsmknxksnkssdkpkknksvkskh1237jhdc678sswwqakckxcnhbkvllszmc0980w87889=$email_val'>Register Now</a>
<p style='font-size:16px;'>Thanks,Admin.</p>
<p style='font-size:18px;text-align:center;color:#777'>© 2021 Depotter. All Rights Reserved.</p></body></html>"; // html versions of email.

$crlf = "\n";

$mime = new Mail_mime($crlf);
$mime->setTXTBody($text);
$mime->setHTMLBody($html);

//do not ever try to call these lines in reverse order
$body = $mime->get();
$headers = $mime->headers($headers);

 $host = "localhost"; // all scripts must use localhost
 $username = "admin@depotterhealthtech.sch.ng/"; //  your email address (same as webmail username)
 $password = "depotter/tech/001"; // your password (same as webmail password)

$smtp = Mail::factory('smtp', array ('host' => $host, 'auth' => true,
'username' => $username,'password' => $password));

//$mail = $smtp->send($to, $headers, $body);
 
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
          $smtp->send($to, $headers, $body);
        // $_SESSION['UPLOADs']="true";/upload.php?edit='.$email_val.'">Click here</a>';
        echo "<script> location.href='admin.php'</script>";
      
    }
          }
}
   ?> 
                              