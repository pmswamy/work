<?php 
if (session_status() === PHP_SESSION_NONE) session_start();
   include_once 'dbconn.php';
   $uid=$_SESSION['user'];
  
   $lid=$_GET['lid'];
   $records=mysql_query("select*from table_listing where listing_id='$lid'");
   $listdetails=mysql_fetch_assoc($records);
   $bprice=$listdetails['listing_price'];

 if(mysql_query("insert into table_booking(booking_listing_id,booking_user_id,booking_amount)values($lid,$uid,$bprice)"))
 	{
 		echo "<script>  alert('Booking successfully completed !');
 				window.location.href='viewindex.php'; </script>";
 	}
 	else
 	{
 		echo "<script>alert('Booking is failed !');
 				window.location.href='viewindex.php'; </script>";
    }
?>
    		