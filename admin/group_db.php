<?
include "connection.php";
$group_id=$_POST['group_id'];
$group_name=$_POST['group_name'];
$status=$_POST['status'];


 
$sql="INSERT INTO  `srdcform`.`groups` (
`group_id` ,
`group_name` ,
`status`  
)
VALUES (
'$group_id',  '$group_name',  '$status' 
)";
 if ($conn->query($sql) === TRUE) {
    ?>  <?
header( "refresh:1;url=add_group.php" ); 
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close(); 
?>
<h1><center>Group Added Succesfully</center></h1>