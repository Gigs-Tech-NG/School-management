<?php
//$to = 'sulaimanbabatunde2@gmail.com';
//$subject = 'message checking';
//$from = 'adigunishola001@gmail.com';
 
// To send HTML mail, the Content-type header must be set
//$headers  = 'MIME-Version: 1.0' . "\r\n";
//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
//$headers .= 'From: '.$from."\r\n".
    //'Reply-To: '.$from."\r\n" .
    //'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
//$message = '<html><body>';
//$message .= '<h1 style="color:#f40;">Asalamu alaikum sir!</h1>';
//$message .= '<p style="color:#080;font-size:18px;">do u receive mail?</p>';
//$message .= '</body></html>';
 
// Sending email
//if(mail($to, $subject, $message, $headers)){
   // echo 'Your mail has been sent successfully.';
//} else{
  //  echo 'Unable to send email. Please try again.';
//}

//new maling



 $to = 'adigunishola001@gmail.com';
        $subject = 'email checking.';
       $from = ' adigunafolabi002@gmail.com';
     //$fromName="Deppotter";
 
    // To send HTML mail, the Content-type header must be set
   $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
    $headers .='From: De Potter '.'<'.$from.'>' ."\r\n".
//$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
    $message = '<html><body>';
    $message .= '<div style="text-align:center"><img src="http://Depotter.agertechsolutions.com.ng/images/depotter_logo.png" class="mobile-logo" alt="Logo"></div>';
   $message .= '<h1 style="color:#f40;">Asalamu alaikum sir!</h1>';
   $message .= '<p style="color:#080;font-size:18px;">do u receive mail?</p>';
   $message .= '<p style="font-size:16px;">Thanks, Admin.</p>';
   $message .= '<p style="font-size:18px;text-align:center;color:#777"> © ."date("Y",time())". De Potter. All Rights Reserved.</p>';
   $message .= '</body></html>';
    if (mail($to, $subject, $message, $headers))
                {
        echo('Your mail has been sent successfully.')
        ;
    
    
}
?>