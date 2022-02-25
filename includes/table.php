  <?php     
$sql=mysqli_query($connection,"select  faculties.name as facultyname, courseregister.courseRegId as CRId, 
 depts.name  as deptname, level.name as levelname,
semester.name as semestername, course.name as coursename,
course.coursetitle as coursetile, course.creditunit as creditunit, courseregister.*
from  courseregister join faculties on faculties.id= courseregister.faculty 
join depts on depts.id= courseregister.dept join level on level.id=courseregister.level 
join semester on semester.id=courseregister.semester 
join course on course.id=courseregister.course
 where  courseregister.matricno='".$_POST['matricno']."' AND courseregister.examscore !=0 AND courseregister.examscore !=''  AND courseregister.cascore !=0 AND courseregister.cascore !=''
  ");
 //$norow=mysqli_num_rows($sql);
   if(mysqli_num_rows($sql) == 0) {
     $failure = " Nothing to display";
   } else{
  echo '             <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                                <th>COURSE CODE</th>
                                                <th>COURSE TITLE</th>
                                                <th>CREDIT UNIT</th> 
                                                 <th>CA SCORE (30%)</th> 
                                                 <th>EXAM SCORE (70%)</th> 
                                                 <th>TOTAL (100%)</th>
                                                 <th>GRADE</th> 
                                                 <th>GP</th>    
                                        </tr>
                                    </thead>
                                    <tbody>  '; 
   ?>
                                        
 <?php  
 $initalsum= 0;
 $initalgp= 0;      
$sn=0;
while($row=mysqli_fetch_array($sql))
{  
$sn =$sn + 1;     
?>


                                        <tr>
                                            <td><?php echo $sn;?></td>
                                             
                                             <td><?php echo htmlentities($row['coursename']);?></td>
                                              <td><?php echo htmlentities($row['coursetile']);?></td>
                                              <td><?php echo $creditunit=htmlentities($row['creditunit']);?></td> 
                                               <td><?php echo $ca= htmlentities($row['cascore']);?></td> 
                                               <td><?php echo $exam =htmlentities($row['examscore']);?></td> 
                                                <td><?php echo  $total=$exam + $ca; ?></td>
                                               <td><?php echo grade($total);?></td>
                                               <td><?php echo cgpa($total,$creditunit);?></td> 
                                         <?php $finalsum =$row['creditunit'];
                                              $initalsum +=$finalsum;
                                                $initalgp = cgpa($total,$creditunit);
                                                $cgpa +=$initalgp;
                                              ?>            
                                           
                                        </tr>
                                        
                                    
                                      
                                      
<?php 
}
$sn++; 
}?>