<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css.css">
<link type="text/css" rel="stylesheet" href="style.css"/>    
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
    <script src="jquery.min.js"></script>
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"} 
</style>
    <script type="text/javascript">
$(document).ready(function(){
    $('#group').on('change',function(){
        var groupID = $(this).val();
        if(groupID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'group_id='+groupID,
                success:function(html){
                    $('#subject').html(html);
                    $('#lecture').html('<option value="">Select subject first</option>'); 
                }
            }); 
        }else{
            $('#subject').html('<option value="">Select group first</option>');
            $('#lecture').html('<option value="">Select subject first</option>'); 
        }
    });
    
    $('#subject').on('change',function(){
        var subjectID = $(this).val();
        if(subjectID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'subject_id='+subjectID,
                success:function(html){
                    $('#lecture').html(html);
                }
            }); 
        }else{
            $('#lecture').html('<option value="">Select subject first</option>'); 
        }
    });
});
</script>
<body>
		  <table width="90%">
            <tbody><tr style="padding: 10px">
			<td>
               <font color="green">Group :</font>
              </td>
			<td>
    <?php
    //Include database configuration file
    include('dbConfig.php');
    
    //Get all group data
    $query = $db->query("SELECT * FROM groups WHERE status = 1 ORDER BY group_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    ?>
    <select name="group" id="group" class="form-control" >
        <option value="">Select group</option>
        <?php
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
                echo '<option value="'.$row['group_id'].'">'.$row['group_name'].'</option>';
            }
        }else{
            echo '<option value="">group not available</option>';
        }
        ?>
    </select>
	</td>
	<td>
              <font color="green">Subject :</font>
              </td>
	<td>
    <select name="subject" id="subject" class="form-control">
        <option value="">Select group first</option>
    </select>
	</td>
    <td>
              <font color="green">lecture Name :</font>
              </td>
	<td>
    <select name="lecture" id="lecture" class="form-control">
        <option value="">Select subject first</option>
    </select>
	</td>
	</tr>
	</tbody>
	</table>
<br>    
      </div>
    </div>
  </div>
</div>
</body>
</html>