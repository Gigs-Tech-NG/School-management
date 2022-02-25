   <script src="jsss/jquery-3.3.1.min.js"></script>
    <!-- Plugins jsss -->
    <script src="jsss/plugins.js"></script>
    <!-- Popper jsss -->
    <script src="jsss/popper.min.js"></script>
    <!-- Bootstrap jsss -->
    <script src="jsss/bootstrap.min.js"></script>
    <!-- Select 2 jsss -->
    <script src="jsss/select2.min.js"></script>
    <!-- Date Picker jsss -->
    <script src="jsss/datepicker.min.js"></script>
    <!-- Scroll Up jsss -->
    <script src="jsss/jquery.scrollUp.min.js"></script>
    <!-- Custom jsss -->
    <script src="jsss/main.js"></script>
    <!-- state and local govt jsss -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="jsss/lga.min.js"></script>
 <script>
$(document).ready(function(){
$('#faculty').on('change',function(){
   $facultyName=$(this).val();
   if($facultyName){
      $.ajax({
          type:'POST',
          url:'fetchData.php',
          data:'faculty='+$facultyName,
          success:function(html){
           console.log(html);
           $('#dept').html(html);
          },
      
      });
   } else{
       $('#dept').html('<option value="">Select faculty first </option>');
   }
});
}); 
</script>
 <script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
    </script>
     

<script>
$(document).ready(function(){
$('#faculty').on('change',function(){
   $facultyName=$(this).val();
   if($facultyName){
      $.ajax({
          type:'POST',
          url:'fetchData.php',
          data:'faculty='+$facultyName,
          success:function(html){
           console.log(html);
           $('#dept').html(html);
          },
      
      });
   } else{
       $('#dept').html('<option value="">Select dept first </option>');
   }
});

$('#dept').on('change',function(){
   $deptName=$(this).val();
   if($deptName){
      $.ajax({
          type:'POST',
          url:'fetchData.php',
          data:'dept='+$deptName,
          success:function(html){
           console.log(html);
           $('#level').html(html);
          },
      
      });
   } else{
       $('#level').html('<option value="">Select programme first </option>');
   }
});

$('#level').on('change',function(){
   $levelName=$(this).val();
   if($levelName){
      $.ajax({
          type:'POST',
          url:'fetchData.php',
          data:'level='+$levelName,
          success:function(html){
           console.log(html);
           $('#semester').html(html);
          },
      
      });
   } else{
       $('#semester').html('<option value="">Select level first </option>');
   }
});

$('#semester').on('change',function(){
   $semesterName=$(this).val();
   if($semesterName){
      $.ajax({
          type:'POST',
          url:'fetchData.php',
          data:'semester='+$semesterName,
          success:function(html){
           console.log(html);
           $('#course').html(html);
          },
      
      });
   } else{
       $('#course').html('<option value="">Select semester first </option>');
   }
});
}); 
</script> 
<?php if($firstname ==""){ 
unset($_SESSION['LOGGEDstudent']);
echo"<script> location.href='index.php'  </script>";
}
?>
<link rel="stylesheet" type="text/css" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css"> 
   <link rel="stylesheet" type="text/css" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker3.min.css"> 
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script> 
</body>
</html>