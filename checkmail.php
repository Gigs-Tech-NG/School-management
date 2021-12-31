<?php
error_reporting(E_ALL);

$toemail = 'sulaimanbabatunde2@gmail.com';
$toname = 'Sulaiman Babatunde';
$subject = 'Testing Email Sending...';
$bodyhtml = '<H1>yeah</h1>';
$bodytext = 'heres Hoping it works';
$fromemail = 'adigunishola001@gmail.com';
$fromname = 'Adigun Abdulmalik Ishola';

var_dump(sendemail($toemail,$toname,$subject,$bodyhtml,$bodytext,$fromemail,$fromname));


function sendemail($toemail,$toname,$subject,$bodyhtml,$bodytext,$fromemail,$fromname)
{
   require 'PHPMailerAutoload.php';
require 'PHPMailer/src/PHPMailer.php'; // PEAR Mail_Mime packge


    $mail = new phpmailer();
    $mail->IsSMTP();
    $mail->From     = $fromemail;
    $mail->FromName = $fromname;

    $mail->Host     = "smtp.gmail.com";  
    $mail->SMTPAuth = true;     // turn on SMTP authentication
    $mail->Username = "info@depotterhealthtech.sch.ng";  // SMTP username
    $mail->Password = "depotter/tech/01"; // SMTP password
    $mail->Port="597";


    $mail->SMTPDebug=true;


    if(strlen($bodyhtml)>0) {
        $mail->Body  = $bodyhtml;
        $mail->IsHTML(true);
        }
    else if(strlen($bodytext)>0){ 
            $mail->Body = $bodytext;
    }

    if(strlen($bodytext)>0 && strlen($bodyhtml)>0){ 
        $mail->AltBody = $bodytext;
    }

    $mail->AddReplyto($fromemail,$fromname);
    $mail->Subject  =  $subject;

    // Check if multiple recipients
    if(preg_match("/;/",$toemail))
    {
        $tmp_email=preg_split("/;/",$toemail);
        $tmp_contact=preg_split("/;/",$toname);
        $mail->AddAddress($tmp_email[0], $tmp_contact[0]);
//      echo "<!-- multi email:".$tmp_email[0]." contact:".$tmp_contact[0]." -->\n";
        for($j=1;$j<count($tmp_email);$j++)
        {
            if(preg_match("/\@/",$tmp_email[$j]))
            {   $mail->AddCC($tmp_email[$j], $tmp_contact[$j]);
//              echo "<!-- multi email cc:".$tmp_email[$j]." contact:".$tmp_contact[$j]." -->\n";
            }
        }
    }
    else{ 
        $mail->AddAddress($toemail, $toname);
    }

    $error= false;
    if($mail->Send()){    
        $error =true;
    }

    // Clear all addresses and attachments for next loop
    $mail->ClearAddresses();
    return $error;

}
?>