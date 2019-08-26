<?php

$conn = new mysqli('localhost', 'root', '', 'srdcform');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$course_id = mysql_real_escape_string($_POST['course_id']);
if($course_id!='')
{
	$groups_result = $conn->query('select * from groups where course_id='.$course_id.'');
	$options = "<option value=''>Select group</option>";
	while($row = $groups_result->fetch_assoc()) {
	$options .= "<option value='".$row['id']."'>".$row['group']."</option>";
	}
	echo $options;
}

?>