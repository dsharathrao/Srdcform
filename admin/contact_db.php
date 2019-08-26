<?
include "database.php";
$group_id=$_POST['group_id'];
$group_name=$_POST['group_name'];
$group_status=$_POST['group_status'];


 
$sql="INSERT INTO  `srdcndl`.`groups` (
`group_id` ,
`group_name` ,
`group_status`  
)
VALUES (
'$group_id',  '$group_name',  '$group_status' 
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
<h1><center>The message as been sent Succesfully</center></h1>