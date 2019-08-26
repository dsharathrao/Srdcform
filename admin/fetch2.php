<?php
$connect = mysqli_connect("localhost", "root", "", "srdcform");

$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM form_db
	WHERE lecture LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM form_db";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div>
					<table class="table table-striped table-bordered">
					 <thead>
						<tr>
							 <th>year</th>
									<th>semester</th>
									<th>branch_id</th>
									<th>group</th>
									<th>subject</th>
									<th>lecture</th>
                                    <th>sno1</th>
                                    <th>sn02</th>
                                    <th>sn03</th>
                                    <th>sn04</th>
									<th>sn05</th>
									<th>sn06</th>
									<th>sn07</th>
									<th>sn08</th>
									<th>sn09</th>
									<th>sn10</th>
									<th>sn11</th>
									<th>sn12</th>
									<th>sn13</th>
									<th>sn14</th>
									<th>sn15</th>
									<th>sn16</th>
									<th>sn17</th>
									<th>sn18</th>
									<th>sn19</th>
									<th>sn20</th>
									<th>sn21</th>
									<th>total</th>
							</tr>
							</thead>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["year"].'</td>
				<td>'.$row["semester"].'</td>
				<td>'.$row["branch_id"].'</td>
				<td>'.$row["group"].'</td>
				<td>'.$row["subject"].'</td>
				<td>'.$row["lecture"].'</td>
				<td>'.$row["sn01"].'</td>
				<td>'.$row["sn02"].'</td>
				<td>'.$row["sn03"].'</td>
				<td>'.$row["sn04"].'</td>
				<td>'.$row["sn05"].'</td>
				<td>'.$row["sn06"].'</td>
				<td>'.$row["sn07"].'</td>
				<td>'.$row["sn08"].'</td>
				<td>'.$row["sn09"].'</td>
				<td>'.$row["sn10"].'</td>
				<td>'.$row["sn11"].'</td>
				<td>'.$row["sn12"].'</td>
				<td>'.$row["sn13"].'</td>
				<td>'.$row["sn14"].'</td>
				<td>'.$row["sn15"].'</td>
				<td>'.$row["sn16"].'</td>
				<td>'.$row["sn17"].'</td>
				<td>'.$row["sn18"].'</td>
				<td>'.$row["sn19"].'</td>
				<td>'.$row["sn20"].'</td>
				<td>'.$row["sn21"].'</td>
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