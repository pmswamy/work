<?php include 'listing.php';?>
  <html >
		<head>
			<title>Update Listing</title>
			<link rel="stylesheet" href="style.css" type="text/css" />
		</head>
	<body bgcolor="skyblue">
		<div id="header"><h1 align="center">Squaredoor.com</h1></div>
			<div  align="center"><?php include 'links.php';?></div>
	<div id="login-form" align="center"><h2>Update Listings</h2>
	<div><?php listing::Update();?></div>
		<form method="post">
			<table width="25%">
				<tr>
					<td><input type="text" name="lname" /></td>
				</tr>
				<tr>
					<td><input type="text" name="address" /></td>
				</tr>
				<tr>
					<td><input type="text" name="price"  /></td>
				</tr>
				<tr>
					<td><button type="submit" name="update">Update List</button></td>
				</tr>
			</table>
		</form>
	</div>
	
		<div id="footer">
			<div align="center" ><?php echo "<p>Copyright &copy; 1999-" . date("Y") ."by"."Squaredoor.com</p>";?></div>
		</div>
	</body>
</html>  






