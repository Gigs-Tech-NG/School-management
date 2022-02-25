<?php
$_SESSION['timeout'] = time(); 
if (time()-$_SESSION['timeout'] > 1800){
   unset($_SESSION['timeout']);
  // echo "<script> location.href='forget.php' <script>";
}
if(( $_SESSION['applicant']) !="true"){
    echo"<script> location.href='applicant_log_in.php'  </script>";
}

?>
  <?php 
 
 
// $connection=mysqli_connect("localhost:3306","alqudust_nujabah","Nujabah22/11,","alqudust_nuja");
include "config.php";

     $select="SELECT * FROM application WHERE email='".$_SESSION['email']."'";
    $result=mysqli_query($connection, $select);
    if(mysqli_num_rows($result) > 0){
        while($row=mysqli_fetch_assoc($result)){
            $dbirth=$row['dob'];
            $matricno=$row['matricNo'];
            $address=$row['address'];
            $firstchoice=$row['firstchoice'];
            $secondchoice=$row['secondchoice'];
            $phone=$row['phone'];
             $sfuulname=$row['fullname'];
            $sponsoraddress=$row['sponsoraddress'];
            $sponsorphone=$row['sponsorphone'];
            $gender= $row['gender'];
              $state= $row['state'];
                $religion= $row['religion'];
             $passport=$row['picture'];
               $department=$row['department'];
            $id = $row['appId'];
      $state=$row['state'];
$local=$row['lga'];
$fullnames=$row['fullname'];
$sponsoraddress=$row['sponsoraddress'];
$admissionstatus=$row['admissionstatus'];
$sponsorphone=$row['sponsorphone'];
 $middle = $row['middlename'];
            $email_val = $row['email'];
             $firstname = $row['surname'];
                 $lastname = $row['lastname'];
                 $firstnames= $firstname. ' ' .$middle;
                  $score = $row['score'];
                 $date=$row['date'];
           $fullname =  $firstname. ' ' .$middle.' '.$lastname;
        }
  
     
}

    ?>