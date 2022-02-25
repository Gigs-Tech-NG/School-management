	<?php
    
			  include "config.php";
               
      // echo $_SESSION['semester'];
      

			  $snh=0;
			  $snh =$snh + 1; 
             
			$query= mysqli_query($connection,"SELECT * FROM courseregister WHERE course='". $_SESSION['course']."' AND session='". $_SESSION['session']."' AND  faculty='". $_SESSION['faculty']."' AND dept='". $_SESSION['dept']."' AND level='".$_SESSION['level']."' 
          ");
          // if($semsteID == "FIRST TERM"){
			while($row=mysqli_fetch_array($query)){
	$fllname=$row['fullname'];
    $_SESSION['fllname']=$fllname;
	$matricn=$row['matricno'];
    $_SESSION['matricno']=$matricn;
   // $_SESSION['semester'] 
  
	$cascres=$row['cascore'];
	$exam=$row['examscore'];
    	$second_resusult_text=$row['second_resusult_text'];
	$second_resusult_exam=$row['second_resusult_exam'];
    	$third_resusult_text=$row['third_resusult_text'];
	$third_resusult_exam=$row['third_resusult_exam'];
	$cdr=$row['courseRegId'];
	$course=$row['course'];
     
  		?>
			<tr>
            <td><input type="hidden" style="border:none;" name="scor[]" class="case" value="<?php echo $cdr ; ?>">
				
				</td>
				<td>
					<?php echo $snh++ ;?>
				</td>
                
				<td>
				<?php echo $matricn ;?>
				</td>
               
                 <td>
               <?php echo $fllname ;?>
                </td>
            <?php
           
             if($_SESSION['semester'] == "FIRST TERM"){
               $firt='<td><input type="text"style="border:none;"  name="catext[]" value="'. $row['cascore'] .'"></td>';
               
               }
               elseif($_SESSION['semester'] == "SECOND TERM"){
                 $firt='<td><input type="text"style="border:none;"  name="catext[]" value="'. $row['second_resusult_text'] .'"></td>';
                }
                 elseif($_SESSION['semester'] == "THIRD TERM"){
                 $firt='<td><input type="text"style="border:none;"  name="catext[]" value="'. $row['third_resusult_text'] .'"></td>';
                }
              echo $firt ;
            
              ?>
                </td>
                  <?php
           
             if($_SESSION['semester'] == "FIRST TERM"){
               $firt='<td><input type="text"style="border:none;"  name="examscr[]" value="'. $row['examscore'] .'"></td>';
               
               }
               elseif($_SESSION['semester'] == "SECOND TERM"){
                 $firt='<td><input type="text"style="border:none;"  name="examscr[]" value="'. $row['second_resusult_exam'] .'"></td>';
                }
                 elseif($_SESSION['semester'] == "THIRD TERM"){
                 $firt='<td><input type="text"style="border:none;"  name="examscr[]" value="'. $row['third_resusult_exam'] .'"></td>';
                }
              echo $firt ;
            
              ?>
               
                
                
                <td>RECORDS<!--<a href="inptscore.php?score=<?php //echo $cdr;?>">EDIT </a-->
                
                </td>
			</tr>
			</tr>
            
			<?php
			}
			?>
		</table>
        </form>
	</div>
	</div>
	</div>
</body>
<br />
<br />
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
<link rel="stylesheet" type="text/css" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css"> 
   <link rel="stylesheet" type="text/css" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker3.min.css"> 
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script> 