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
   // $amont=5000;
//$status=1;
$veryif="checked";
  date_default_timezone_set('Africa/Lagos');
     $date=date('m/d/Y h:i:s a',time());
      $select="SELECT * FROM hostel_request WHERE id='$ids'";
    $result=mysqli_query($connection, $select);
    if(mysqli_num_rows($result) > 0){
        while($row=mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $email = $row['email'];
             $name = $row['name'];
              $phone = $row['amount_paid'];
              $remain = $row['amount_remaining'];
           //$studentname=  $firstname. ' ' .   $middlename;
              //$username = $firstname.$id;
        }
    }
    $subject = 'Hostel Payment Verification.';
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
$message .= '<div style="text-align:center"><img src="http://Depotter.agertechsolutions.com.ng/images/depotter_logo.png" class="mobile-logo" alt="Logo"></div>';
$message .= '<p style="color:#777;font-size:16px;text-align:center">WELCOME TO DEPOTTER.</p>';
$message .= '<h3 style="font-size:16px">Dear '.$email.', Your hostel payment of #'.$phone.' has been Verified kindly note that your balance of #'.$remain .' is expected to be paid before end
 of this session failure to pay would lead to your vacation from allocated room</h3>';
$message .= '<h3 style="font-size:18px">click the below link to choose your preferred hostel</h3>';
//$message .= 'https://depotter.agertechsolutions.com.ng/hostelreceipt.pdf';
$message .= '<a href="http://depotter.agertechsolutions.com.ng/hostelrequest2.php">Book hostel</a>';
$message .= '<p style="font-size:16px;">Thanks, Admin.</p>';
$message .= '<p style="font-size:18px;text-align:center;color:#777">© 2021 De Potter. All Rights Reserved.</p>';
$message .= '</body></html>';
 
 // update
 include "config.php";
       // $update = "update applicants set (amount,status) VALUES('$amont','$status') where id='$ids'"; 
       if ($phone < 40000){
         $update = "update hostel_request set status='Not checked' where id='$ids'";
       }elseif($phone == 40000){
       $update = "update hostel_request set status='$veryif' where id='$ids'";
       } $result=mysqli_query($connection,$update);
               if(!$result){
                   die("failed").mysqli_connect_error();
               }
       
        
          else{
    if( $id  ==  $ids){
          //$_SESSION['UPLOADs']="true";
         mail($email,$subject, $message,$headers); 
        // $_SESSION['UPLOADs']="true";/upload.php?edit='.$email_val.'">Click here</a>';
        echo "<script> location.href='due.php'</script>";
      
    }
          }
}
   ?> 
                              