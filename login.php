<?php
if (session_status() === PHP_SESSION_NONE) session_start();
	include_once 'dbconn.php';
		if(isset($_SESSION['user'])!="")
		{
			header("Location: index.php");
		}

		if(isset($_POST['login']))
			{
				$email =$_POST['email'];
				$upass =$_POST['pass'];
				$res=mysql_query("SELECT * FROM table_user WHERE user_email='$email' and user_password='$upass'");
				$row=mysql_num_rows($res);
				
						if($row!=0)
							{
								$details = mysql_fetch_assoc($res);
									 if(!empty($details))
	   									 {
	    									$dbemail=$details['user_email'];
											$password=$details['user_password'];
	   									 }
	   							if($email == $dbemail  && $upass==$password)
								{
									echo "sucessfully logined";
									$_SESSION['user'] = $details['user_id'];
									header("Location:index.php");
								}
								else
								{
									echo "<script>alert('Username / Password Seems Wrong..!');
 										     window.location.href='login.php'; </script>";
								}
							}
					
					echo "<script>alert('Username / Password Seems Wrong... !');
											window.location.href='login.php';</script>";
			}
?>
<html>
		<head>
			<title>Login</title>
			<link rel="stylesheet" href="style.css" type="text/css" />
		</head>
	<body bgcolor="skyblue">
			<div id="header"><h1 align="center">Squaredoor.com</h1></div>
				<div  align="center"><?php include 'links.php';?></div>
		<div id="login-form" align="center"><h3>Sign In Here </h3>
			<form method="post">
				<table align="center" width="25%">
					<tr>
						<td><input type="text" name="email" placeholder="Your Email" required /></td>
					</tr>
					<tr>
						<td><input type="password" name="pass" placeholder="Your Password" required /></td>
					</tr>
					<tr>
						<td><button type="submit" name="login">Sign In</button></td>
					</tr>
				</table>
			</form>
		</div>
			<div id="footer">
				<div align="center" ><?php echo "<p>Copyright &copy; 1999-" . date("Y") ."by"."Squaredoor.com</p>";?></div>
			</div>
	</body>
</html>