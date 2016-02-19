<?php

 include 'dbconn.php';
 $sql="select* from table_listing";		 
$records=mysql_query($sql);				
?>
<htmt>
<head>
<title>Listing Details</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>	
<body bgcolor="skyblue">
		<div id="header"><h1 align="center">Squaredoor.com</h1></div>
			<div align="center"><?php include 'links.php';?></div>
	<div id="login-form" align="center"><h1>Listing Details</h1>
		<table width="700" border="1" >
			<tr>
				<th>Listing Id</th>
				<th>Listing owner id</th>
				<th>Listing Name</th>
				<th>Listing Address</th>
				<th>Listing Price</th>
				<th>Actions</th>
			</tr>
<?php 
	while ($table_listing=mysql_fetch_assoc($records))
	{
			echo "<tr>";
			echo "<td>".$table_listing['listing_id']."</td>";
			echo "<td>".$table_listing['listing_owner_user_id']."</td>";
			echo "<td>".$table_listing['listing_name']."</td>";
			echo "<td>".$table_listing['listing_address']."</td>";
			echo "<td>".$table_listing['listing_price']."</td>";
			echo "<td>"."<a  href='update.php?lid=$table_listing[listing_id]&lwid=$table_listing[listing_owner_user_id]'>"."<h1 font-color=red>Update<h1>"."</a>"."</td>";
			echo  "</tr>";
	}
?>
		</table>
	</div>
		<div id="footer">
			<div align="center" ><?php echo "<p>Copyright &copy; 1999-" . date("Y") ."by"."Squaredoor.com</p>";?></div>
		</div>
</body>
</html>										