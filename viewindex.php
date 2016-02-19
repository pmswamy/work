<?php
include 'dbconn.php';

$sql="select* from table_listing order by listing_id desc";
$records=mysql_query($sql);
?>
<html>
	<head>
		<title>Listing Details</title>
 		 <link rel="stylesheet" href="style.css" type="text/css" />
  	</head>	
<body bgcolor="skyblue">
<div id="holder">
	<div id="header"><h1 align="center">Squaredoor.com</h1></div>
		<div align="center"><?php include 'links.php';?></div>
<div id="login-form" align="center"><h3>Your Booking Dashboard</h3>
	<?php
		while ($table_listing=mysql_fetch_assoc($records))
		{
			 echo "<table>";
 				echo "<tr>"."<td>"."Listing_Id:"."</td><td>".$table_listing['listing_id']."</td></tr>";
 				echo "<tr>"."<td>"."Listing_Owner_id:"."</td><td>".$table_listing['listing_owner_user_id']."</td></tr>";
 				echo "<tr>"."<td>"."Listing_Name:"."</td><td>".$table_listing['listing_name']."</td></tr>";
				echo "<tr>"."<td>"."Listing_Address:"."</td><td>".$table_listing['listing_address']."</td></tr>";
 				echo "<tr>"."<td>". "Listing_price:"."</td><td>".$table_listing['listing_price']."</td></tr>";
				echo "<tr>"."<td>"."<a  href='booking.php?lid=$table_listing[listing_id]'>"."<h1 font-color=red>click hear to booking<h1>"."</a>"."</td></tr>";
				echo "--------------------------------------";
		}  
			echo"</table>"

?>
</div>
</div>
	<div id="footer">
		<div align="center" ><?php 
			echo "<p>Copyright &copy; 1999-" . date("Y") ."by"."Squaredoor.com</p>";
?></div></div>

</body>
</html>										