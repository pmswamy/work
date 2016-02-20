<?php
 include 'Booking.php';
 
class listing
{
	
 		public static function Create()
 		{
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
 					echo "<script> alert('successfully registered '); </script>";
 				}
 				else
 				{
 					echo "<sctipt> alert('error while registering of your listing');</script>";
 				}
 			}

 		}
 			
 		public static function Display()
 		{
 			include 'dbconn.php';
 			
 			$sql="select* from table_listing order by listing_id desc";
 			$records=mysql_query($sql);
 			while ($table_listing=mysql_fetch_assoc($records))
 			{
 				echo '<table>';
 				echo '<tr><td>Listing_Id:</td><td>'.$table_listing['listing_id'].'</td></tr>';
 				echo '<tr><td>Listing_Owner_id:</td><td>'.$table_listing['listing_owner_user_id'].'</td></tr>';
 				echo '<tr><td>Listing_Name:</td><td>'.$table_listing['listing_name'].'</td></tr>';
 				echo '<tr><td>Listing_Address:</td><td>'.$table_listing['listing_address'].'</td></tr>';
 				echo '<tr><td>Listing_price:</td><td>'.$table_listing['listing_price'].'</td></tr>';
 				echo '<tr><td colspan="2"><input type="button" id="btn" onclick="booklisting('.$table_listing['listing_id'].')" value="Book it"></td></tr>';
 				echo '--------------------------------------';
 			}
 			echo'</table>';
 			
 		
 		}
 		
 		public static function  Update()
 		{
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
 		}
 		
 		public static function View()
 		{
 			
 			include 'dbconn.php';
 			$sql="select* from table_listing ";
 			$records=mysql_query($sql);
 		
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
 		}
}