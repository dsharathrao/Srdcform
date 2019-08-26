<?php
session_start();
?>
<html>
<head>
<title>Online Survay</title>
<link rel="stylesheet" href="css/styles.css">
<link href="css/extra.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script src="js/jquery.min.js"></script>
		  
</head>
<body>

<?php
include("header.php");
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysql_query("select * from admin_user where login='$loginid' and pass='$pass'");
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION[login]=$loginid;
	}
}
if (isset($_SESSION[login]))
{
echo "<h2 style='color:green; font-weight:bold; font-size:26px;' align=center>Please wait....</h2>";
		echo '<table width="28%"  border="0" align="center">
  <center>
   
    <a href="admin_home.php" >Click here for Go to Admin Page</a></td></center>
 
 
</table>';
   
		exit;
		

}


?>
	<div class="wrap">
	  <div class="main">
	  <style>
.table_brd { border:1px solid #eee; }
.table_brd td{ border:1px solid #eee; padding:5px; }
.table_brd td input { padding:5px 8px; border:1px solid #888; border-radius:5px; width:250px;  line-height:20px; }
.table_brd td select { padding:5px 8px; border:1px solid #888; border-radius:5px; width:250px;  line-height:20px; }
</style>
<script type="text/javascript">
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

</script> 
<center><h2 style='color:green; font-weight:bold; font-size:26px;'>welcome to Admin Panel</h2> <br>
<td valign="top"><form name="form1" method="post" action="">
      <table width="200" border="0">
        <tr>
          <td><span class="style2">Login ID:</span></td>
          <td><input name="loginid" type="text" id="loginid2"></td>
        </tr>
        <tr>
          <td><span class="style2">Password:</span></td>
          <td><input name="pass" type="password" id="pass2"></td>
        </tr>
        <tr>
          <td colspan="2"><span class="errors">
            <?php
		  if(isset($found))
		  {
		  	echo "<font color=red> *Invalid Username or Password</font>";
		  }
		  ?>
          </span></td>
          </tr>
        <tr>
          <td colspan=2 align=center class="errors">
		  <input name="submit" type="submit" id="submit" value="Login" class="btn btn-primary">		  </td>
        </tr></center>
		
</div></div>
</body>
</html>