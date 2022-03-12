  <script type="text/javascript" language="javascript" >
$(document).ready(function(){
 
 function fetch_student_data(query)
 {
  $.ajax({
   url:"fetchcourses.php",
   method:"POST",
    data:{query:query},
   dataType:"json",
   success:function(data)
   {
    for(var count=0; count<data.length; count++)
    {
     var html_data = '<tr><td>'+data[count].id+'</td>';
     html_data += '<td data-name="name" class="name" data-type="text" data-pk="'+data[count].id+'">'+data[count].name+'</td>';
     html_data += '<td data-name="coursetitle" class="coursetitle" data-type="text" data-pk="'+data[count].id+'">'+data[count].coursetitle+'</td>';
     html_data += '<td data-name="creditunit" class="creditunit" data-type="text" data-pk="'+data[count].id+'">'+data[count].creditunit+'</td>';
    
     $('#student_data').append(html_data);
    }
   }
  })
 }
 
 fetch_student_data();
 
 $('#student_data').editable({
  container: 'body',
  selector: 'td.name',
  url: "updatecourse.php",
  title: 'COURSE CODE',
  type: "POST",
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 
 $('#student_data').editable({
  container: 'body',
  selector: 'td.coursetitle',
  url: "updatecourse.php",
  title: 'COURSE TITLE',
  type: "POST",
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 
 $('#student_data').editable({
  container: 'body',
  selector: 'td.creditunit',
  url: "updatecourse.php",
  title: 'CREDIT UNIT',
  type: "POST",
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 
  $('#student_data').editable({  //newlly added
  container: 'body',
  selector: 'td.lectureday1',
  url: "updatecourse.php",
  title: 'TIME TABLE (1)',
  type: "POST",
  datatype: 'json',
  source:[{value:"Monday 9:00AM - 11:AM" , text:"Monday 9:00AM - 11:AM"},{value:"Monday 11:00AM - 1:00PM" , text:"Monday 11:00AM - 1:00PM"},{value:"Monday 1:30PM - 3:30PM" , text:"Monday 1:30PM - 3:30PM"},
  {value:"Tuesday 9:00AM - 11:AM" , text:"Tuesday 9:00AM - 11:AM"},{value:"Tuesday 11:00AM - 1:00PM" , text:"Tuesday 11:00AM - 1:00PM"},{value:"Tuesday 1:30PM - 3:30PM" , text:"Tuesday 1:30PM - 3:30PM"},
  {value:"Wednesday 9:00AM - 11:AM" , text:"Wednesday 9:00AM - 11:AM"},{value:"Wednesday 11:00AM - 1:00PM" , text:"Wednesday 11:00AM - 1:00PM"},{value:"Wednesday 1:30PM - 3:30PM" , text:"Wednesday 1:30PM - 3:30PM"},
  {value:"Thursday 9:00AM - 11:AM" , text:"Thursday 9:00AM - 11:AM"},{value:"Thursday 11:00AM - 1:00PM" , text:"Thursday 11:00AM - 1:00PM"},{value:"Thursday 1:30PM - 3:30PM" , text:"Thursday 1:30PM - 3:30PM"},
  {value:"Friday 9:00AM - 11:AM" , text:"Friday 9:00AM - 11:AM"},{value:"Friday 11:00AM - 1:00PM" , text:"Friday 11:00AM - 1:00PM"},{value:"Friday 1:30PM - 3:30PM" , text:"Friday 1:30PM - 3:30PM"},{value:" " , text:" "}],
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 
  $('#student_data').editable({  //newlly added
  container: 'body',
  selector: 'td.lectureday2',
  url: "updatecourse.php",
  title: 'TIME TABLE (2)',
  type: "POST",
  datatype: 'json',
  source:[{value:"Monday 9:00AM - 11:AM" , text:"Monday 9:00AM - 11:AM"},{value:"Monday 11:00AM - 1:00PM" , text:"Monday 11:00AM - 1:00PM"},{value:"Monday 1:30PM - 3:30PM" , text:"Monday 1:30PM - 3:30PM"},
  {value:"Tuesday 9:00AM - 11:AM" , text:"Tuesday 9:00AM - 11:AM"},{value:"Tuesday 11:00AM - 1:00PM" , text:"Tuesday 11:00AM - 1:00PM"},{value:"Tuesday 1:30PM - 3:30PM" , text:"Tuesday 1:30PM - 3:30PM"},
  {value:"Wednesday 9:00AM - 11:AM" , text:"Wednesday 9:00AM - 11:AM"},{value:"Wednesday 11:00AM - 1:00PM" , text:"Wednesday 11:00AM - 1:00PM"},{value:"Wednesday 1:30PM - 3:30PM" , text:"Wednesday 1:30PM - 3:30PM"},
  {value:"Thursday 9:00AM - 11:AM" , text:"Thursday 9:00AM - 11:AM"},{value:"Thursday 11:00AM - 1:00PM" , text:"Thursday 11:00AM - 1:00PM"},{value:"Thursday 1:30PM - 3:30PM" , text:"Thursday 1:30PM - 3:30PM"},
  {value:"Friday 9:00AM - 11:AM" , text:"Friday 9:00AM - 11:AM"},{value:"Friday 11:00AM - 1:00PM" , text:"Friday 11:00AM - 1:00PM"},{value:"Friday 1:30PM - 3:30PM" , text:"Friday 1:30PM - 3:30PM"},
  {value:" " , text:" "}],
  validate: function(value){
 
  }
 });
 
 $('#student_data').editable({
  container: 'body',
  selector: 'td.matricno',
  url: "updatestudents.php",
  title: 'Matric No',
  type: "POST",
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 
 $('#student_data').editable({
  container: 'body',
  selector: 'td.faculty',
  url: "updatestudents.php",
  title: 'Faculty',
  type: "POST",
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 $('#student_data').editable({
  container: 'body',
  selector: 'td.dept',
  url: "updatestudents.php",
  title: 'DEPT',
  type: "POST",
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
   
  }
 });
 $('#student_data').editable({
  container: 'body',
  selector: 'td.level',
  url: "updatestudents.php",
  title: 'level',
  type: "POST",
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
    var expression = /^[0-9]+$/;
   if(!expression.test(value))
   {
    return 'Numbers only !';
   }
  }
 });
 $('#student_data').editable({
  container: 'body',
  selector: 'td.discipline',
  url: "updatestudents.php",
  title: 'Discipline',
  type: "POST",
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 $('#student_data').editable({
  container: 'body',
  selector: 'td.emai',
  url: "updatestudents.php", 
  title: 'Email',
  type: "POST",
  //dataType: 'json',   
   validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }

 
   
 });$('#student_data').editable({
  container: 'body',
  selector: 'td.phon',
  url: "updatestudents.php",
  title: 'phone No',
  type: "POST",
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
    var expression = /^[0-9]+$/;
   if(!expression.test(value))
   {
    return 'Numbers only!';
   }
  }
 });$('#student_data').editable({
  container: 'body',
  selector: 'td.stdaddress',
  url: "updatestudents.php",
  title: 'Address',
  type: "POST",
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });$('#student_data').editable({
  container: 'body',
  selector: 'td.state',
  url: "updatestudents.php",
  title: 'state',
  type: "POST",
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });$('#student_data').editable({
  container: 'body',
  selector: 'td.lga',
  url: "updatestudents.php",
  title: 'LGA',
  type: "POST",
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 
 $('#student_data').editable({   // need this
  container: 'body',
  selector: 'td.gender',
  url: "updatestudents.php",
  title: 'Gender',
  type: "POST",
  dataType: 'json',
  source: [{value: "Male", text: "Male"}, {value: "Female", text: "Female"}],
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 
 $('#student_data').editable({
  container: 'body',
  selector: 'td.dob',
  url: "updatestudents.php",
  title: 'Date Of Birth',
  type: "POST",
  dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 
 $('#student_data').editable({
  container: 'body',
  selector: 'td.religion',
  url: "updatestudents.php",
  title: 'Religion',
  type: "POST",
  dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 $('#student_data').editable({
  container: 'body',
  selector: 'td.maritalstatus',
  url: "updatestudents.php",
  title: 'Marital Status',
  type: "POST",
  dataType: 'json',
   source: [{value: "Single", text: "Single"}, {value: "Married", text: "Married"},{value: "Divorsed", text: "Divorsed"}],
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 $('#student_data').editable({
  container: 'body',
  selector: 'td.nokname',
  url: "updatestudents.php",
  title: 'Next Of King Name',
  type: "POST",
  dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 
 $('#student_data').editable({
  container: 'body',
  selector: 'td.nokphon',
  url: "updatestudents.php",
  title: 'Next of King Phone',
  type: "POST",
  dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }         
   var expression = /^[0-9]+$/;
   if(!expression.test(value))
   {
    return 'Numbers only!';
   }
  }
 });
 
 $('#student_data').editable({
  container: 'body',
  selector: 'td.nokaddress',
  url: "updatestudents.php",
  title: 'Next Of King Address',
  type: "POST",
  dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 
});
</script>