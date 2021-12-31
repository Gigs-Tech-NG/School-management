<?php
session_start();
?>
<script>
window.print()
</script>
<!doctype>
<html>
<head>
<title></title>
</head>
<body>
<?php
//	function validate(){
   $error="";
      if(isset($_POST['submit'])){
          include "config.php";
          $fname =mysqli_real_escape_string($connection,$_POST['first_name']);
             $lname = mysqli_real_escape_string($connection,$_POST['last_name']);
               $mnane =mysqli_real_escape_string($connection, $_POST['middle_name']);
                  $dbirth = mysqli_real_escape_string($connection, $_POST['dbirth']);
                 $gender = $_POST['gender'];
                $email = mysqli_real_escape_string($connection,$_POST['email']);
                //$amount = mysqli_real_escape_string($connection,$_POST['']);
              $username = mysqli_real_escape_string($connection,$_POST['']);
                $pasword = mysqli_real_escape_string($connection,$_POST['']);
                $amount = mysqli_real_escape_string($connection,$_POST['']);
                $utme_no = mysqli_real_escape_string($connection,$_POST['utme_no']);
              $teller = mysqli_real_escape_string($connection,$_POST['teller_no']);
           $image=mysqli_real_escape_string($connection,$_FILES['file']['name']);
           $status= 0;
           $verify="Not Verify";
             date_default_timezone_set('Africa/Lagos');
     $date_time=date('m/d/Y h:i:s a',time());
             $target="img/";
   $targetfile=$_FILES['file']['tmp_name'];
    $target_arr=$target.basename($image);
    //$size=$_FILES['file']['size'];
  // $max=5*1024*1024;    //5MB
          
if (!preg_match("/^[a-zA-Z-' ]*$/", $fname )) {
 // return "Only letters and white space allowed";
  $_SESSION['record']= "Only letters and white space allowed";
  echo "<script> location.href='admit-form.php' </script>";
}
if (!preg_match("/^[a-zA-Z-' ]*$/", $lname )) {
   $_SESSION['record']= "Only letters and white space allowed";
  echo "<script> location.href='admit-form.php' </script>";
}
if (!preg_match("/^[a-zA-Z-' ]*$/", $mnane )) {
   $_SESSION['record']= "Only letters and white space allowed";
  echo "<script> location.href='admit-form.php' </script>";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  //return "Invalid email format";
    $_SESSION['record']= "Invalid email format";
  echo "<script> location.href='admit-form.php' </script>";
}
//email validation
include "config.php";
$select="SELECT * FROM applicants WHERE email='$email'";
 $result=mysqli_query($connection,$select);
    if(!$result){
	   die("failed").mysqli_connect_error();
   }
   while($row= mysqli_fetch_array($result)){
	   $mailler=mysqli_real_escape_string($connection,$row['email']);
   }if(($email == $mailler)){
	  return "Email Already Exit";
	  // $_SESSION['record']= "Email Already Exit";
 // echo "<script> location.href='admit-form.php' </script>";
	  }
    //mail
$subject = 'Applicant Account.';
$from = ' admin@depotterhealthtech.sch.ng';
//$fromName="Deppotter";

 
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
$message .= '<h3 style="font-size:18px">Dear '.$fname.',You have successfully created an account and your payment will be verified within 24hrs to proceed with your registration.</h3>';
$message .= '<p style="font-size:16px;">Thanks,Admin.</p>';
$message .= '<p style="font-size:18px;text-align:center;color:#777">© 2021 Depotter. All Rights Reserved.</p>';
$message .= '</body></html>';
 
// Sending email
    //select file type
    
   $extension  = strtolower(pathinfo($target_arr,PATHINFO_EXTENSION));
    //valid file extension
    $extension_arr=array('png','jfif','jpeg','jpg','gif');
    //check
    if(!in_array($extension,$extension_arr)){
   // return "file not supported";
    }
       //if file alrady exist
        if(file_exists($target_arr)){
         //   return "Image already exit";
        }
        //check file size
        //invoice
         function checkkeys($connection,$randstr){
          $sql = "SELECT * FROM applicants";
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
        include "config.php";
        $select="INSERT INTO applicants (first_name,last_name,middle_name,dbirth,gender,email,username,pasword,amount,
        utme_no,teller_no,file,status,invoice,verify,date) VALUES 
  ('$fname','$lname','$mnane','$dbirth','$gender','$email','$username','$pasword','$amount','$utme_no','$teller','$image','$status','$invoice','$verify','$date_time')";
               $result=mysqli_query($connection,$select);
               
               if(!$result){
                   die("failed").mysqli_connect_error();
               }
        
       else{
            if(
                move_uploaded_file($targetfile,$target_arr)){
                  mail($email, $subject, $message, $headers);
                 //echo "<script> location.href='index.php'</script>";
                // echo'<script> window.alert("Dear applicant, you have successfully registered, a verification message has been sent to your mail")
                // </script>';
				   //echo "success";
                }
               // insert
             
              
            }
      }
//	}       
              
$select = (mysqli_query($connection,'SELECT * FROM applicants'));
if(!$select ){
    die("failed").mysqli_connect_error();
}while($row = mysqli_fetch_array($select)){
    $name = $row['first_name'];
     $invoice = $row['invoice'];
}
//$select = (mysqli_query($connection,'SELECT invoice FROM applicants'));
//if(!$select){
 //   die("failed").mysqli_connect_error();
//}
//while($row = mysqli_fetch_array($select)){
   // $invoice = $row['invoice'];
    
//}
echo"Dear $name your invoice number is:$invoice kindly pay to BANK:GTB ACC-NAME:DEPOTTER NUMBER:123323442";

      
                 //      }
                   ?>
                   
</body>
</html>