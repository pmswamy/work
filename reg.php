<?php 
if (session_status() === PHP_SESSION_NONE) session_start();
if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}
include_once 'dbconn.php';

if(isset($_POST['btn-signup']))
{
	$uname =($_POST['uname']);
	$email =($_POST['email']);
	$upass =($_POST['pass']);
	$level=1;
	$uname = trim($uname);
	$email = trim($email);
	$upass = trim($upass); 
	
		if(mysql_query("INSERT INTO table_user(user_email,user_password,user_name,user_level) VALUES('$email','$upass','$uname',$level)"))
		{
			?>
				<script>alert('successfully registered ');</script>
				<?php
			}
			else
			{
				?>
				<script>alert('error while registering you...');</script>
				<?php
			}
}		
?>

<html>
<head>
<title>Registration System</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body bgcolor="skyblue">
		<div id="header"><h1 align="center">Squaredoor.com</h1></div>
			<div   align="center"><?php include 'links.php';?></div>
	<div id="login-form" align="center"><h3>New Users Registration</h3>
		<form method="post">
			<table align="center" width="25%">
				<tr>
					<td><input type="text" name="uname" placeholder="User Name" required /></td>
				</tr>
				<tr>
					<td><input type="email" name="email" placeholder="Your Email" required /></td>
				</tr>
				<tr>
					<td><input type="password" name="pass" placeholder="Your Password" required /></td>
				</tr>
				<tr>
					<td><button type="submit" name="btn-signup">Sign Up</button></td>
				</tr>
			</table>
		</form>
	</div>
		<div id="footer">
			<div align="center" ><?php echo "<p>Copyright &copy; 1999-" . date("Y") ."by"."Squaredoor.com</p>";?></div>
		</div>
</body>
</html>