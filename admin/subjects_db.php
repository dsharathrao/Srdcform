<?
include "connection.php";
$subject_id=$_POST['subject_id'];
$subject_name=$_POST['subject_name'];
$group_id=$_POST['group_id'];
$status=$_POST['status'];


 
$sql="INSERT INTO  `srdcform`.`subjects` (
`subject_id` ,
`subject_name` ,
`group_id` ,
`status`  
)
VALUES (
'$subject_id',  '$subject_name',  '$group_id',  '$status' 
)";
 if ($conn->query($sql) === TRUE) {
    ?>  <?
header( "refresh:1;url=add_subject.php" ); 
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close(); 
?>
<h1><center>subject Added Succesfully</center></h1>