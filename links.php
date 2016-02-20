<?php
if (session_status() === PHP_SESSION_NONE) session_start();
	include_once 'dbconn.php';?>

<html>
		<title>Index</title>
	</head>
<table width="800" cellpadding="1" cellspacing="1" align="center">
	<tr>
			<th><a href="index.php">Home</a></th>
	<?php
		if(!isset($_SESSION['user']))
			{?>
			<th><a href="reg.php">Registration</a></th>
			<th><a href="login.php">Login</a></th>
	<?php }
		else {?>
			<th><a href="viewlistings.php">viewListings</a></th>
			<th><a href="createlisting.php">Add Listing</a>
			<th><a href="viewindex.php">View Listings for Bokking</a></th>
			<th><a href="bookedlist.php">Booked Listings</a></th>
			<th><a href="logout.php?logout">Logout</a></th>
		<?php }?>
	</tr>

</table>
</html>