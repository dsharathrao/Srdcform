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
                <form action="lectures_db.php" method="post" name="lectures">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group"><br>
                            <label for="name">
                                Lecture ID :</label>
                            <input type="text" class="form-control" id="lecture_id" name="lecture_id" placeholder="Enter Lecture ID" required="required" />
                        </div>
						<div class="form-group">
                            <label for="mobile">
                                Lecture Name :</label>
                            <div class="input-group">
                                
                                <input type="text" class="form-control" id="lecture_name" name="lecture_name" placeholder="Enter Lecture Name" required="required" maxlength="100"/></div>
                        </div>
						<div class="form-group">
                            <label for="mobile">
                                Subject ID :</label>
                            <div class="input-group">
                                
                                <input type="text" class="form-control" id="subject_id" name="subject_id" placeholder="Enter Subject ID" required="required" maxlength="10"/></div>
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Lecture Status :</label>
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
<th>Lecture ID</th>
<th>Lecture Name</th>
<th>Subject ID</th>
<th>Status</th>
</tr>
<?php
$conn = mysqli_connect("localhost","root","","srdcform");
if ($conn->connect_error){
die("Connection failed:".$conn-> connect_error);
}
$sql = "SELECT lecture_id, lecture_name, subject_id, status from lectures";
$result=$conn->query($sql);
if($result->num_rows>0){
while ($row=$result->fetch_assoc()) {
echo "<tr><td>".$row["lecture_id"]."</td><td>".$row["lecture_name"]."</td><td>".$row["subject_id"]."</td><td>".$row["status"]."</td></tr>";

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
                    <div class="col-md-3">
                       <br> <form>
					   <font color="red">*Note :</font>
					   <p><strong>Lecture ID :</strong><br>
					   Computer Science : starts from 100<br>
					   Physics : Starts from 200<br>
					   Maths : Starts from 300</p>
					   <p>
					   <strong>Subject ID:</strong>
					   <br>
					   Maths - 1<br>
					   Physics - 2<br>
					   Computer science - 3<br>
					   Electronics - 4<br>
					   Stastics - 5<br>
					   Botany - 6<br>
					   Zoology - 7<br>
					   Chemistry - 8<br>
					  
					 
					   
					   </p>
					   
					   
            </form>
                    </div>
                </div>
                </form>
            </div>
        </div>