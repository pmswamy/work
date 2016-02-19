<?php
if (session_status() === PHP_SESSION_NONE) session_start();
	include_once 'dbconn.php';
		if(isset($_POST['submit']))
		{
			$lname =($_POST['lname']);
			$address =($_POST['address']);
			$price =($_POST['price']);
			$ownerid=$_SESSION['user'];
				if(mysql_query("INSERT INTO table_listing(listing_owner_user_id,listing_name,listing_address,listing_price) VALUES($ownerid,'$lname','$address',$price)"))
					{
						echo "<script>alert('Your Listing successfully added ');</script>";
					}
				else
					{
						echo "<script>alert('error while registering of your listing');</script>";
					}
		}		
?>

<html >
		<head>
			<title>Add Listing</title>
			<link rel="stylesheet" href="style.css" type="text/css" />
		</head>
	<body bgcolor="skyblue">
		<div id="header"><h1 align="center">Squaredoor.com</h1></div>
			<div  align="center"><?php include 'links.php';?></div>
	<div id="login-form" align="center"><h2>Add New Listings</h2>
		<form method="post">
			<table width="25%">
				<tr>
					<td><input type="text" name="lname" placeholder="Listing Name" required /></td>
				</tr>
				<tr>
					<td><input type="text" name="address" placeholder="enter the address" required /></td>
				</tr>
				<tr>
					<td><input type="text" name="price" placeholder="enter price" required /></td>
				</tr>
				<tr>
					<td><button type="submit" name="submit">Add List</button></td>
				</tr>
			</table>
		</form>
	</div>
	
		<div id="footer">
			<div align="center" ><?php echo "<p>Copyright &copy; 1999-" . date("Y") ."by"."Squaredoor.com</p>";?></div>
		</div>
	</body>
</html>