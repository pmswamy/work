<?php
if (session_status() === PHP_SESSION_NONE) session_start();
include_once 'dbconn.php';
$uid=$_SESSION['user'];

$lid=$_GET['lid'];
$lwid=$_GET['lwid'];

$record=mysql_query("select * from table_listing where listing_id='$lid'");
$details=mysql_fetch_assoc($record);
$name=$details['listing_name'];
$add=$details['listing_address'];
$amount=$details['listing_price'];

if(isset($_POST['update']))
{
	$listname =($_POST['lname']);
	$address =($_POST['address']);
	$price =($_POST['price']);
	 
	
	
		if(mysql_query("update table_listing set listing_name='$listname',listing_address='$address',listing_price='$price' where listing_id='$lid'"))
				{
				echo "<script>alert('Your listing details is successfully Updateded !');
 						window.location.href='viewlistings.php'; </script>";
		        }

				else
					{
					echo "<script>alert('Your updation failed Plese verifye details !');
 						window.location.href='update.php'; </script>";
					}

}
?>
  <html >
		<head>
			<title>Update Listing</title>
			<link rel="stylesheet" href="style.css" type="text/css" />
		</head>
	<body bgcolor="skyblue">
		<div id="header"><h1 align="center">Squaredoor.com</h1></div>
			<div  align="center"><?php include 'links.php';?></div>
	<div id="login-form" align="center"><h2>Update Listings</h2>
		<form method="post">
			<table width="25%">
				<tr>
					<td><input type="text" name="lname" value=<?php echo $name;?>  /></td>
				</tr>
				<tr>
					<td><input type="text" name="address" value=<?php echo $add;?>  /></td>
				</tr>
				<tr>
					<td><input type="text" name="price" value=<?php echo $amount;?>  /></td>
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






