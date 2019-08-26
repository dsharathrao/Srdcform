  <?php
include 'header1.php';
                                

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
  
 <div id="toplong">
    <br>
<br>

        <form action="report.php" method="post" enctype="multipart/form-data" style="border:1px solid #999999; padding:15px 5px;">
    	<table id="table_border1" style="width:80%"><tr><td><p>Faculty ID</p></td><td>:</td>
        <td>
        <?php $data = mysql_query("SELECT * FROM lectures") 
 or die(mysql_error()); 
  ?>
  <select name="lecture_id" id="lecture_id">
  <option value="0">Select</option>
 <?
 while($info = mysql_fetch_array( $data )) 
 {
  Print "<option value=".$info['lecture_id'].">".$info['lecture_name']."</option>";
 } 
 ?>
 </select>
 </td><td><p>Group</p></td><td>:</td>
          <td>
    <?php $data = mysql_query("SELECT * FROM groups") 
 or die(mysql_error()); 
  ?>
  <select name="groups" id="groups">
  <option value="0">Select</option>
 <?
 while($info = mysql_fetch_array( $data )) 
 {
  Print "<option value=".$info['group_id'].">".$info['group_name']."</option>";
 } 
 ?>
 </select>
    </td>
        </tr>
       
   </table>
        <center><input type="submit" name=action value="Get Report" /></center>
    </form><br>
<br>
<br>



<br />
<strong>Total Feedback Report :</strong> <br />
<br />
<table id="table_border" style="width:750px;">
<tr id="tr_heading"><td style="width:180px">Faculty Name</td><td style="width:180px">Branch</td><td align="center" style="width:100px">A</td><td align="center" style="width:100px">B</td><td align="center" style="width:100px">C</td><td align="center" style="width:100px">D</td><td>No of Students / Total Points</td></tr>
<tr><td> 
    <?php $data = mysql_query("SELECT * FROM form_db where Faculty_id = '$Faculty_id' ") 
 or die(mysql_error()); 
  ?>
 <?
 while($info = mysql_fetch_array( $data )) 
 {
  Print $info['Faculty_name'];
 } 
 ?>

</td>
<td>
<?php $data = mysql_query("SELECT * FROM branch where branch_id = '$branch' ") 
 or die(mysql_error()); 
  ?>
 <?
 while($info = mysql_fetch_array( $data )) 
 {
  Print "All ". $info['branch'];
 } 
 ?>
 </td>
<td><?php 
 if ($totalt == 0)
{ 
$percentageat = 0; }
else
$percentageat = ( $optionat / $totalt ) * 100 ;
echo $optionat. " / " . $percentageat . " %";  ?> </td>
<td><?php  
if ($totalt == 0)
{ 
$percentagebt = 0; }
else
$percentagebt = ( $optionbt / $totalt ) * 100 ;
echo $optionbt. " / " . $percentagebt . " %";  ?> </td>
<td><?php
 if ($totalt == 0)
{ 
$percentagect = 0; }
else
$percentagect = ( $optionct / $totalt ) * 100 ;
echo $optionct. " / " . $percentagect . " %";  ?> </td>
<td><?php  if ($totalt == 0)
{ 
$percentagedt = 0; }
else
$percentagedt = ( $optiondt / $totalt ) * 100 ;
echo $optiondt. " / " . $percentagedt . " %";  ?> </td>
<td><?php echo ($totalt/21)."/".$totalt; ?> </td>
</tr>

   </table>
</div>
<br>
<br>