<?php
$conn = new mysqli('localhost', 'root', '', 'srdcform');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$course_result = $conn->query('select * from courses');
?>
<span class="style2">Select your Course :</span>
<select name="course" id="courses-list">
		<option value="">Select course</option>
		<?php
		if ($course_result->num_rows > 0) {
    // output data of each row
    while($row = $course_result->fetch_assoc()) {
    	?>
        <option value="<?php echo $row["id"]; ?>"><?php echo $row["course_name"]; ?></option>
        <?php
    }
}
?>
		</select>
</br><br><span class="style2">Select your Group :</span>
		<select name="group" id="groups-list">
			<option value=''>Select group</option>
		</select>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script>
$('#courses-list').on('change', function(){
    var course_id = this.value;
    $.ajax({
	type: "POST",
	url: "get_groups.php",
	data:'course_id='+course_id,
	success: function(result){
		$("#groups-list").html(result);
	}
	});
});
</script>