<?php
// Retrieve the request's body and parse it as JSON
$input = @file_get_contents("php://input");
$event = json_decode($input);
// Do something with $event
$status =$event->data->status;
    $reference =$event->data->reference;
    $amount =$event->data->amount;
   
    //$full_name= $lname.''.$fname;
    $email =$event->data->customer->email;
   $check=$event->event;
     date_default_timezone_set('Africa/Lagos');
     $date_time=date('m/d/Y h:i:s a',time());
     if($check == 'charge.success'){
        include "config.php";
        $stmt=$con->prepare("INSERT INTO paystack (status
        ,reference,amount,email,date)
         VALUES(?,?,?,?,?)");
       $stmt->bind_param("sssss",$status,$reference,$amount,$email,$date_time);
       $stmt->execute();
        if (!$stmt) {
          echo 'There was a problem on your code'.mysqli_error($con);
          //die"failed".mysqli_connect_error();
        }
        else{
            
        }
     }
    
http_response_code(200); // PHP 5.4 or greater
?>
