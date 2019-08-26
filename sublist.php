
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
            <hr id="line">
          <h4 style="color: red" align="left">Instructions to fill the questionnaire:</h4>
          <ol style="text-align: left">
            <li>All questions should be compulsorily attempted. </li>
            <li>Each question has five responses, choose the most appropriate one. </li>
            <li>The response to the qualitative question no. 21 is an opportunity to give suggestions or improvements(Kindly restrict your response to teaching learning process only).</li>
          </ol>

          <hr id="line">
          <table border="1" width="90%">
            <tbody><tr style="padding: 5px">
              <th>
                S.No.
              </th>
              <th style="padding: 10px;text-align: center;width: 35%">
                Item
              </th>
              <th style="padding: 10px;text-align: center;" colspan="5">
                Your Response

              </th>
              
            </tr>
            <tr>
              <td>
                <input type="text" name="f_id1" id="f_id1" value="1" size="1" disabled />
              </td>
              <td style="padding: 5px;text-align: left;">
                How much of the syllabus was covered by the teacher? 
              </td>
              <td>
                <input type="radio" name="sn01" id="sn01" value="4" required> 85 to 100% 
              </td>
              <td>
                <input type="radio" name="sn01" id="sn01" value="3"> 70 to 84%
              </td>
              <td>
                <input type="radio" name="sn01" id="sn01" value="2"> 55 to 69% 
              </td>
              <td>
                <input type="radio" name="sn01" id="sn01" value="1"> 30 to 54% 
              </td>
              
              <td>
                <input type="radio" name="sn01" id="sn01" value="0"> Below 30%
              </td>
            </tr>
            <tr>
              <td>
                 <input type="text" name="f_id2" id="f_id2" value="2" size="1" disabled />
              </td>
              <td style="padding: 5px;text-align: left;">
                How well did your teacher prepare for the classes? 
              </td>
              <td>
                <input type="radio" name="sn02" id="sn02" value="4" required> Thoroughly 
              </td>
              <td>
                <input type="radio" name="sn02" id="sn02" value="3"> Satisfactorily 
              </td>
              <td>
                <input type="radio" name="sn02" id="sn02" value="2"> Poorly
              </td>
              <td>
                <input type="radio" name="sn02" id="sn02" value="1"> Indifferently
              </td>
              
              <td>
                <input type="radio" name="sn02" id="sn02" value="0"> Won’t teach at all
              </td>
            </tr>
            <tr>
              <td>
                 <input type="text" name="f_id3" id="f_id3" value="3" size="1" disabled />
              </td>
              <td style="padding: 5px;text-align: left;">
                How well is the teacher able to communicate? 
              </td>
              <td>
                <input type="radio" name="sn03" id="sn03" value="4" required> Always effective 
              </td>
              <td>
                <input type="radio" name="sn03" id="sn03" value="3"> Sometimes effective 
              </td>
              <td>
                <input type="radio" name="sn03" id="sn03" value="2"> Just satisfactorily
              </td>
              <td>
                <input type="radio" name="sn03" id="sn03" value="1"> Generally ineffective
              </td>
              <td>
                <input type="radio" name="sn03" id="sn03" value="0"> Very poor communication
              </td>
            </tr>
            <tr>
              <td>
                 <input type="text" name="f_id4" id="f_id4" value="4" size="1" disabled />
              </td>
              <td style="padding: 5px;text-align: left;">
                The teacher’s approach to teaching can best be described as 
              </td>
              <td>
                <input type="radio" name="sn04" id="sn04" value="4" required> Excellent
              </td>
              <td>
                <input type="radio" name="sn04" id="sn04" value="3"> Very good 
              </td>
              <td>
                <input type="radio" name="sn04" id="sn04" value="2"> Good
              </td>
              <td>
                <input type="radio" name="sn04" id="sn04" value="1"> Fair
              </td>
              
              <td>
                <input type="radio" name="sn04" id="sn04" value="0"> Poor
              </td>
            </tr>
            <tr>
              <td>
                 <input type="text" name="f_id5" id="f_id5" value="5" size="1" disabled />
              </td>
              <td style="padding: 5px;text-align: left;">
                Fairness of the internal evaluation process by the teacher
              </td>
              <td>
                <input type="radio" name="sn05" id="sn05" value="4" required> Always fair
              </td>
              <td>
                <input type="radio" name="sn05" id="sn05" value="3"> Usually fair
              </td>
              <td>
                <input type="radio" name="sn05" id="sn05" value="2"> Sometimes unfair
              </td>
              <td>
                <input type="radio" name="sn05" id="sn05" value="1"> Usually unfair
              </td>
              
              <td>
                <input type="radio" name="sn05" id="sn05" value="0"> Unfair
              </td>
            </tr>
            <tr>
              <td>
                <input type="text" name="f_id6" id="f_id6" value="6" size="1" disabled />
              </td>
              <td style="padding: 5px;text-align: left;">
                 Was your performance in assignments discussed with you?
              </td>
              <td>
                <input type="radio" name="sn06" id="sn06" value="4" required>  Every time

              </td>
              <td>
                <input type="radio" name="sn06" id="sn06" value="3"> Usually
              </td>
              <td>
                <input type="radio" name="sn06" id="sn06" value="2"> Occasionally/Sometimes
              </td>
              <td>
                <input type="radio" name="sn06" id="sn06" value="1"> Rarely
              </td>
              
              <td>
                <input type="radio" name="sn06" id="sn06" value="0"> Never
              </td>
            </tr>
            <tr>
              <td>
                 <input type="text" name="f_id7" id="f_id7" value="7" size="1" disabled />
              </td>
              <td style="padding: 5px;text-align: left;">
                The teacher takes active interest in arranging field visits for students.
              </td>
              <td>
                <input type="radio" name="sn07" id="sn07" value="4" required> Regularly
              </td>
              <td>
                <input type="radio" name="sn07" id="sn07" value="3">Often
              </td>
              <td>
                <input type="radio" name="sn07" id="sn07" value="2">Sometimes
              </td>
              <td> 
                <input type="radio" name="sn07" id="sn07" value="1">Rarely
              </td>
              
              <td>
                <input type="radio" name="sn07" id="sn07" value="0">Never
              </td>
            </tr>
            <tr>
              <td>
                 <input type="text" name="f_id8" id="f_id8" value="8" size="1" disabled />
              </td>
              <td style="padding: 5px;text-align: left;">
                The teaching process in the class room facilitates you in cognitive, social and emotional growth.
              </td>
              <td>
                <input type="radio" name="sn08" id="sn08" value="4" required> Significantly
              </td>
              <td>
                <input type="radio" name="sn08" id="sn08" value="3"> Very well
              </td>
              <td>
                <input type="radio" name="sn08" id="sn08" value="2"> Moderately
              </td>
              <td>
                <input type="radio" name="sn08" id="sn08" value="1"> Marginally
              </td>
              
              <td>
                <input type="radio" name="sn08" id="sn08" value="0"> Not at all
              </td>
            </tr>
            <tr>
              <td>
                 <input type="text" name="f_id9" id="f_id9" value="9" size="1" disabled />
              </td>
              <td style="padding: 5px;text-align: left;">
                The teacher provides multiple opportunities to learn and grow.
              </td>
              <td>
                <input type="radio" name="sn09" id="sn09" value="4" required> Strongly agree
              </td>
              <td>
                <input type="radio" name="sn09" id="sn09" value="3"> Agree
              </td>
              <td>
                <input type="radio" name="sn09" id="sn09" value="2"> Neutral
              </td>
              <td>
                <input type="radio" name="sn09" id="sn09" value="1"> Disagree
              </td>
              
              <td>
                <input type="radio" name="sn09" id="sn09" value="0"> Strongly disagree
              </td>
            </tr>
            <tr>
              <td>
                 <input type="text" name="f_id10" id="f_id10" value="10" size="1" disabled />
              </td>
              <td style="padding: 5px;text-align: left;">
                
                The teacher informs you about your expected competencies, course outcomes and programme outcomes.
              </td>
              <td>
                <input type="radio" name="sn10" id="sn10" value="4" required>  Every time
              </td>
              <td>
                <input type="radio" name="sn10" id="sn10" value="3"> Usually
              </td>
              <td>
                <input type="radio" name="sn10" id="sn10" value="2"> Occasionally/Sometimes
              </td>
              <td>
                <input type="radio" name="sn10" id="sn10" value="1"> Rarely
              </td>
              
              <td>
                <input type="radio" name="sn10" id="sn10" value="0"> Never
              </td>
            </tr>
            <tr>
              <td>
                 <input type="text" name="f_id11" id="f_id11" value="11" size="1" disabled />
              </td>
              <td style="padding: 5px;text-align: left;">
                Your teacher does a necessary follow-up with an assigned task to you.

              </td>
              <td>
                <input type="radio" name="sn11" id="sn11" value="4" required> Every time
              </td>
              <td>
                <input type="radio" name="sn11" id="sn11" value="3"> Usually
              </td>
              <td>
                <input type="radio" name="sn11" id="sn11" value="2"> Occasionally/Sometimes
              </td>
              <td>
                <input type="radio" name="sn11" id="sn11" value="1"> Rarely
              </td>
              
              <td>
                <input type="radio" name="sn11" id="sn11" value="0"> Never
              </td>
            </tr>
            <tr>
              <td>
                 <input type="text" name="f_id12" id="f_id12" value="12" size="1" disabled />
              </td>
              <td style="padding: 5px;text-align: left;">
                The teacher illustrates the concepts through examples and applications.

              </td>
              <td>
                <input type="radio" name="sn12" id="sn12" value="4" required> Every time
              </td>
              <td>
                <input type="radio" name="sn12" id="sn12" value="3"> Usually
              </td>
              <td>
                <input type="radio" name="sn12" id="sn12" value="2"> Occasionally/Sometimes
              </td>
              <td>
                <input type="radio" name="sn12" id="sn12" value="1"> Rarely
              </td>
              
              <td>
                <input type="radio" name="sn12" id="sn12" value="0"> Never
              </td>
            </tr>
            <tr>
              <td>
                 <input type="text" name="f_id13" id="f_id13" value="13" size="1" disabled />
              </td>
              <td style="padding: 5px;text-align: left;">
                The teacher identifies your strengths and encourage you with providing right level of challenges.
              </td>
              <td>
                <input type="radio" name="sn13" id="sn13" value="4" required> Fully
              </td>
              <td>
                <input type="radio" name="sn13" id="sn13" value="3"> Reasonably
              </td>
              <td>
                <input type="radio" name="sn13" id="sn13" value="2"> Partially
              </td>
              <td>
                <input type="radio" name="sn13" id="sn13" value="1"> Slightly
              </td>
              
              <td>
                <input type="radio" name="sn13" id="sn13" value="0"> Unable to
              </td>
            </tr>
            <tr>
              <td>
                 <input type="text" name="f_id14" id="f_id14" value="14" size="1" disabled />
              </td>
              <td style="padding: 5px;text-align: left;">
               Teacher is able to identify your weaknesses and help you to overcome them.
              </td>
              <td>

                <input type="radio" name="sn14" id="sn14" value="4" required> Every time

              </td>
              <td>
                <input type="radio" name="sn14" id="sn14" value="3"> Usually
              </td>
              <td>
                <input type="radio" name="sn14" id="sn14" value="2"> Occasionally/Sometimes
              </td>
              <td>
                <input type="radio" name="sn14" id="sn14" value="1"> Rarely
              </td>
              
              <td>
                <input type="radio" name="sn14" id="sn14" value="0"> Never
              </td>
            </tr>
            <tr>
              <td>
                 <input type="text" name="f_id15" id="f_id15" value="15" size="1" disabled />
              </td>
              <td style="padding: 5px;text-align: left;">
               The teacher makes effort to engage students in the monitoring, review and continuous quality improvement of the teaching learning process.
              </td>
              <td>
                <input type="radio" name="sn15" id="sn15" value="4" required> Strongly agree
              </td>
              <td>
                <input type="radio" name="sn15" id="sn15" value="3"> Agree
              </td>
              <td>
                <input type="radio" name="sn15" id="sn15" value="2"> Neutral
              </td>
              <td>
                <input type="radio" name="sn15" id="sn15" value="1"> Disagree
              </td>
              <td>
                <input type="radio" name="sn15" id="sn15" value="0"> Strongly disagree
              </td>
            </tr>
            <tr>
              <td>
                 <input type="text" name="f_id16" id="f_id16" value="16" size="1" disabled />
              </td>
              <td style="padding: 5px;text-align: left;">
                The teacher uses the student centric methods, such as experiential learning, participative learning and problem solving for enhancing learning experiences.
              </td>
              <td>
                <input type="radio" name="sn16" id="sn16" value="4" required> To a great extent
              </td>
              <td>
                <input type="radio" name="sn16" id="sn16" value="3"> Moderate
              </td>
              <td>
                <input type="radio" name="sn16" id="sn16" value="2"> Some what
              </td>
              <td>
                <input type="radio" name="sn16" id="sn16" value="1">Very little
              </td>
              
              <td>
                <input type="radio" name="sn16" id="sn16" value="0"> Not at all
              </td>
            </tr>
            <tr>
              <td>
                 <input type="text" name="f_id17" id="f_id17" value="17" size="1" disabled />
              </td>
              <td style="padding: 5px;text-align: left;">
                The teacher encourages you to participate in extracurricular activities.
              </td>
              <td>
                <input type="radio" name="sn17" id="sn17" value="4" required> Strongly agree
              </td>
              <td>
                <input type="radio" name="sn17" id="sn17" value="3"> Agree
              </td>
              <td>
                <input type="radio" name="sn17" id="sn17" value="2"> Neutral
              </td>
              <td>
                <input type="radio" name="sn17" id="sn17" value="1"> Disagree
              </td>
              
              <td>
                <input type="radio" name="sn17" id="sn17" value="0"> Strongly disagree
              </td>
            </tr>
            <tr>
              <td>
                 <input type="text" name="f_id18" id="f_id18" value="18" size="1" disabled />
              </td>
              <td style="padding: 5px;text-align: left;">
                Efforts are made by the teacher to inculcate soft skills, life skills and employability skills to make you ready for the world of work.
              </td>
              <td>
                <input type="radio" name="sn18" id="sn18" value="4" required> To a great extent
              </td>
              <td>
                <input type="radio" name="sn18" id="sn18" value="3"> Moderate
              </td>
              <td>
                <input type="radio" name="sn18" id="sn18" value="2"> Some what
              </td>
              <td>
                <input type="radio" name="sn18" id="sn18" value="1"> Very little
              </td>
              
              <td>
                <input type="radio" name="sn18" id="sn18" value="0"> Not at all
              </td>
            </tr>
            <tr>
              <td>
                 <input type="text" name="f_id19" id="f_id19" value="19" size="1" disabled />
              </td>
              <td style="padding: 5px;text-align: left;">
               The teacher uses ICT tools such as LCD projector, Multimedia, etc. while teaching.

              </td>
              <td>
                <input type="radio" name="sn19" id="sn19" value="4" required>Above 90%
              </td>
              <td>
                <input type="radio" name="sn19" id="sn19" value="3">30 – 49%
              </td>
              <td>
                <input type="radio" name="sn19" id="sn19" value="2">70 – 89%
              </td>
              <td>
                <input type="radio" name="sn19" id="sn19" value="1">50 – 69% 
              </td>
              
              <td>
                <input type="radio" name="sn19" id="sn19" value="0"> Below 29% 


              </td>
            </tr>
            <tr>
              <td>
                 <input type="text" name="f_id20" id="f_id20" value="20" size="1" disabled />
              </td>
              <td style="padding: 5px;text-align: left;">
                The overall quality of teaching-learning process in the class is very good.
              </td>
              <td>
                <input type="radio" name="sn20" id="sn20" value="4" required>Strongly agree
              </td>
              <td>
                <input type="radio" name="sn20" id="sn20" value="3"> Agree
              </td>
              <td>
                <input type="radio" name="sn20" id="sn20" value="2"> Neutral
              </td>
              <td>
                <input type="radio" name="sn20" id="sn20" value="1"> Disagree
              </td>
              <td>
                <input type="radio" name="sn20" id="sn20" value="0"> Strongly disagree
              </td>
            </tr>
            <tr><td> <input type="text" name="sn21" id="sn21" value="21" size="1" disabled /></td><td> Give three observations/suggestions to improve the overall teaching – learning experience in the class with reference to the teacher.</td><td colspan="5"><textarea name="sn21" id="sn21" cols="80" class="form-control"></textarea></td></tr>

          </tbody></table>
          
          <br>
          <input type="submit" name="Submit" value="Submit" class="btn btn-primary"></h4>
          <br>
          
        </form>

        </div>
      </div>

            </section></div>
             <div class="col-sm-3 col-xs-12">
            <br>
        
            
          <div class="row clearfix"> </div>
            
        </div

