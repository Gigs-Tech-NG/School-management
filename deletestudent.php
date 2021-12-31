<?php
session_start();
if(( $_SESSION['LOGGEDstudent']) !="true"){
    echo"<script> location.href='loggin.php'  </script>";
}

$_SESSION['timeout'] = time(); 
if (time()-$_SESSION['timeout'] > 600){
   unset($_SESSION['timeout']);
  // echo "<script> location.href='forget.php' <script>";
}
?>
 <?php 
  include "config.php";
//if(isset($_GET['zJitKoljsddkyhkajswkjwnwkaasjddddjytdnastkjdawndjdtyjsstzgzzstsAFDRSGSjkssjiaakskajaksoasaihahosoajs20kdjoAFDHSDHNHNDMNSJ109'])){
 //   $idss =$_GET['zJitKoljsddkyhkajswkjwnwkaasjddddjytdnastkjdawndjdtyjsstzgzzstsAFDRSGSjkssjiaakskajaksoasaihahosoajs20kdjoAFDHSDHNHNDMNSJ109'];
  //  $amont=10500;

  
     $select="SELECT * FROM application WHERE matricNo='".$_SESSION['matricNo']."'";
    $result=mysqli_query($connection, $select);
    if(mysqli_num_rows($result) > 0){
        while($row=mysqli_fetch_assoc($result)){
             $genderJ=$row['dob'];
             $marital=$row['relationship'];
            $address=$row['address'];
            $firstchoice=$row['firstchoice'];
            $secondchoice=$row['secondchoice'];
            $phone=$row['phone'];
            $faculty=$row['faculty'];
            $department=$row['department'];
            $level=$row['level'];
             $sfuulname=$row['fullname'];
            $sponsoraddress=$row['sponsoraddress'];
            $sponsorphone=$row['sponsorphone'];
            $gender= $row['gender'];
            $matricNo=$row['matricNo'];
              $state= $row['state'];
                $religion= $row['religion'];
             $passport=$row['picture'];
            $id = $row['appId'];
      $state=$row['state'];
$local=$row['lga'];
$fullnames=$row['fullname'];
$sponsoraddress=$row['sponsoraddress'];
$sponsorphone=$row['sponsorphone'];
            $email_val = $row['email'];
             $firstnameS = $row['surname'];
                 $lastname = $row['lastname'];
                  $middle = $row['middlename'];
           $firstname = $firstnameS. ' ' .$middle;
        }
    }


     ?>                  
            <?php
   if (isset($_GET['del'])){
   
     $id = $_GET['del'];
     
    
   
        
  $delete = "DELETE FROM  book WHERE id = $id";

 include_once "config.php";
   
   $result = mysqli_query($connection,$delete);
   
   if (!$result){
    die (("failed").mysqli_connect_error());
   }
 else{
     echo"<script> location.href='Library.php'  </script>";

}
}

?>    