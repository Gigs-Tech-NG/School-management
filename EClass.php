<?php
session_start();
$_SESSION['timeout'] = time(); 
if (time()-$_SESSION['timeout'] > 1800){
   unset($_SESSION['timeout']);
  // echo "<script> location.href='forget.php' <script>";
}
if( $_SESSION['LOGGEDstudent'] !="true"){
    echo"<script> location.href='loggin.php'  </script>";
}

?>
<!doctype html>
<html>
<head>
 <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Depotter |Lectures</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
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
    border:2px solid midnightblue;
    text-align: center;
    width: 100%;
    color: green;
    background: white;
    text-transform: uppercase;
}
th{
      border:2px solid midnightblue;
}
tr{
      border:2px solid midnightblue;
}
th{
      border:2px solid midnightblue;
}
td{
      border:2px solid midnightblue;
}
body{
  background: #f7d3aa;    
}
</style>

</head>
<body >
    <h5><a href="student.php">Previous</a></h5>
<div class="container"  style="text-align: center; border:4px solid black; border-top: 17px solid midnightblue; border-left:7px solid midnightblue;
 border-bottom: 17px solid midnightblue; border-radius: 15px; width: 80%; box-sizing: content-box;background-color: white; margin-top: 3%;border-right:7px solid midnightblue;">

<!--a href="admin.php" style="background-color:white;">Homepage</a-->
<!--input type="reset" value="refresh page"/-->
<center><h2 style="font-weight: bolder; text-decoration-line: underline; text-decoration-style: double;"> VIEW ALL LECTURES</h2></center>
  <div class="row">
  <div class="col-xl-3 col-lg-6 col-12"><h3><a href="year1.php">View Year 1 lectures</a> </h3></div>
  <div class="col-xl-3 col-lg-6 col-12"> <h3><a href="year2.php">View Year 2 lectures</a> </h3></div>
 <div class="col-xl-3 col-lg-6 col-12"><h3><a href="year3.php">View Year 3 lectures</a> </h3></div>
  <div class="col-xl-3 col-lg-6 col-12"> <h3><a href="year4.php">View Year 4 lectures</a> </h3></div>


</div>
<?php
 //$connection = mysqli_connect("localhost","root","","depotter");
 //$today = date('d/m/Y');
   // 	$query=mysqli_query($connection,"SELECT * FROM  year_1  WHERE date = '$today'");
       // if(!$query){
         //   echo "failed";
       // }
        //if (mysqli_num_rows($query) > 0) {
  // output data of each row
 // while($row = mysqli_fetch_assoc($query)) {
  //  echo "<div class='row' style='border: 2px solid blue; background:#8d5b41; color:white;border-radius: 12px; text-decoration-style: dashed;
     //width: 80%; text-align:; margin-left: 10%;box-sizing: content-box;'>".
   // " <div class='col-xl-4 col-lg-6 col-12' style='font-family: monospace,sans-serif;'>"."POST NO :-" . $row["id"]. "</div>". "<div class='col-xl-4 col-lg-6 col-12'style='font-family: monospace,sans-serif;'>". 
  //  " POSTED BY :- " .$row["poster"]."</div>". "<div class='col-xl-4 col-lg-6 col-12'style='font-family: monospace,sans-serif;'>".
    //  "  POSTED ON:-   " .$row["date"]."</div>"."</div>". "<br>". 
   //   "<h2 style='text-align: center;text-transform: uppercase; font-weight: bolder; color:red; text-decoration: underline;text-decoration-style: double;'>".
      // $row["title"]. "</h2>". "<p style='text-align:left;font-weight:;font-family:italic; color:green;font-size:18px;'> " . $row["detail"]. "</p>". 
   // "<br>";
  //}
//} else {
    //echo "no lectures yet.................."."<br>"."keep refreshing page or come back later";
//}
        
        
            ?>
        
           
</div>
</body>
</html>