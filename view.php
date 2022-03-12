<?php
$error ="";
?>
<?php
 //$connection = mysqli_connect("localhost","root","","depotter");
 include 'config.php';
$id=$_GET['id'];
    	$query=mysqli_query($connection,"select * from applicant_form where id='$id' ORDER BY id ASC");
    	$row=mysqli_fetch_array($query);
$imgsrc ='uploads/'.$row['passport'];
      ?>

<!doctype html>
<html>
<head>
 <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Attendance</title>
        <link rel="icon" href="img/logo.png" />

       <!-- meta tag -->
        <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Depotter | Applicant dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize csss -->
    <link rel="stylesheet" href="csss/normalize.css">
    <!-- Main csss -->
    <link rel="stylesheet" href="csss/main.css">
    <!-- Bootstrap csss -->
    <link rel="stylesheet" href="csss/bootstrap.min.css">
    <!-- Fontawesome csss -->
    <link rel="stylesheet" href="csss/all.min.css">
    <!-- Flaticon csss -->
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

<a href="search-applicant-details.php" style="background-color:white;">Back</a>
<center><h2 style="font-weight: bolder;">APPLICANT DETAILS</h2></center>

<form method="POST" action="">

<center><img src='<?php $imgsrc ='uploads/'.$row['stu_image']; echo $imgsrc;?>' width = "250" height = "200" style="border-radius:50%;"/></center><br />
 <div class="row">
 <div class="col-xl-3 col-lg-6 col-12">
  <p> Applicants no : <?php echo $row['id'];?></p>
  </div>
  <div class="col-xl-3 col-lg-6 col-12"><p> surname : <?php echo $row['stu_surname'];?></p></div>
<div class="col-xl-3 col-lg-6 col-12">  <p>middle name : <?php echo $row['stu_middle_name'];;?></p></div>
 <div class="col-xl-3 col-lg-6 col-12"> <p> last name :  <?php echo $row['stu_lastname'];;?></p></div>
   
<div class="col-xl-3 col-lg-6 col-12"><label>Enter POST-UTME score</label>
 <input type="text" name="p-score" value="<?php echo $row['PUTME_SCORE']?>" /></div>
<div class="col-xl-3 col-lg-6 col-12"> <label>Enter admission status</label>
 <select  name="status"required="" >
                                        <option value="" ><?php echo $row['admission_status']?> *</option>
                                        <option value="Not yet Admitted">Not yet Admitted</option>
                                        <option value="Admission in progress">Admission in progress</option>
                                        <option value="admitted">admitted</option>
                                        
                                    </select>
 <!--input type="text" name="admit"  value=""/--></div>
 <div class="col-xl-3 col-lg-6 col-12"> <label>Enter Course Admitted into</label>
 <input type="text" name="course"  value="<?php echo $row['course_admmission'];?>"/></div>
<div class="col-xl-3 col-lg-6 col-12">
<label>UPDATE</label> <br /><input type="submit" value="SAVE RECORD"  name="submit" style="color: blue; font-weight: bolder; border-color: blue;"/></div>
<div class="col-xl-3 col-lg-6 col-12"> <label>DELETE</label><br />
<script type="text/javascript">
function confirmall(){
    if (confirm("are you sure you want to delete applicant no : <?php echo($row['id']);?>?")){
    location.href='delete.php?id=<?php echo($row['id']);?>';}
else{
    location.href='view_profile.php?id=<?php echo($row['id']);?>';
}
}

</script>
<button style=" border-radius: 5px;border-style:solid ;color:white; background-color: red;"onclick='confirmall()'>Delete</button></div>
</div>
</form>
<?php 
if(isset($_POST['submit'])){
    $connection = mysqli_connect("localhost","root","","depotter");
    	$id=$_GET['id'];
     
    	$pscore = $_POST['p-score'];
        $admit = $_POST['status'];
        $course = $_POST['course'];
     
    $update=	mysqli_query($connection,"UPDATE applicant_form set PUTME_SCORE ='$pscore',admission_status='$admit',
    course_admmission='$course'  WHERE id = '$id'");
        if(!$update){
          echo "Error: " . $update . "<br>" . mysqli_error($connection);
        }else{
            echo'<h3 style="color:red; text-align: center;">update sucessful<h3>';
           // echo"<script>window.alert('update successful');
            //location.href='view_profile.php';</script>";
            
    	}
}
?>
</div>
</body>
</html>