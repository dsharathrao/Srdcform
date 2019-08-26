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
 <div id="toplong">
    <br />
<br />
 <form action="Faculty_report.php" method="post" enctype="multipart/form-data" style="border:1px solid #999999; padding:15px 5px;">
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
 </td><td><p>Branch</p></td><td>:</td>
          <td>
    <?php $data = mysql_query("SELECT * FROM branch ORDER BY SNO ASC") 
 or die(mysql_error()); 
  ?>
  <select name="branch" id="branch">
  <option value="0">Select</option>
 <?
 while($info = mysql_fetch_array( $data )) 
 {
  Print "<option value=".$info['branch_id'].">".$info['branch']."</option>";
 } 
 ?>
 </select>
    </td>
    <td> Year </td>
    <td>
    <?php $data = mysql_query("SELECT * FROM year ORDER BY SNO ASC") 
 or die(mysql_error()); 
  ?>
  <select name="year" id="year">
  <option value="0">Select Year</option>
 <?
 while($info = mysql_fetch_array( $data )) 
 {
  Print "<option value=".$info['year_id'].">".$info['year']."</option>";
 } 
 ?>
 </select>
 </td>
        </tr>
       
   </table>
        <center><input type="submit" name=action value="Get Report" /></center>
    </form>
  <br />
<br />
<br />

   
</div>
   
</div>