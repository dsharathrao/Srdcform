
<?php
$conn=mysql_connect("localhost","root","") or die("Could not connect");
mysql_select_db("srdcform",$conn) or die("could not connect database");
?>

<title>Sri Ramakrishna(Autonomous) Degree College, Nandyal</title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<script defer src="gettime.js"></script>
</head>
<body>
<div id="main">
  <div id="top">
    <div style="float:right"> <span style="display:block; padding-top:30px"><a href="#button" style="text-decoration:none;"><b><span id="id39018"> </span></b></a></span> </div>
   <a href="#button" style="font-weight:bold; color:#ff0044; text-decoration:none; font-size:24px;">
  <a href="index.php"><img src="images/srdclogo.jpg" width="98%" alt=""> </a>
   </a> </div>
             
                            
                            
                            
                            

<br>
<br><center>
  	<!-- Search form --><div class="form-group">
				<div>
					<span class="input-group-addon">Search</span>
					<input type="text" name="search_text" id="search_text" placeholder="Search by lecture"/>
				</div>
			</div></center>
			<br />
		



<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"fetch2.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>

	<div id="result"></div>
		</div>
		<div style="clear:both"></div>
		<br />
	</div>

	</div>