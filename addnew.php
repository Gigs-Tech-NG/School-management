<?php
$_SESSION['timeout'] = time(); 
if (time()-$_SESSION['timeout'] > 1800){
   unset($_SESSION['timeout']);
  // echo "<script> location.href='forget.php' <script>";
}
if(( $_SESSION['LOGGEDict']) !="true"){
    echo"<script> location.href='stafflogin.php'  </script>";
}

?><?php
if($_GET['edit'] == ""){
    echo"<script> location.href='stafflogin.php'  </script>";
};
?>
     <?php
  include_once "config.php";
if (isset($_POST['update'])) {
    $id = $_GET['edit'];
 // $admittedED =  "ADMITTED";
          	$statusS=0;
		$status=1;
		$mailer =mysqli_real_escape_string($connection,$_POST['mailer']);
     	$scoreS =mysqli_real_escape_string($connection,$_POST['scoreS']);
     	$department = mysqli_real_escape_string($connection,$_POST['department']);
     	$faculty = mysqli_real_escape_string($connection,$_POST['faculty']);
            $admitted =$_POST['admitted'];
            $COdes=rand(000,999); 
      $select="SELECT * FROM application WHERE appId='$id'";
    $result = mysqli_query($connection,$select);
  if(!$result){
      
  }
       while($row=mysqli_fetch_assoc($result)){
            $ids = $row['appId'];
         $score = $row['score'];
            $email = $row['email'];
             $surname = $row['surname'];
              $lastname = $row['lastname'];
              $middlename = $row['middlename'];
         $studentname=  $surname. ' ' .   $middlename.' '.$lastname;
      
    }    
     date_default_timezone_set('Africa/Lagos');
      $matric=date('Y',time());
     $selected=mysqli_query($connection,"SELECT * FROM matricNo WHERE depts='$department'");
     if(!$selected){
          
      }while($row=mysqli_fetch_assoc($selected)){
         $code=$row['code'];
   $YEAR = $row['years'];
}
     $matricNo= $matric.$YEAR.$COdes.$code;
 //  $subject = 'ADMITTED.';
//$from = 'admin@depotterhealthtech.sch.ng';
//$fromName="qoztore";
// To send HTML mail, the Content-type header must be set
//$headers  = 'MIME-Version: 1.0' . "\r\n";
//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
//$headers .='From: Depotter '.'<'.$from.'>' ."\r\n".
//$headers .= 'From: '.$from."\r\n".
   // 'Reply-To: '.$from."\r\n" .
   // 'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
//$message = '<html><body>';
//$message .= '<div style="text-align:center"><img src="http://depotter.agertechsolutions.com.ng/images/log.png" class="mobile-logo" alt="Logo"></div>';
//$message .= '<p style="color:#777;font-size:16px;text-align:center">WELCOME TO DEPOTTER.</p>';
//$message .= '<h3 style="font-size:18px">Dear '.$first.',CONGRATULATIONS, you have been admitted to the our noble college.Please pay up the Acceptance fee</h3>';
//$message .= '<h3 style="font-size:18px">P-UTME SCORE: '.$scoreS.'%</h3>';
//$message .= '<h3 style="font-size:18px">Username: '.$username.'</h3>';
//$message .= '<h3 style="font-size:18px">Password: '.$pasword.'</h3>';
//$message .= '<a href="http://depotter.agertechsolutions.com.ng/loggin.php">Login</a>';
//$message .= '<p style="font-size:16px;">Thanks,Admin.</p>';
//$message .= '<p style="font-size:18px;text-align:center;color:#777">© 2021 Depotter. All Rights Reserved.</p>';
//$message .= '</body></html>';
 
 
    // if ($firstnameJ ||  $lastnameJ ||   $phonemailJ  ||  $passwordJ) {
   
  // }
//	$update="UPDATE applicants SET score ='$firstnameJ',admissionstatus ='$lastnameJ', WHERE id='$id'";
if($admitted == "ADMITTED"){
	 include "config.php";
	 $update = "update application set admissionstatus='$admitted',department='$department',faculty='$faculty',score='$scoreS',status='$status',matricNo='$matricNo',name='$studentname' where appId='$id'";
     if(!$update){
                    echo "Error: " . $update . "<br>" . mysqli_error($connection);
               }
       else{ 
           
         
require_once "Mail.php"; // PEAR Mail package
require_once ('Mail/mime.php'); // PEAR Mail_Mime packge


 $from = "admin@depotterhealthtech.sch.ng"; //enter your email address
 $to = $email; //enter the email address of the contact you're sending to
 $subject = "ADMISSION"; // subject of your email

$headers = array ('From' => $from,'To' => $to, 'Subject' => $subject);

$text = ''; // text versions of email.
$html = "<html><body>
<div style='text-align:center'><img src='https://depotterhealthtech.sch.ng/images/logo.png' class='mobile-logo' alt='Logo'></div>
<p style='color:#777;font-size:16px;text-align:center'>WELCOME TO DE POTTER.</p>
<h3 style='font-size:18px'>Dear $studentname,CONGRATULATIONS, you have been admitted to De Potter College.Please pay up the Acceptance fee.</h3>
 <h3 style='font-size:18px'> P-UTME SCORE: $scoreS%</h3> 
  <h3 style='font-size:18px'>Matric No: $matricNo</h3>
  
<a href='http://depotterhealthtech.sch.ng/depotter/loggin.php'><h2>login</h2></a>
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



if (PEAR::isError($mail)) {
echo("<p>" . $mail->getMessage() . "</p>");
}
else {
 $mail = $smtp->send($to, $headers, $body);
 echo '<script> 
     location.href="adminissionstatus.php";
     </script>';
}
// header("Location: http://www.example.com/");
}
               // insert
             
              
   // $result =mysqli_query($connection,$update);
    
}

elseif($admitted == "NOT YET ADMITTED"  or $admitted == "ADMISSION IN PROGRESS"){
    include "config.php";
    $update = "update application set admissionstatus='$admitted',department='$department',faculty='$faculty',score='$scoreS',status='$statusS' where appId='$id'";
   // $result =mysqli_query($connection,$update);
}
      $result =mysqli_query($connection,$update);
     // echo $result;
    if (!$result){
        die (("faileds").mysqli_connect_error());
    } 
  else{
     // if(($id == $email) &&$admitted == "ADMITTED"){
          //$_SESSION['UPLOADs']="true";
          //if(($admitted == "ADMITTED")){
        // mail($mailer,$subject, $message,$headers); 
        // $_SESSION['UPLOADs']="true";/upload.php?edit='.$email_val.'">Click here</a>';
     echo "<script> location.href='adminissionstatus.php' </script>";
      
    //}
      
  }
 
   
    }

  ?> 