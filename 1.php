<?php
include "connection.php";

$query="SELECT * FROM `studentreg`";
$result1=mysqli_query($conn, $query);
?>
<html>
<head>
</head>
<body>
<select>
<?php while($row1=mysqli_fetch_array($result1)):;?>
<option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>
<?php endwhile; ?>
</select>
</body>
</html>

