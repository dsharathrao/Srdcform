<?php
$connect = mysqli_connect("localhost", "root", "", "srdcform");

$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM srdc_user
	WHERE login LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM srdc_user ORDER BY login";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Sno</th>
							<th>Login</th>
							<th>Password</th>
							</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["user_id"].'</td>
				<td>'.$row["login"].'</td>
				<td>'.$row["pass"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>