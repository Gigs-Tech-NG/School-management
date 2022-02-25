<?php
 if(!isset($_SESSION["matricno"])){
  header("location: studentLogin.php");
  exit();
 } 
?>
<div class="userheader">
<a href="index.php"><img src="https://www.depotterhealthtech.sch.ng/students/images/logo.png" class="img-responsive" alt="MY PROFILE" width="40" height="40"></a>
 <div class="dropdown">
  <button class="dropbtn"> 
   <?php 
    $matricno=$_SESSION['matricno'];
    $select_profile="SELECT * FROM students WHERE matricno='$matricno'";
    $result=mysqli_query($connection,$select_profile);
    while($data=mysqli_fetch_array($result)){
    $picture=$data['picture']; 
    echo "<br/>";
 // echo "Welcome: ". $name=$data['firstname']."<br/>";
  echo "<img src='$picture' alt=\"My profile picture\"  style='width:70'; height='70'; border-radius:50px; >";
 }
?>
  
  </button>
  <div class="dropdown-content">
    <a href="viewProfile.php"><span class="fa fa-eye"></span>View Profile</a>
    <a href="editProfile.php"><span class="fa fa-edit"></span>Edit Profile</a>
    <a href="photo.php"><span class="fa fa-user"></span>Change Picture</a>
    <a href="changepass.php"><span class="fa fa-key fa-fw"></span>Change Password</a>
    <a href="logout.php"><span class="fa fa-lock"></span>Logout</a>
  </div>
</div>

</div>