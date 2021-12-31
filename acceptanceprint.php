<?php
session_start();

?>
<!doctype html>
<html class="no-js" lang="">
<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/add-class.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 05:35:34 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>De Potter College || Re-defining lost hope</title>
    <meta name="description" content="">
    <!-- Favicon -->
 <link rel="apple-touch-icon" href="apple-touch-icon.html">
        <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">
  <?php// require("includes/logIN.php"); ?><?php  require("includes/constants.php");?>
 
<style>
      hr{
        height: 1px;
        background-color: #ccc;
        border: none;
    }
    p,h1,h2,h3{
        font-family: verdana;
    }
    strong{text-decoration: underline};
    
  
    </style>
</head>

<body>
      <a href='' download='.pdf'>Download Pdf</a>
    <article>
        <div  style=" background-color:white;" class="container">
<div class="row" style="size: a4;">


        <hr>
      
 <img src="images/HEADERLOGODEPOTTTER.jpg"  style="width:1980px; height:150px;">
                              <p style="font-size:12px; text-align:center"></p></h1>
                          <label style="color: red;"></label></label>
                         <?php  include"config.php"; $selected=mysqli_query($connection,"SELECT * FROM matricNo WHERE depts='$department'");
     if(mysqli_num_rows($selected)<0){
         echo "<script> alert('not allowed')
         location.href='student.php'></script>";
          
      }while($row=mysqli_fetch_assoc($selected)){
        
   $YEAR = $row['years'];
      
      }                           
 ?>                              <h2 style="padding-left:2% ">Dear <?php echo $fullname; ?></h2>
                              <h2 style="text-decoration: underline;padding-left:2% ">OFFER OF PROVISIONAL ADMISSION FOR <?php 
              $newDate = new DateTime($date);
               echo ($newDate->format('Y')) ."/"; 
               echo ($newDate->format('Y') +1); ?> SESSION</h2></div>
                              <p>I am pleased to inform you that you have been offerd provisional admision by the college in affliation with <strong>Ogun State College Of Health Technology,Ilese Ijebu</strong> 
                              To pursue <strong><?php echo $depart;?> </strong>programmes in the  <strong><?php echo $faculty ; ?>
                              </strong><strong>for a duration of <?php if(empty($year)){echo '"The Year Allocated Is Not Found"';}else{ if($YEAR=='02'){echo "two years";}elseif($YEAR=='03'){echo "three years";}elseif($YEAR=='04'){ echo "Four years";  } else{
                              echo"";}}?></strong> Subject to you filling the following conditions</p>
                              <h3>(a) You should complete the attached form in duplicate indicating wether you accept or reject the offer.Two couples should be forwarded to the registrar of the college where where the offer is tanable immidiately</h3>
                              <h3>(b) At the of registration in the college you would be required to present the original  of the certificate(s) or any other acceptable evidence of the qualification on which the offer of admission is based .
                              The college authority reserves the right to withdraw the admission , if ot is discoverd that you have been involved in any form of examination/admision irregularities even after registration in the College.</h3>
                              <h3>(c) If it discorverd at anytime that you not posses any of the qualificatins which you claim to have obtained ,you would be required to withdraw from the college</h3>
                              <h3>(d) In the absence of any responce to this offer within 60days , the Colllege will assume you are not prepared to accept the offer and may proceed to fill your space.</h3>
                              <h3>(e) You are required to present to the college at the time of registration a letter of refrence from a person of reputable standing in the society vouching for your good behaviour </h3>
                              <h3>(f) Payment of non refundable tuition ,and other designated charges to the bursary department of the collegeand obtaining official receipt for all payments  </h3>
                              <h3>(g) The college is a uniform oriented institution.Therefore all students are expected to wear this departmental uniforms at all time .However the Uniform shall be provided by the college in due course</h3>
                             
                              <?php
    date_default_timezone_set('Africa/Lagos');
    echo "Date :" .date('M d/Y',time());?> 
    <label style="padding-right: 1px; padding-left: 5%;"> <?php
    date_default_timezone_set('Africa/Lagos');
    echo "Time :" .date('h:i:s a',time());?>          
                                
                           <?php// } ?>
    <!--h3 style="margin-left: 100;"> KM 2, Oru/Ijebu-Igbo Road
Oru-Ijebu Ogun State.</h3-->


 <?php require("includes/footers.php"); ?> 
 <?php// } ?>