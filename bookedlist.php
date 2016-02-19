<?php
if (session_status() === PHP_SESSION_NONE) session_start();
 include 'dbconn.php';

$uid=$_SESSION['user'];

   $sql="select* from table_booking where booking_user_id='$uid'order by booking_id desc";
   $records=mysql_query($sql);
?>

<html>
	<head>
		<title>Booking Details</title>
 		 <link rel="stylesheet" href="style.css" type="text/css" />
  	</head>	
<body bgcolor="skyblue">
	<div id="header"><h1 align="center">Squaredoor.com</h1></div>
		<div align="center"><?php include 'links.php';?></div>
<div id="login-form" align="center"><h3>Your Booked details</h3>
	<?php
		while ($table_booking=mysql_fetch_assoc($records))
		{
			 echo "<table>";
 				echo "<tr>"."<td>"."Booking_Id:"."</td><td>".$table_booking['booking_id']."</td></tr>";
 				echo "<tr>"."<td>"."Booking_Listing_Id:"."</td><td>".$table_booking['booking_listing_id']."</td></tr>";
 				echo "<tr>"."<td>"."Booking_User_Id:"."</td><td>".$table_booking['booking_user_id']."</td></tr>";
 				echo "<tr>"."<td>". "Booking_Amount:"."</td><td>".$table_booking['booking_amount']."</td></tr>";
 				echo "---------------------------------------";
		}  
			echo"</table>"
	?>
</div>
	<div id="footer">
		<div align="center" ><?php 
			echo "<p>Copyright &copy; 1999-" . date("Y") ."by"."Squaredoor.com</p>";?></div>
		</div>
</body>
</html>										