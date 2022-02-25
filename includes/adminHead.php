  <link rel="stylesheet" href="csss/normalize.css">
    <!-- Main csss -->
    <link rel="stylesheet" href="csss/main.css">
    <!-- Bootstrap csss -->
    <link rel="stylesheet" href="csss/bootstrap.min.css">
    <!-- Fontawesome csss -->
    <link rel="stylesheet" href="csss/all.min.css">
    <!-- Flaticon csss -->
    <link rel="stylesheet" href="fonts/flaticon.css">
    <!-- Animate csss -->
    <link rel="stylesheet" href="csss/animate.min.css">
    <!-- Select 2 csss -->
    <link rel="stylesheet" href="csss/select2.min.css">
    <!-- Date Picker csss -->
    <link rel="stylesheet" href="csss/datepicker.min.css">
    <!-- Custom csss -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernize jsss -->
    <script src="jsss/modernizr-3.6.0.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<?php
if(( $_SESSION['LOGGEDstudent']) !="true"){
   echo"<script> location.href='loggin.php'  </script>";
}

$_SESSION['timeout'] = time(); 
if (time()-$_SESSION['timeout'] > 600){
   unset($_SESSION['timeout']);
  // echo "<script> location.href='forget.php' <script>";
}
?>
   <script>
$(document).ready(function() {
	$('#state').change(function(){
		var state= $(this).val();
		$("#lga"wink.load("applicantform.php",{state:state, ajax: 'true'});
	});
});
</script> 
    
    
    
    
    
</head>
<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>