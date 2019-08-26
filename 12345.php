
<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Survey</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css.css">
<link type="text/css" rel="stylesheet" href="style.css"/>    
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
    <script src="jquery.min.js"></script>
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"} 
</style>
</head>
<body>
<?php
include("header.php");
include("database.php");
?>


<center><h2 style='color:green; font-weight:bold; font-size:26px;'>Online Student Satisfaction Survey</h2> <br>
  
    <section class="welcome-section">

            <div class="col-sm-12 col-xs-12" align="center">      

                <div class="col-md-12 grid1 ">
          <h4> Student Satisfaction  <span class="design1"> Survey </span></h4>
          <p align="left">Name of the College:  <strong>Sri Ramakrishna(Autonomos) Degree College</strong> </p>
          <p align="left">Place:  Nandyal </p>
          <p align="left">AISHE CODE: </p>

          <hr id="line">
          <form action="form_db.php" method="post" enctype="multipart/form-data">
          
		
    <script type="text/javascript">
$(document).ready(function(){
    $('#group').on('change',function(){
        var groupID = $(this).val();
        if(groupID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'group_id='+groupID,
                success:function(html){
                    $('#subject').html(html);
                    $('#lecture').html('<option value="">Select subject first</option>'); 
                }
            }); 
        }else{
            $('#subject').html('<option value="">Select group first</option>');
            $('#lecture').html('<option value="">Select subject first</option>'); 
        }
    });
    
    $('#subject').on('change',function(){
        var subjectID = $(this).val();
        if(subjectID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'subject_id='+subjectID,
                success:function(html){
                    $('#lecture').html(html);
                }
            }); 
        }else{
            $('#lecture').html('<option value="">Select subject first</option>'); 
        }
    });
});
</script>
<body>


	 <table width="90%">
            <tbody><tr style="padding: 10px">
			
			
<td>
               <font color="green">year :</font>
              </td>
 <?php $data = mysql_query("SELECT * FROM year ORDER BY SNO ASC") 
 or die(mysql_error()); 
  ?>
  <td>
  <select name="year" id="year" class="form-control" required>
  <option value="">Select Year</option>
 <?
 while($info = mysql_fetch_array( $data )) 
 {
  Print "<option value=".$info['year_id'].">".$info['year']."</option>";
 } 
 ?>
 </td>
 
<td>
               <font color="green">Semester :</font>
              </td>
 <?php $data = mysql_query("SELECT * FROM semester ORDER BY SNO ASC") 
 or die(mysql_error()); 
  ?>
  <td>
  <select name="semester" id="semester" class="form-control" required>
  <option value="">Select Semester</option>
 <?
 while($info = mysql_fetch_array( $data )) 
 {
  Print "<option value=".$info['semester_id'].">".$info['semester']."</option>";
 } 
 ?>
 </td>
 <td>
               <font color="green">Department :</font>
              </td>
	<?php $data = mysql_query("SELECT * FROM branch ORDER BY SNO ASC") 
 or die(mysql_error()); 
  ?>
  <td>
  <select name="branch_id" id="branch_id" class="form-control" required>
  <option value="">Select Department</option>
 <?
 while($info = mysql_fetch_array( $data )) 
 {
  Print "<option value=".$info['branch_id'].">".$info['branch']."</option>";
 } 
 ?>
 </select>
</td>
 </tr>
 </select>
 </tbody>
	</table>

		  <table width="90%">
            <tbody><tr style="padding: 10px">
			<td>
               <font color="green">Group :</font>
              </td>
			<td>
    <?php
    //Include database configuration file
    include('dbConfig.php');
    
    //Get all group data
    $query = $db->query("SELECT * FROM groups WHERE status = 1 ORDER BY group_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    ?>
    <select name="group" id="group" class="form-control" >
        <option value="">Select group</option>
        <?php
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
                echo '<option value="'.$row['group_id'].'">'.$row['group_name'].'</option>';
            }
        }else{
            echo '<option value="">group not available</option>';
        }
        ?>
    </select>
	</td>
	<td>
              <font color="green">Subject :</font>
              </td>
	<td>
    <select name="subject" id="subject" class="form-control">
        <option value="">Select group first</option>
    </select>
	</td>
    <td>
              <font color="green">lecture Name :</font>
              </td>
	<td>
    <select name="lecture" id="lecture" class="form-control">
        <option value="">Select subject first</option>
    </select>
	</td>
	</tr>
	</tbody>
	</table>
      </div>
    </div>
  </div>
</div>