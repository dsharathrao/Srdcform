<?
include "connection.php";
$cn=mysql_connect("localhost","root","") or die("Could not Connect My Sql");
mysql_select_db("srdcform",$cn)  or die("Could connect to Database");





$year=$_POST['year'];
$semester=$_POST['semester'];
$branch_id=$_POST['branch_id'];
$group=$_POST['group'];
$subject=$_POST['subject'];
$semester=$_POST['semester'];
$lecture=$_POST['lecture'];
$sn01=$_POST['sn01'];
$sn02=$_POST['sn02'];
$sn03=$_POST['sn03'];
$sn04=$_POST['sn04'];
$sn05=$_POST['sn05'];
$sn06=$_POST['sn06'];
$sn07=$_POST['sn07'];
$sn08=$_POST['sn08'];
$sn09=$_POST['sn09'];
$sn10=$_POST['sn10'];
$sn11=$_POST['sn11'];
$sn12=$_POST['sn12'];
$sn13=$_POST['sn13'];
$sn14=$_POST['sn14'];
$sn15=$_POST['sn15'];
$sn16=$_POST['sn16'];
$sn17=$_POST['sn17'];
$sn18=$_POST['sn18'];
$sn19=$_POST['sn19'];
$sn20=$_POST['sn20'];
$sn21=$_POST['sn21'];
 
$sql="INSERT INTO  `srdcform`.`form_db` (


`year` ,
`semester` ,
`branch_id` ,
`group` ,
`subject` ,
`lecture` ,
`sn01` ,
`sn02` ,
`sn03` ,
`sn04` ,
`sn05` ,
`sn06` ,
`sn07` ,
`sn08` ,
`sn09` ,
`sn10` ,
`sn11` ,
`sn12` ,
`sn13` ,
`sn14` ,
`sn15` ,
`sn16` ,
`sn17` ,
`sn18` ,
`sn19` ,
`sn20` ,
`sn21`

)
VALUES (
'$year',  '$semester',   '$branch_id', '$group' , '$subject', '$lecture', '$sn01', '$sn02', '$sn03', '$sn04', '$sn05', '$sn06', '$sn07', '$sn08', '$sn09', '$sn10', '$sn11', '$sn12', '$sn13', '$sn14', '$sn15', '$sn16', '$sn17', '$sn18',  '$sn19',  '$sn20', '$sn21'
)";

 if ($conn->query($sql) === TRUE) {
    ?><?
header( "refresh:1;url=signout.php" ); 
  
  

} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close(); 
?>
<h1><center>Thank you for Feedback</center></h1>