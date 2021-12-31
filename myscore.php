<?php session_start();?><?php require("includes/constant.php"); ?> 

<!doctype html>
<html>
<head>
 <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Depotter | Applicant dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">
    <!-- Normalize csss -->
    <link rel="stylesheet" href="csss/normalize.css">
    <!-- Main csss -->
    <link rel="stylesheet" href="csss/main.css">
    <!-- Bootstrap csss -->
    <link rel="stylesheet" href="csss/bootstrap.min.css">
    <!-- Fontawesome csss -->
    <link rel="stylesheet" href="csss/all.min.css">
    <!-- Flaticon csss -->
    <?php
 if( $score == ""){
          echo '<script> alert("No Score Yet")
     window.location = "applicantdashboard.php";
     </script>';
      }
    ?>
    <link rel="stylesheet" href="fonts/flaticon.css">
    <!-- Full Calender csss -->
    <link rel="stylesheet" href="csss/fullcalendar.min.css">
    <!-- Animate csss -->
    <link rel="stylesheet" href="csss/animate.min.css">
    <!-- Custom csss -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernize js -->
    <script src="jsss/modernizr-3.6.0.min.js"></script>
<style>
table{
    border:2px solid red;
    text-align: center;
    width: 100%;
    color: green;
    background: white;
    text-transform: uppercase;
}
th{
      border:2px solid red;
}
tr{
      border:2px solid red;
}
th{
      border:2px solid red;
}
td{
      border:2px solid red;
}
body{
    
    
}
</style>

</head>
<body>
<div class="container-fluid">


<center><h2 style="font-weight: bolder;">ADMISSION SCORE</h2></center>


<center><img src='img/<?php echo $passport;?>' width = "150" height = "100"/></center><br />
 <div class="row">
 <div class="col-xl-3 col-lg-6 col-12">
  <p> Applicant Number : <?php echo $id;?></p>
  </div>
  <div class="col-xl-3 col-lg-6 col-12"><p> surname : <?php echo  $firstname;?></p></div>
<div class="col-xl-3 col-lg-6 col-12">  <p>middle name : <?php echo $middle;?></p></div>
 <div class="col-xl-3 col-lg-6 col-12"> <p> last name :  <?php echo $lastname;?></p></div>
 <div class="col-xl-3 col-lg-6 col-12"> <h3> POST UTME SCORE :  <?php echo
  $score;
?>%</h3></div>
   <!--div class="col-xl-3 col-lg-6 col-12"> <p> Admission status :  <?php //echo $row['admission_status'];;?></p></div-->


</div>
</body>
</html>