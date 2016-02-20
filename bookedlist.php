<?php
if (session_status() === PHP_SESSION_NONE) session_start();
 include 'dbconn.php';
 include 'booking.php';

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
	<div><?php booking::display()?></div>
</div>
	<div id="footer">
		<div align="center" ><?php 
			echo "<p>Copyright &copy; 1999-" . date("Y") ."by"."Squaredoor.com</p>";?></div>
		</div>
</body>
</html>										