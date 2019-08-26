<?
include "connection.php";
$lecture_id=$_POST['lecture_id'];
$lecture_name=$_POST['lecture_name'];
$subject_id=$_POST['subject_id'];
$status=$_POST['status'];


 
$sql="INSERT INTO  `srdcform`.`lectures` (
`lecture_id` ,
`lecture_name` ,
`subject_id` ,
`status`  
)
VALUES (
'$lecture_id',  '$lecture_name',  '$subject_id',  '$status' 
)";
 if ($conn->query($sql) === TRUE) {
    ?>  <?
header( "refresh:1;url=add_lecture.php" ); 
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close(); 
?>
<h1><center>Lecture Added Succesfully</center></h1>