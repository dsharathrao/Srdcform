
<link rel="stylesheet" href="css/styles.css">
<link href="css/menu1.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/extra.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/responsiveslides.css">
<link rel="stylesheet" href="css/bootstrap1.css">
<script src="js/menu.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
}
-->
</style>
<div id="main">
 <div id="top">
    <div style="float:right"> <span style="display:block; padding-top:30px"><a href="#button" style="text-decoration:none;"><b><span id="id39018"> </span></b></a></span> </div>
   <a href="#button" style="font-weight:bold; color:#ff0044; text-decoration:none; font-size:24px;">
  <a href="index.php"><img src="images/srdclogo.jpg" width="98%" alt=""> </a>
    <!-- <img src="images/companyname.png" alt="" style="margin-top:20px" class="border_none" /> --></a> </div><br>
  <Table width="100%">
  <tr>
  <td>
  <?php @$_SESSION['login']; 
  error_reporting(1);
  ?>
  </td>
    <td>
	<?php
	if(isset($_SESSION['login']))
	{
	 echo "<div align=\"right\"><a href=\"index.php\">Home</a>|<a href=\"signout.php\">Signout</a></div>";
	 }
	 else
	 {
	 	echo "&nbsp;";
	 }
	?>
	</td>
	
  </tr>
  
</table>
