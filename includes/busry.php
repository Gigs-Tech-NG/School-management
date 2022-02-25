
<?php
$_SESSION['timeout'] = time(); 
if (time()-$_SESSION['timeout'] > 1800){
   unset($_SESSION['timeout']);
  // echo "<script> location.href='forget.php' <script>";
}
if( $_SESSION['LOGGEDsub'] !="true"){
    echo"<script> location.href='stafflogin.php'  </script>";
}

?>
 <?php 
  include "config.php";
//if(( $_SESSION['username']) == "Nubian"){
//if(isset($_GET['zdeidhdjkksdkdsakdkkikshsdlsnsslksksssssjsksldfmnokvsvkskh1237jhdc678sswwqakckxcnhbkvllszmc0980w87889'])){
  //  $idss =$_GET['zdeidhdjkksdkdsakdkkikshsdlsnsslksksssssjsksldfmnokvsvkskh1237jhdc678sswwqakckxcnhbkvllszmc0980w87889'];
   
   // $_SESSION['username']="ade"; // Initializing Session
	//    $_SESSION['password']=$passd;
	
      $select="SELECT * FROM admlogin WHERE username='".$_SESSION['username']."' AND password='".$_SESSION['password']."'";
    $result=mysqli_query($connection, $select);
    if(mysqli_num_rows($result) > 0){
        while($row=mysqli_fetch_assoc($result)){
            $phone=$row['phone'];
             $passport=$row['picture'];
            $id = $row['id'];
            $email_val = $row['email'];
             $firstname = $row['fullname'];
               $rank = $row['rank'];
                
      //  }
    }
}
    ?>  <link rel="stylesheet" href="csss/normalize.css">
    <!-- Main csss -->
    <link rel="stylesheet" href="csss/main.css">
    <!-- Bootstrap csss -->
    <link rel="stylesheet" href="csss/bootstrap.min.css">
    <!-- Fontawesome csss -->
    <link rel="stylesheet" href="csss/all.min.css">
    <!-- Flaticon csss -->
  	<!---<link href="css41/bootstrap.css" rel="stylesheet" type="text/css" media="screen"--> 
        <link rel="stylesheet" type="text/css" href="css41/DT_bootstrap.css">
    <link rel="stylesheet" href="fonts/flaticon.css">
    <!-- Full Calender csss -->
    <link rel="stylesheet" href="csss/fullcalendar.min.css">
    <!-- Animate csss -->
    <link rel="stylesheet" href="csss/animate.min.css">
    <!-- Custom csss -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernize js -->
    <script src="jsss/modernizr-3.6.0.min.js"></script>

	<script src="jsss/jquery.js" type="text/javascript"></script>
	<script src="jsss/bootstrap.js" type="text/javascript"></script>
	
	<script type="text/javascript" charset="utf-8" language="javascript" src="jsss/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf-8" language="javascript" src="jsss/DT_bootstrap.js"></script>

</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>