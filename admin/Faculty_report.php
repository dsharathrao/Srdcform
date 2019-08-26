                                                                                                                                                                                                                                 
 <?php include "header1.php"; 
//Database Connection
$db_con = mysql_connect('localhost', 'root', '');
$_SESSION['con']=$db_con;
$_SESSION['db_con']=$db_con;
if (!$db_con)
  {
  die('Could not connect:' . mysql_error());
  }

mysql_select_db("srdcform", $db_con);
?>
<br>
<br>
<br>
<br>
<br>
<br>
 <script type="text/javascript">
 function validation()
 {
 var x= document.getElementById("class_id").value;
 if(x==0)
 {
 alert("Please Select Class");
 document.getElementById("class_id").focus();
 return false;
  }
  var y= document.getElementById("lecturer_id").value;
 if(y==0)
 {
 alert("Please Select Faculty");
 document.getElementById("lecturer_id").focus();
 return false;
  }

   var xy= document.getElementById("subject").value;
 if(xy==0)
 {
 alert("Please Select Subject");
 document.getElementById("subject").focus();
 return false;
  }

   var z= document.getElementById("year").value;
 if(z==0)
 {
 alert("Please Select Year");
 document.getElementById("year").focus();
 return false;
  }


var inc;
for (inc = 1; inc < 22; inc++) {
var feedback_pointa = "student_fba"+inc;
var feedback_pointb = "student_fbb"+inc;
var feedback_pointc = "student_fbc"+inc;
var feedback_pointd = "student_fbd"+inc;
//alert (feedback_point);
var feed_alerta = document.getElementById(feedback_pointa).checked;
var feed_alertb = document.getElementById(feedback_pointb).checked;
var feed_alertc = document.getElementById(feedback_pointc).checked;
var feed_alertd = document.getElementById(feedback_pointd).checked;


if ((feed_alerta == false && feed_alertb == false && feed_alertc == false && feed_alertd == false))
{
var alertf = "Please Select feedback option"+inc;
     alert(alertf);
     return false;

    }
  }
  
 }
 </script>
  <div id="toplong">
  
  
  	
	<?php
	 $Faculty_id= $_POST['lecture_id'];
	 $year= $_POST['year']; 
      $branch= $_POST['branch'];
      ?>
<table id="table_border"  style="width:100%;"><tr><td>Name of the Faculty</td><td>:</td><td>
<? 
$data = mysql_query("SELECT lecture_name FROM lectures where lectures = '$lecture_id'") 
 or die(mysql_error()); 
  ?>
 <?
 $i=1;
 while($info = mysql_fetch_array( $data )) 
 {
 echo $info['Faculty_name'];
}
?>
</td><td> Branch </td><td>:</td><td>
<? 
$data = mysql_query("SELECT branch FROM branch where branch_id = '$branch'") 
 or die(mysql_error()); 
  ?>
 <?
 $i=1;
 while($info = mysql_fetch_array( $data )) 
 {
 echo $info['branch'];
}
?>
</td>
<td>Year</td><td>:</td><td>
<? 
if($year!=0)
{
$data = mysql_query("SELECT year FROM year where year_id = '$year'") 
 or die(mysql_error()); 
  ?>
 <?
 $i=1;
 while($info = mysql_fetch_array( $data )) 
 {
 echo $info['year'];
}
}
else
echo "All";
?>
</td>
  </tr></table> <br />
<br />



   <table id="table_border" style="width:100%;">
  <tr id="tr_heading" style="text-align:center"><td>S.No</td><td>Perticulars</td><td>A</td><td>B</td><td>C</td><td>D</td><td>Score</td></tr> 
  <?php
  
 $data = mysql_query("SELECT * FROM feedbackpoints ORDER BY SNO ASC") 
 or die(mysql_error()); 
  ?>
 <?
 $i=1;
 $total_score=0;
 while($info = mysql_fetch_array( $data )) 
 {
 $snoi= $info['SNo'];
  Print "<tr>"; 
 Print "<td align='center'>".$info['SNo'] ."<input type='hidden' name='f_id' id='f_id' value=".$info['SNo']."></td>"; 
 Print "<td>".$info['Feedback_Point'] . "</td>";
if($year!=0)
{

$data1 = mysql_query("SELECT * FROM `feeback_table` WHERE `class_id` LIKE '$branch' AND `lecturer_id` LIKE '$Faculty_id' AND `year` = '$year' AND `f_id` = '$snoi' AND `student_fb_option` LIKE 'A'")
 or die(mysql_error()); 
 $count= count($data1);
 while($data2 = mysql_fetch_array( $data1 )) 
 {
$count= $count+1;
 }
 $optiona= $count-1; 
 
 $data1 = mysql_query("SELECT * FROM `feeback_table` WHERE `class_id` LIKE '$branch' AND `lecturer_id` LIKE '$Faculty_id' AND `year` = '$year' AND `f_id` = '$snoi' AND `student_fb_option` LIKE 'B'")
 or die(mysql_error()); 
 $count= count($data1);
 while($data2 = mysql_fetch_array( $data1 )) 
 {
$count= $count+1;
 }
 $optionb= $count-1; 
 
 $data1 = mysql_query("SELECT * FROM `feeback_table` WHERE `class_id` LIKE '$branch' AND `lecturer_id` LIKE '$Faculty_id' AND `year` = '$year' AND `f_id` = '$snoi' AND `student_fb_option` LIKE 'C'")
 or die(mysql_error()); 
 $count= count($data1);
 while($data2 = mysql_fetch_array( $data1 )) 
 {
$count= $count+1;
 }
 $optionc= $count-1; 
 
 $data1 = mysql_query("SELECT * FROM `feeback_table` WHERE `class_id` LIKE '$branch' AND `lecturer_id` LIKE '$Faculty_id' AND `year` = '$year' AND `f_id` = '$snoi' AND `student_fb_option` LIKE 'D'")
 or die(mysql_error()); 
 $count= count($data1);
 while($data2 = mysql_fetch_array( $data1 )) 
 {
$count= $count+1;
 }
 $optiond= $count-1; 
}
else
{

$data1 = mysql_query("SELECT * FROM `feeback_table` WHERE `class_id` LIKE '$branch' AND `lecturer_id` LIKE '$Faculty_id' AND `f_id` = '$snoi' AND `student_fb_option` LIKE 'A'")
 or die(mysql_error()); 
 $count= count($data1);
 while($data2 = mysql_fetch_array( $data1 )) 
 {
$count= $count+1;
 }
 $optiona= $count-1; 
 
 $data1 = mysql_query("SELECT * FROM `feeback_table` WHERE `class_id` LIKE '$branch' AND `lecturer_id` LIKE '$Faculty_id' AND `f_id` = '$snoi' AND `student_fb_option` LIKE 'B'")
 or die(mysql_error()); 
 $count= count($data1);
 while($data2 = mysql_fetch_array( $data1 )) 
 {
$count= $count+1;
 }
 $optionb= $count-1; 
 
 $data1 = mysql_query("SELECT * FROM `feeback_table` WHERE `class_id` LIKE '$branch' AND `lecturer_id` LIKE '$Faculty_id' AND `f_id` = '$snoi' AND `student_fb_option` LIKE 'C'")
 or die(mysql_error()); 
 $count= count($data1);
 while($data2 = mysql_fetch_array( $data1 )) 
 {
$count= $count+1;
 }
 $optionc= $count-1; 
 
 $data1 = mysql_query("SELECT * FROM `feeback_table` WHERE `class_id` LIKE '$branch' AND `lecturer_id` LIKE '$Faculty_id' AND `f_id` = '$snoi' AND `student_fb_option` LIKE 'D'")
 or die(mysql_error()); 
 $count= count($data1);
 while($data2 = mysql_fetch_array( $data1 )) 
 {
$count= $count+1;
 }
 $optiond= $count-1; 
}

 
 Print "<td>$optiona</td>";
 Print "<td>$optionb</td>";
 Print "<td>$optionc</td>";
 Print "<td>$optiond</td>";
 Print "<td>";
 
  $max_f = max($optiona, $optionb, $optionc, $optiond);
 if($max_f==0)
 {
  echo "0";
$total_score= $total_score+0;
}
else if($max_f==$optiona)
{
 echo "4";
  $total_score= $total_score+4;
 }
 else if($max_f==$optionb)
 {
 echo "3";
 $total_score= $total_score+3;
 }
 else if($max_f==$optionc)
 {
 $total_score= $total_score+2;
 echo "2";
 }
 else if($max_f==$optiond)
 {
 echo "1";
$total_score= $total_score+1;
}
 Print "</td>";
 Print "</tr>"; 
  $i=$i+1;
  } 

 ?>
 
 <tr><td colspan="6" align="right"><b>Total Score</b></td><td><b><? echo $total_score; ?><b></td></tr>
 
  </table><br />
<center><a href="http://gdcsrisailam.org/feedback/get_re.php"><input type="submit" value="Back" /></a></center><br />
<br />

 
 </div>
 <?php include "footer.php"; ?>
                            
                            
                            
                            
                            
                            
                            