<?php
include 'header1.php';


?>

<style>
<style>
table{
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th{
background-color: #588c7e;
color:white;
}
tr:nth-child(even){background-color:#f2f2f2;}
</style>
	
<div class="container">
    <div class="row">
	
        <div class="col-md-12">
            <div class="well well-sm">
                <form action="subjects_db.php" method="post" name="subjects">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group"><br>
                            <label for="name">
                                Subject ID :</label>
                            <input type="text" class="form-control" id="subject_id" name="subject_id" placeholder="Enter Subject ID" required="required" />
                        </div>
						<div class="form-group">
                            <label for="mobile">
                               Subject Name :</label>
                            <div class="input-group">
                                
                                <input type="text" class="form-control" id="subject_name" name="subject_name" placeholder="Enter subject Name" required="required" maxlength="100"/></div>
                        </div>
						<div class="form-group">
                            <label for="mobile">
                                Group ID :</label>
                            <div class="input-group">
                                
                                <input type="text" class="form-control" id="group_id" name="group_id" placeholder="Enter Group ID" required="required" maxlength="10"/></div>
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Subject Status :</label>
                            <div class="input-group">
                                
                                <input type="text" class="form-control" id="status" name="status" placeholder="Should be Enter 1" required="required" /></div>
                        </div>
                         <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Submit</button>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group"><br>
                           <table>
<tr>
<th>Subject ID</th>
<th>Subject Name</th>
<th>Group ID</th>
<th>Status</th>
</tr>
<?php
$conn = mysqli_connect("localhost","root","","srdcform");
if ($conn->connect_error){
die("Connection failed:".$conn-> connect_error);
}
$sql = "SELECT subject_id, subject_name, group_id, status from subjects";
$result=$conn->query($sql);
if($result->num_rows>0){
while ($row=$result->fetch_assoc()) {
echo "<tr><td>".$row["subject_id"]."</td><td>".$row["subject_name"]."</td><td>".$row["group_id"]."</td><td>".$row["status"]."</td></tr>";

}
echo "</table>";
}
else {
echo "0 result";
}

$conn->close();
?>
</table>
                        </div>
                    </div>
					 <div class="col-md-4">
                        <div class="form-group"><br>
                           <table>
<tr>
<th>Group ID</th>
<th>Group Name</th>
<th>Status</th>
</tr>
<?php
$conn = mysqli_connect("localhost","root","","srdcform");
if ($conn->connect_error){
die("Connection failed:".$conn-> connect_error);
}
$sql = "SELECT group_id, group_name, status from groups";
$result=$conn->query($sql);
if($result->num_rows>0){
while ($row=$result->fetch_assoc()) {
echo "<tr><td>".$row["group_id"]."</td><td>".$row["group_name"]."</td><td>".$row["status"]."</td></tr>";

}
echo "</table>";
}
else {
echo "0 result";
}

$conn->close();
?>
</table>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>