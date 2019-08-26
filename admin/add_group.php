<?php
include 'header1.php';


?>


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
                <form action="group_db.php" method="post" name="groups">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group"><br>
                            <label for="name">
                                Group ID :</label>
                            <input type="text" class="form-control" id="group_id" name="group_id" placeholder="Enter Group ID" required="required" />
                        </div>
						<div class="form-group">
                            <label for="mobile">
                                Group Name :</label>
                            <div class="input-group">
                                
                                <input type="text" class="form-control" id="group_name" name="group_name" placeholder="Enter Group Name" required="required" maxlength="10"/></div>
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Group Status :</label>
                            <div class="input-group">
                                
                                <input type="text" class="form-control" id="status" name="status" placeholder="Should be Enter 1" required="required" /></div>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
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
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Submit</button>
                    </div>
                </div>
                </form>
            </div>
        </div>