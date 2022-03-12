
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
          url:'fetchship.php',
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
          url:'fetchship.php',
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

</script> 