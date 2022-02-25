 <?php 

	function validate(){
    if(isset($_POST['create']))
    {
        
    //get form data
      include "config.php";
      $erro="";
    $fullname=mysqli_real_escape_string($connection,$_POST['fullname']);
    $phone=mysqli_real_escape_string($connection,$_POST['phone']); 
    $email=mysqli_real_escape_string($connection,$_POST['email']);
    $usernam=mysqli_real_escape_string($connection,$_POST['username']);
    $passs=mysqli_real_escape_string($connection,$_POST['password']);
      $pass=md5(mysqli_real_escape_string($connection,$_POST['password']));
    $rank=mysqli_real_escape_string($connection,$_POST['rank']);
    $date=date("Y-m-d h:i:sa");
   // $code="";
     $image=mysqli_real_escape_string($connection,$_POST['']);
     $active=0;
     $user_status="Active";
   // if( $fullname=="" || $phone=="" || $usernam=="" || $pass=="" || $email=="" || $confirm_pass==""){
   // $erro= "please fill out all fields";
   // }
         //check if username has already been taken
        // $checkusername=mysqli_query($connection,"SELECT * FROM admin WHERE username='$usernam'");
     //    if(mysqli_num_rows($checkusername) >= 1){
         // $erro="username already taken";
         // }
                   
if (!preg_match("/^[a-zA-Z-' ]*$/", $fullname )) {
 return "Only letters and white space allowed";
  }
  
               //check if email has already been taken
               include "config.php";
         $checkemail=mysqli_query($connection,"SELECT * FROM admlogin WHERE email='$email'");
         if(mysqli_num_rows($checkemail) >= 1){
         return "Email already taken";
          }
            //check if phone has already been taken
              include "config.php";
         $checkphone=mysqli_query($connection,"SELECT * FROM admlogin WHERE phone='$phone'");
         if(mysqli_num_rows($checkphone) >= 1){
          return "Phone number already taken";
          }else{
              if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/", $_POST['email'])) 
                {
                return  "Your email is not valid.";    
                }
               
               }

          $code=md5(rand(11111111,99999999));
      
          
          include "config.php";
 $register="INSERT INTO admlogin(fullname,email,username,code,password,phone,picture,active,regdate,user_status,rank)
        VALUES('$fullname','$email','$usernam','$code','$pass','$phone','$image','$active','$date','$user_status','$rank')";
        $result=mysqli_query($connection, $register);
      
         if(!$result){
                   die("failed").mysqli_connect_error();
               }
       else{ //mailing to applicantss
           
         
require_once "Mail.php"; // PEAR Mail package
require_once ('Mail/mime.php'); // PEAR Mail_Mime packge


 $from = "admin@depotterhealthtech.sch.ng"; //enter your email address
 $to = $email; //enter the email address of the contact you're sending to
 $subject = "Activate your account with de potter college"; // subject of your email

$headers = array ('From' => $from,'To' => $to, 'Subject' => $subject);

$text = ''; // text versions of email.
$html = "<html><body>
<div style='text-align:center'><img src='https://depotterhealthtech.sch.ng/images/logo.png' class='mobile-logo' alt='Logo'></div>
<p style='color:#777;font-size:16px;text-align:center'>WELCOME TO DE POTTER.</p>
<h3 style='font-size:18px'>Dear $fullname,You have been added as a staff on de-potter website and need to confirm your email address.</h3>
 <h3 style='font-size:18px'> Click on the link below or past it into the URL bar of your browser to confirm your email ,Please note that this account may be disabled as </h3>
        soon as you are done with the task given to you by the admin.
        <h3 style='font-size:18px'>Username:  $usernam </h3>
        <h3 style='font-size:18px'>Password:  $passs </h3>
<a href='https://depotterhealthtech.sch.ng/depotter/confirm.php?confirm=$code'><h2>Confirm Your Email</h2></a>
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

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
echo("<p>" . $mail->getMessage() . "</p>");
}
else {
 return "Staff Added Successful";
// header("Location: http://www.example.com/");
}
               // insert
             
              
            }
      }
	}       
       
    ?>  